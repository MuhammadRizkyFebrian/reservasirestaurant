<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 text-white">
        <h1 class="text-lg font-bold">Reservasi Restoran</h1>
    </nav>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
