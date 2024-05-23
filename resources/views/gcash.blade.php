@extends('layout')

@section('content')

<div class="container">
    <div class="camera-wrapper">
        <div id="reader"></div>
    </div>

    <div class="result-wrapper">
        <div id="qrcode"></div>
        <div id="generatedData"></div>
    </div>
</div>


<script src="{{ asset('node_modules/html5-qrcode/html5-qrcode.min.js') }}"></script>
<script src="{{ asset('public/jquery.min.js') }}"></script>
<script src="{{ asset('public/qrcode.min.js') }}"></script>

<script>
    const scannerConfig = {
        fps: 30,
        qrbox: 200
    };
    const scanner = new Html5QrcodeScanner("reader", scannerConfig);

    scanner.render(data => {
        document.getElementById("generatedData").innerHTML = "<p>Scanned data: " + data + "</p>";
    });

    const qrcodeConfig = {
        width: 400,
        height: 400,
        colorDark: "white" // Changed ColorDark to colorDark to match QRCode.js specifications
    };
    const qrcode = new QRCode("qrcode", qrcodeConfig);
</script>
<style>


</style>

@endsection
