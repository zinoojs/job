<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
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

        <div class="content">

            <div class="title m-b-md">

                <h4>Welcome Future Jobs</h4>
                
            </div>

                <b><p>To Apply the Jobs You Need to first Register (or) Log In</p></b>

                @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/job') }}"> <b>Home</b> </a>
                    @else
                        <a href="{{ route('login') }}" class="p-3"><b>Login</b> &nbsp;|&nbsp; </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"> <b>Register</b> </a>
                    @endif

                    @endauth
                
                @endif
        </div>
    </body>

</html>
