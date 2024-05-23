<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,td {
            border: 1px solid #333;
        }
    </style>
</head>
<body>
    <h1>Foods List</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Qr Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->description }}</td>
                    <td>{{ $food->price }}</td>
                    <td><img src="data:image/png;base64,{{ base64_encode($food->qrCode) }}" alt="QR Code"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
