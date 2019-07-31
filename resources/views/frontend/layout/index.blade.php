<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bất động sản Phú Đô">
    <title>BDS Phú Đô</title>
    <!-- Phân biệt giữa các vùng trong public -->
    <base href="{{asset('')}}" >
    <!-- Boostrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awsome -->
    <link rel="stylesheet" href="css/font-awsome.min.css">
</head>

<body>
    <div id="container">

        @include('frontend.layout.header')
        @yield('content');

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
