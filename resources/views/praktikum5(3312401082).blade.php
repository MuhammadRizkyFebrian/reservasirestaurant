<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 5</title>

    {{-- CSS Lokal --}}
    <link rel="stylesheet" href="{{ asset('css/style-Rizky.css') }}">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-gray-100 p-6">

    {{-- Judul dari CSS lokal --}}
    <h1>Judul Merah</h1>

    {{-- Judul menggunakan Tailwind --}}
    <h1 class="text-red-600 text-3xl font-bold mb-4">Ini Gambar Saya</h1>

    {{-- Gambar dengan Tailwind class --}}
    <div class="flex gap-6">
        <img src="{{ asset('images/gambar1.jpg') }}" alt="Gambar 1" class="w-64 rounded shadow-lg">
        <img src="{{ asset('images/gambar2.jpg') }}" alt="Gambar 2" class="w-64 rounded shadow-lg">
    </div>

</body>
</html>
