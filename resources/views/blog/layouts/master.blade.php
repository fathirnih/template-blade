<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page - My Website')</title>
    <link rel="stylesheet" href="{{ asset('blog/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    @include('blog.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('blog.footer')

    <script src="{{ asset('blog/script.js') }}"></script>
</body>
</html>
