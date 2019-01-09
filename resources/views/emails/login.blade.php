<!DOCTYPE html>
    <html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Welcome Email</title>
    </head>

    <body>
        <h2>Welcome to the site {{$user['name']}}</h2>
        <br/>
        Your registered email-id is {{$user['email']}}
    </body>

    </html>
