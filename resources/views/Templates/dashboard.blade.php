<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>GAP - Security Agency Corporation</title>

        <!-- Optimized mobile viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
        <meta name="apple-mobile-web-app-capable" content="yes">        

        <!-- Image Links -->
        <link rel="shortcut icon" href="img/gap-logo.png">
        <!-- <link rel="apple-touch-icon" href="icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png"> -->

        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css"/>
    
        <!-- Jquery Link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script src="semantic/semantic.min.js"></script>
          
    </head>
    <body id="{{$page}}" class="admin">
        <div id="dashboard-mainmenu" class="ui icon labeled inverted visible vertical sidebar menu">
        <a id="dashboard" href="dashboard" class="item"><i class="icon home"></i>Dashboard</a>
        <a id="guards" href="guards" class="item"><i class="icon user"></i>Guards</a>
        <a id="forms" href="forms" class="item"><i class="icon file outline"></i>Forms</a>
        <a href="../public" class="item"><i class="icon power"></i>Exit</a>
    </div>
        @yield('content')
    </body>
</html>