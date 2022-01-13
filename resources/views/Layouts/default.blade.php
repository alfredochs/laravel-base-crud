<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page')</title>
    @include('partials.header_scripts')
</head>

<body>
    <header class="container">
        @yield('header_content')
    </header>
    <main class="container">
        @yield('main_content')
    </main>
    <footer class="container">
        @yield('footer_content')
    </footer>

</body>

</html>
