<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel Test About Page</title>
    </head>
    <body>
        <h1>About Page</h1>
        <p>
            <ul>
                <li>{{ $appName }}</li>
                <li>{{ $appVer }}</li>
            </ul>
        </p>
    </body>
</html>
