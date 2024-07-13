<!DOCTYPE html>
<html translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Card</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/4419d23bf4.js" crossorigin="anonymous"></script>
</head>
<body class="create-card">
    <img src="{{ asset('img/photo/photo-3.jpg') }}">
    <div class="container">
        <h1 class="title">Bagi Undangan</h1>
        @livewire('link')
    </div>
</body>
</html>