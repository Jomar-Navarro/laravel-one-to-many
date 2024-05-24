<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel Auth</title>
</head>
<body>
    @include('admin.partials.header')


    <div class="main-wrapper d-flex">
        @include('admin.partials.aside')
        <div class="content p-5">
            @yield('content')
        </div>
    </div>
</body>
</html>
