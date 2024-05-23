<?php

namespace App\Http\Controllers;
use App\Models\Drinks;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function drinks()
    {
        $drinks = Drinks::all();
        return view('drinks', compact('drinks'));
    }

    public function importCsv(Request $request)
    {
        $request->validate([
            'csv-file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv-file');
        Excel::import(new ProductsImport, $file);

        return redirect('drinks')->with('message', 'Drinks imported successfully.');
    }

    public function destroy($id)
{
    $drink = Drinks::findOrFail($id);
    $drink->delete();

    return redirect()->back()->with('success', 'Drink deleted successfully');
}

}
