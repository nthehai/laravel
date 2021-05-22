@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
    <head>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- bootstrap-css -->
        <link rel="stylesheet" href="{{URL::asset('backend/css/bootstrap.min.css')}}" >
        <!-- //bootstrap-css -->
        <!-- Custom CSS -->
        <link href="{{URL::asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{URL::asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
        <!-- font CSS -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{URL::asset('backend/css/font.css')}}" type="text/css"/>
        <link href="{{URL::asset('backend/css/font-awesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('backend/css/morris.css')}}" type="text/css"/>
        <!-- calendar -->
        <link rel="stylesheet" href="{{URL::asset('backend/css/monthly.css')}}">
        <script src="{{URL::asset('backend/js/jquery2.0.3.min.js')}}"></script>
        <script src="{{URL::asset('backend/js/raphael-min.js')}}"></script>
        <script src="{{URL::asset('backend/js/morris.js')}}"></script>
    </head>
    <body>
<div class="container">
    <div class="row">
        <div>
            <div style="margin-top: 50px;">
                <h3 style="font-family: sans-serif;"><center>ĐĂNG NHẬP</center></h3>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Ghi nhớ mật khẩu
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ĐĂNG NHẬP
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Quên mật khẩu?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
@endsection
