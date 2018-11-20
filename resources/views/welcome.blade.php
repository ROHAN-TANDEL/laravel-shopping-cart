<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SieIst</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @include('include')
        <!-- Styles -->
        <style>
            html {
                overflow: scroll;
                overflow-x: hidden;
            }
            ::-webkit-scrollbar {
                width: 0px;
                background: transparent;
            }
            ::-webkit-scrollbar-thumb {
                background: #FF0000;
            }
            body {
                background-color: lightgrey;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                width: 100%;
                max-width: 100%;
                margin-left: 0;
                margin-right: 0;  
                background-image: url(img/body_background.jpg);
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
                font-size: 12px;
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
        @include('header')
        @include('primary_header')
        <div style="display: none">
            
        @include('header')
        </div>
        <div class="fluid-container"> <!-- class="flex-center position-ref full-height"> -->
 <!--            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else -->
      <!--                   <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> -->
<!--                     @endauth
                </div>
            @endif -->
            @include('home_slider')
            @include('product')
        </div>
        @include('footer')
    </body>
</html>
