<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap\css\bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css\font-awesome\css\font-awesome.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css\styles.css') }}" >
</head>
<body>
    @include("baseStructure.header")
    @yield("content")
    @include("baseStructure.footer")
</body>
</html>