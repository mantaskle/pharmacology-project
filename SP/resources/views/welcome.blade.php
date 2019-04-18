<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMAE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>


            html, body {
                background-image: url("/css/img/background.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                color: #c4c4c4;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .bg-image
            {
            background-image: url("/css/img/background.jpg");

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100vh; 
            top: 0;
            bottom: 0;
            z-index: -10;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
                z-index: 5;
            }

            .title {
                font-size: 106px;
                color: #ffffff;
            }

            .links > a {
                color: #cecece;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 40%;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>

    <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Pradžia</a>
                        @else
                            <a href="{{ route('login') }}">Prisijungti</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registracija</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="bg-text">
                    <div class="content">
                        <div class="title m-b-md">
                            AMAE
                        </div>

                        <div class="links">
                            <a href="{{ url('/apie-mus') }}">Apie mus</a>
                            <a href="{{ url('/kontaktai') }}">Kontaktai</a>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
