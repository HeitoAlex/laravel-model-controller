<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('page-title, Movies')
        </title>

        @vite('resources/js/app.js')

    </head>
    <body>
        @yield('main-content')
    </body>
</html>
