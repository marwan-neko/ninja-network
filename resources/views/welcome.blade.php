<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-3">
    <h1>Welcome to Ninja Network</h1>
    <p>Click button below to view list of ninjas</p>

    <a href="{{ route('ninjas.index') }}" class="btn mt-4 inline-block">
        Find Ninjas!
    </a>    
</body>
</html>