@extends('layout')

@section('content')
    <div class="con">
        <h1 class="font-bold text-blue-600">Kinds of Drinks</h1>
        <div class="csv-container2">
            <form action="/drinks/csv-import" method="POST" enctype="multipart/form-data" class="upload-csv">
                @csrf
                <div class="download-csv2">
                    <div class="import-csv">
                        <label for="csv-file" class="upload-csv-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-diff" viewBox="0 0 16 16">
                                <path d="M8 5a.5.5 0 0 1 .5.5V7H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V8H6a.5.5 0 0 1 0-1h1.5V5.5A.5.5 0 0 1 8 5m-2.5 6.5A.5.5 0 0 1 6 11h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            Import CSV
                        </label>
                        <input type="file" name="csv-file" id="csv-file" accept=".csv" required>
                        <button type="submit" class="upload-button">Upload</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            @foreach ($drinks as $drink)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body hover:bg-gray-100">
                            <h5 class="card-title">{{ $drink->name }}</h5>
                            <p class="card-text">{{ $drink->description }}</p>
                            <p class="card-text">Price: ${{ $drink->price }}</p>
                            {{ QrCode::generate($drink->id) }}
                            <form action="{{ route('drinks.destroy', $drink->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
