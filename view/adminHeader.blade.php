<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AnyLinuxWork</title>

    <!-- Styles -->
    <link media="all" type="text/css" rel="stylesheet" href="{{{ asset('admin/css/bootstrap.css') }}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{{ asset('admin/css/font-awesome.min.css') }}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{{ asset('admin/css/bootstrap-social.css') }}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{{ asset('admin/css/app.css') }}}">

</head>
<body class="auth">
    <nav class="navbar navbar-default navbar-static-top" style="background-color:#83a61a">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{{ asset('admin/js/jquery-2.1.4.min.js') }}}"></script>
    <script src="{{{ asset('admin/js/bootstrap.min.js') }}}"></script>
</body>
</html>
