<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body{
                font-size:16pt;
                color:#999;
                margin: 5px;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            h1{
                font-size: 50pt;
                text-align: right;
                color:#9bccb3;
                margin: -20px 0px -30px 0px;
                letter-spacing: -0.09em;}

            ul{
                font-size:12pt;
            }

            hr{
                margin: 25px 100px;
                border-top:1px dashed #ddd;
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
                font-size:75%;}

                .database{
                    width: 50%;
                    max-width:500px;
                    margin-left:10%;
                    display:flex;
                    flex-wrap:wrap;
                    justify-content:space-between;
                    box-sizing: border-box;
                }

                .database>.title{
                    text-align: center;
                    font-weight:bold;
                    background-color:rgb(201, 221, 216);
                    color:#666;
                    
                }
                .database>.box{
                    box-sizing: border-box;
                    padding: 3px;
                    margin: 0;
                }
                .database>.box:nth-of-type(4n-3){
                    width:10%;
                }

                .database>.box:nth-of-type(4n-3)>span{
                    text-align: center;
                    font-size:65%;
                    height: 100%;
                }

                .database>.box:nth-of-type(4n-3)>span>a{
                    text-decoration: none;
                    color:#666;
                }

                .database>.box:nth-of-type(4n-3)>span>a:hover{
                    color:rgb(169, 212, 188);
                }

                .database>.box:nth-of-type(4n-2){
                    width:30%;
                }
                .database>.box:nth-of-type(4n-1){
                    width:40%;
                }
                .database>.box:nth-of-type(4n){
                    width:20%;
                }

                .database>.box>span{
                    display:inline-block;
                    border:1px solid #666;
                    width: 100%;
                    padding: 3px;
                    box-sizing: border-box;
                    font-size:75%;
                }

                .caution{
                    font-size:70%;
                    color:red;
                }

        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>

    <hr size="1">

    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
    </body>
</html>