<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="text-center "><h1>multiple dashboard authentication</h1></div> <hr>

<div class="p-3 border d-flex justify-content-center align-items-center bg-info bg-opacity-10 border-info border-start-0 rounded-end" style="height: 200px;">
    @if (Route::has('login'))
    <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button type="button" class="btn btn-success">Log in</button>
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button type="button" class="btn btn-primary">Register</button></a>
            @endif
        @endauth
    </div>
@endif
</div>
<p>admin : mateo91@example.org <br>
   manager: xrunolfsson@example.net <br>
   User: selena21@example.com <br>
    password: 12345678</p>

</body>
</html>
