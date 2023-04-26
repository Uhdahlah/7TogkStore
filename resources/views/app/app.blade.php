<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <link rel="icon" href="assets/img/scenery/image5.jpg" >
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/smoothproducts.css">
</head>

<body>
    @yield('content')
@include('app.footer.footer')
</body>
</html>