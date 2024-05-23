@extends('layout')

@section('content')
    <div class="con">
        <h1 class="font-bold text-blue-600">Kinds of Foods</h1>
        <a href="{{ route('food.csv') }}" class="text-xl hover:bg-blue-600 p-2 text-center" style="background-color: #b2cff0; color: #000000; text-decoration: none; border-radius: 10px">Export to CSV</a>
        <a href="/foods/pdf" class="text-xl hover:bg-blue-600 p-2 text-center" style="background-color: rgb(226, 255, 200); text-decoration: none; border-radius: 10px; hover: black; margin-left: 10px" >Download PDF</a>
        <table class="table-auto w-full border-collapse border border-white-400 bg-white">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 px-4 py-2">Name</th>
                    <th class="border border-gray-400 px-4 py-2">Description</th>
                    <th class="border border-gray-400 px-4 py-2">Price</th>
                    <th class="border border-gray-400 px-4 py-2">QRcode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $food)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-400 px-4 py-2">{{ $food->name }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $food->description }}</td>
                        <td class="border border-gray-400 px-4 py-2">${{ $food->price }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ QrCode::generate($food->id) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
