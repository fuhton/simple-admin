<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Admin</title>
        <link rel="stylesheet" href="{{ asset('packages/fuhton/simple-admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('packages/fuhton/simple-admin/css/bootstrap-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('packages/fuhton/simple-admin/css/style.css') }}">
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/simple-admin">Simple Admin</a>
		    @if (Auth::check())
                        <ul class="nav pull-right">
                            <li><a href="/simple-admin/edit-user">Edit User</a></li>
                            <li><a href="/simple-admin/logout">Logout</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
            <footer class="span12">
                <p>© Simple Admin 2013</p>
            </footer>
        </div>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
    <script src="{{ asset('packages/fuhton/simple-admin/js/bootstrap.min.js') }}"></script>
</html>
