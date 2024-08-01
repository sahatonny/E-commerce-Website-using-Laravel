<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shopify')</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-brand">
                <h1><a href="">Shopify</a></h1>
            </div>
            <nav class="header-nav">
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/products">Products</a></li>

                </ul>
            </nav>
            <div class="header-search">
                <form action="" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </header>

    <style>
        /* Header Styles */
.header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    border-bottom: 2px solid #444;
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.header-brand h1 {
    margin: 0;
}

.header-brand a {
    color: #fff;
    text-decoration: none;
    font-size: 24px;
}

.header-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.header-nav li {
    margin: 0 15px;
}

.header-nav a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.header-nav a:hover {
    text-decoration: underline;
}

.header-search form {
    display: flex;
}

.header-search input[type="text"] {
    padding: 5px;
    font-size: 16px;
    border: none;
    border-radius: 4px 0 0 4px;
}

.header-search button {
    padding: 5px 10px;
    font-size: 16px;
    border: none;
    border-radius: 0 4px 4px 0;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

.header-search button:hover {
    background-color: #0056b3;
}

        </style>

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
