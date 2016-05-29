@extends('layout.app')

@section('title', '登录')

@section('menu')
@endsection

@section('stylesheets')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/auth/login.css') }}">
@show

@section('content')
<div class="login-page col-sm-6 col-sm-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading text-center"><h4>后台管理系统</h4></div>
        <div class="panel-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="form-horizontal login-form col-sm-10 col-sm-offset-1" method="post" action="{{ url('login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">邮箱</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="email" value="{{ old('email') }}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">密码</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="password" name="password" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember_me" >记住我
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <input class="btn btn-primary" type="submit" value="登录" >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection