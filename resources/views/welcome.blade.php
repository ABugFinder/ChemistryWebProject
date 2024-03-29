<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChemistryWeb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fbfbfb;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: rgb(174,225,238);
                background: radial-gradient(circle, rgba(174,225,238,1) 0%, rgba(148,187,233,1) 100%);
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a style="font-size: 20px" href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a style="font-size: 20px" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="font-size: 20px" href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <a href="/home" style="text-decoration: none; color: #FFF;"> ChemistryWeb - Project </a>
                </div>

                @auth
                @else
                    @if (Route::has('register'))
                        
                        <div class="links">
                            <a style="font-size: 20px;" href="{{ route('tetrisTest') }}">¡Probar Tetris!</a>
                            <a style="font-size: 20px;" href="{{ route('memoramaTest') }}">¡Probar Memorama!</a>
                        </div>
                    @endif
                @endauth
                
            </div>
        </div>
    </body>
</html>
