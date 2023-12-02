<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @include('sweetalert::alert')
    <title>SMK PERSADA</title>
</head>

<body>

    <div class="grid grid-cols-12  ">
        <div class="col-span-3">
            @include('core.sidebar')
        </div>
        <div class="col-span-9">
            @yield('content')
        </div>
    </div>

    <script src="jquery.js"></script>
    <script src="custom.js"></script>
</body>

</html>
