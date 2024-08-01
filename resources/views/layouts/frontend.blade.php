<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My eCommerce Site')</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add your JavaScript files here -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1><a href="{{ route('home') }}">My E-Commerce Site</a></h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>



                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>
