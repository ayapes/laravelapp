<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body{
                font-size:16pt;
                color:#000;
                margin: 0px;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            #wrapper{
                width: 60%;
                max-width: 800px;
                margin: 0 auto;
                /* border:1px solid red; */
            }

            h1{
                font-size: 20pt;
                color:#000;}

h2{
    padding-bottom: 1rem;
    /* border-bottom: 10px solid #999; */
    font-size:15px;
}

            .menutitle{
                font-size:14pt;
                font-weight: bold;
                margin: 0;
            }

            .content{
                margin: 10px;
            }

            .footer{
                text-align: right;
                font-size: 10pt;
                margin: 10px;
                border-bottom: solid 1px #CCC;
                color:#CCC;
            }

            .error{
                font-size:75%;
                color:red;
                border:1px solid red;
                padding: 0.5em;
                background-color:rgb(255, 201, 201);
                margin-bottom: 1rem;
            }

            form{
                font-size:75%;
            padding-bottom: 1rem;
        border-bottom:1px solid #DDD;}

            .item_top{
                width: 100%;
                display: flex;
                /* justify-content: space-between; */
            }

            .item_top>p{
                margin: 0;
                padding: 5px;
                text-align: center;
                background-color:rgb(236, 176, 201);
            }

            .item_top>p>span{
                display: inline-block;
                width: 100%;
                border:1px solid #000;
                font-size:80%;
                line-height: 220%;
            }

            .item_top>p:nth-of-type(1){
                width: 40%;
            }

            .item_top>p:nth-of-type(2),
            .item_top>p:nth-of-type(3){
                width: 20%;
            }

            .item_top>p:nth-of-type(4),
            .item_top>p:nth-of-type(5){
                width: 10%;
            }

            .item{
                width: 100%;
                display: flex;
                /* justify-content: space-between; */
            }

            .item>p{
                margin: 0;
                padding: 5px;
                text-align: center;
            }

            .item>p>span{
                display: inline-block;
                width: 100%;
                border:1px solid #000;
                font-size:80%;
                line-height: 200%;
            }

            .item>p:nth-of-type(1){
                width: 40%;
            }

            .item>p:nth-of-type(2),
            .item>p:nth-of-type(3){
                width: 20%;
            }

            .item>p:nth-of-type(4),
            .item>p:nth-of-type(5){
                width: 10%;
            }

            .categoryname{
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .categoryname p{
                margin: 5px;
                padding: 5px 20px;
                border:1px solid rgb(87, 87, 87);
            }

            .link{
                text-align: center;
                font-size:75%;
                padding-top: 3rem;
            }

            .link a{
                text-decoration: none;
                color:rgb(235, 72, 153);
            }

            .box02{
                border-top:2px solid #DDD;
                margin-bottom: 3rem;
                padding: 1rem;
            }



        </style>
    </head>
    <body>
        <div id="wrapper">
        <h1 id="text">@yield('title')</h1>
<h2>@yield('menu01')</h2>
<div class="form">
    @yield('form')
</div>
<h2>@yield('menu02')</h2>
    <div class="content">
        @yield('content')
    </div>
<h3 class="link">
    @yield('link')
</h3>

    <div class="footer">
        @yield('footer')
    </div>
</div>
@include('market.js-market')
    </body>
</html>