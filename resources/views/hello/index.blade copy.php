<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #333;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: rgb(200, 216, 192);
            margin: -40px 0pc -50px 0px;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    @if ($msg != '')
    <p>こんにちわ{{$msg}}さん！</p>
    @else
    <p>何か書いてください</p>
    @endif

    <p><?php echo date("Y年n月j日"); ?></p>
    {{-- <form method="POST" action="/list312">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form> --}}
</body>

</html>