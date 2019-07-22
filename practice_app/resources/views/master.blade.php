<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>This From Parent</h1>
    </div>
    <div>
        @include('sources.sample', 
                ['numbers' => [1, 2, 3, 4]])
    </div>
    @include('sources.header')
        @yield('body')
    @include('sources.footer')
</body>
</html>