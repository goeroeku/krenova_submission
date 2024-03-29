<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="gedrixCreative">

        <title>Krenova - @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="//cdn-ck.gedrix.net/assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//assets.gedrix.net/gedrixcom/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="//cdn-ck.gedrix.net/assets/js/jquery.js"></script>
        <script src="//cdn-ck.gedrix.net/assets/js/bootstrap.min.js"></script>
        @yield('bottom_js')
    </body>
</html>
