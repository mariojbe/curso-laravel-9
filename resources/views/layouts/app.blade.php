<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - ABMNET</title>
    <link rel="stylesheet" href="/resources/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="app">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @yield('content')
    </div>

</body>

</html>
