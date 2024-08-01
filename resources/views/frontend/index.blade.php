<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shopify')</title>
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-white py-3 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-brand">
                <h1 class="h3 mb-0"><a href="/" class="text-white text-decoration-none">Shopify</a></h1>
            </div>
            <nav class="header-nav">
                <ul class="list-unstyled d-flex mb-0">
                    <li class="mr-3"><a href="/home" class="text-white text-decoration-none" href="/products">Home</a></li>
                    <li><a href="/products" class="text-white text-decoration-none" href="/products">Products</a></li>
                </ul>
            </nav>
            <div class="header-search">
                <form action="" method="GET" class="form-inline">
                    <input type="text" name="query" class="form-control mr-2" placeholder="Search...">
                    <button type="submit" class="btn btn-secondary">Search</button>
                </form>
            </div>
        </div>
    </header>

    @yield('content')

    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
</body>
</html>
