<?php

namespace App\Http\Controllers;
use App\Models\Foods;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index()
    {
        $foods = Foods::all();
        return view('foods', compact('foods'));
    }

    public function exportToCsv()
    {
        $foods = Foods::all();

        // Set up CSV headers
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="foods.csv"',
        ];

        // Initialize output buffer
        $output = fopen('php://output', 'w');

        // Write CSV headers
        fputcsv($output, [
            'Food Name',
            'Description',
            'Price',
        ]);

        // Write CSV rows
        foreach ($foods as $foods) {
            fputcsv($output, [
                $foods->name,
                $foods->description,
                $foods->price,

            ]);
        }

        // Close the output buffer
        fclose($output);

        // Return the CSV file as a response
        return Response::make('', 200, $headers);
    }

    public function pdf() {
        $foods = Foods::orderBy('name')->get();
        foreach ($foods as $food) {
            $food->qrCode = QrCode::size(100)->generate($food->id);
        }
        $pdf = Pdf ::loadView('food-lists', compact('foods'));

        return $pdf->download('food-lists.pdf');
    }

}
