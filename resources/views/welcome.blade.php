<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel dengan Bootstrap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Selamat datang di Laravel dengan Bootstrap!</h1>
        <p class="lead text-danger">Ini adalah contoh penggunaan Bootstrap dalam proyek Laravel.</p>
        <div class=""></div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
