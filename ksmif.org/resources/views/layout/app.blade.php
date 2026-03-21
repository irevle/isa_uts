<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{getenv('APP_NAME')}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/icon/tab-icon.png" />
    <script src="lib/jquery.js"></script>
    @vite('resources/css/app.css')
    <style>
        body{
            background-image: url("images/icon/background.webp");
            position: relative;
            width: 100%;
            margin: 0px;
            bottom: 0px;
            animation-name: bg-gerak;
            animation-iteration-count: infinite;
            animation-duration: 10s;
        }

        @keyframes bg-gerak {
            0%   {
                background-position-x: 0%;
                background-position-y: 0%;
            }
            25%  {
                background-position-x: 25%;
                background-position-y: 25%;
            }
            50%  {
                background-position-x: 50%;
                background-position-y: 50%;
            }
            75%  {
                background-position-x: 75%;
                background-position-y: 75%;
            }
            100% {
                background-position-x: 100%;
                background-position-y: 100%;
            }
        }
    </style>
</head>
<body>
    @include ('layout.loading')
    @includeWhen($navbar != "homepage", 'layout.mainNavbar')
    @yield('content')
    @include('layout.mainFooter')
</body>
</html>