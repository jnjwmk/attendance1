<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common1.css')}}">
    @yield('css')
</head>

<body>
    <div class="app">
        <header class="header">
            <h1 class="header__heading">Atte</h1>
            @yield('nav')
        </header>

        <main class="main">
            @yield('main')
        </main>

        <footer class="footer">
            <small>Atte,inc.</small>
        </footer>
    </div>
</body>

</html>