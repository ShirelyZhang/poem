<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | 后台管理系统</title>
        @section('lib-stylesheets')
        <link rel="stylesheet" type="text/css" href="{{ asset('/static/libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/static/libs/bootstrap/css/bootstrap-theme.min.css') }}">
        @show
        @section('stylesheets')
        <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/base.css') }}">
        @show
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                @section('menu')
                <nav class="navbar navbar-default menu-list">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">首页</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        系统管理 <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('admin/list') }}">管理员</a></li>
                                    </ul>
                                </li>
                                @if (Auth::check())
                                <li><a href="{{ url('logout') }}">退出</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                @show
                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </div>
        @section('lib-scripts')
        <script type="text/javascript" src="{{ asset('/static/libs/jquery/jquery-1.9.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/static/libs/bootstrap/js/bootstrap.min.js') }}"></script>
        @show
        @section('scripts')
        @show
    </body>
</html>