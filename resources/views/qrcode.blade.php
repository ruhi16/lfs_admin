<!DOCTYPE html>
<html>
<head>
    <title>QR Code Display</title>
</head>
<body>
    <h1>Generated QR Code:</h1>
    <div>
        @php
            use SimpleSoftwareIO\QrCode\Facades\QrCode;
        @endphp
        {!! QrCode::size(80)->generate('Hello') !!}
    </div>
    {{-- <div id="qrcode-container"></div> --}}
    {{-- <script src="/your-javascript-file.js"></script>  <!-  Include your JS file  --> --}}
</body>
</html>