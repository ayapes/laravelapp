<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-size: 16pt;
            color: #999;
            margin: 5px;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        #wrapper {
            width: 50%;
            margin: 0 auto;
        }
        @media screen and (max-width: 900px){
            #wrapper {
            width: 80%;
            margin: 0 auto;
        }
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #9bccb3;
            margin: -20px 0px -30px 0px;
            letter-spacing: -0.09em;
        }

        ul {
            font-size: 12pt;
        }

        hr {
            margin: 25px 100px;
            border-top: 1px dashed #ddd;
        }

        .menutitle {
            font-size: 14pt;
            font-weight: bold;
            margin: 0;
        }

        .content {
            margin: 10px;
        }

        .footer {
            text-align: right;
            font-size: 10pt;
            margin: 10px;
            border-bottom: solid 1px #CCC;
            color: #CCC;
        }

        .error {
            font-size: 75%;
            color: red;
            border: 1px solid red;
            padding: 0.5em;
            background-color: rgb(255, 201, 201);
            margin-bottom: 1rem;
        }

        .form {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            text-align: right;
            font-size: 75%;
            /* border:1px solid #000; */
        }

        .database {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .database>.title {
            text-align: center;
            font-weight: bold;
            background-color: rgb(201, 221, 216);
            color: #666;

        }

        .database>.box {
            box-sizing: border-box;
            padding: 3px;
            margin: 0;
        }

        .database>.box:nth-of-type(5n-4) {
            width: 10%;
        }

        .database>.box:nth-of-type(5n-4)>span {
            width: 100%;
            text-align: center;
            font-size: 65%;
            height: 100%;
        }

        .database>.box:nth-of-type(5n-3) {
            width: 10%;
        }

        .database>.box:nth-of-type(5n-3)>span {
            width: 100%;
            text-align: center;
            height: 100%;
        }

        .database>.box:nth-of-type(5n-2) {
            width: 30%;
        }

        .database>.box:nth-of-type(5n-1) {
            width: 40%;
        }

        .database>.box:nth-of-type(5n) {
            width: 10%;
            text-align: center;
        }

        .database>.box>span {
            display: inline-block;
            border: 1px solid #666;
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
            font-size: 75%;
        }

        .caution {
            font-size: 70%;
            color: red;
        }

        .data {
            margin: 0 auto;
            width: 100%;
            max-width: 700px;
            font-size: 50%;
            color: rgb(95, 129, 161);
        }

        .validate {
            width: 100%;
        }

        .validate ul {
            list-style: none;
            margin-left: 0;
            padding-left: 0;
            width: 100%;
            margin: 0 auto;
            max-width: 700px;
            background-color: rgb(255, 214, 214);
            border: 2px solid red;
        }

        .validate ul li {
            text-align: left;
            font-size: 80%;
            color: red;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">※メニュー</h2>
        <ul>
            <li>@show</li>
        </ul>

        <hr size="1">

        <div class="form">
            @yield('form')
        </div>
        <hr size="1">

        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>

    </div>
</body>

</html>