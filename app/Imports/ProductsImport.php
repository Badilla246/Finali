<?php
namespace App\Imports;
use App\Models\Drinks;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
            return new Drinks([
                'name'        => $row['name'] ?? '',
                'description' => $row['description'] ?? '',
                'price' => $row['price'] ?? 0,
            ]);

        return null;
    }
}
