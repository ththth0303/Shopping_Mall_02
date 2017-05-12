<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{ Html::style('bower/AdminLTE/bootstrap/css/bootstrap.min.css') }}
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}
    {{ Html::style('bower/AdminLTE/dist/css/AdminLTE.min.css') }}
    {{ Html::style('bower/AdminLTE/plugins/iCheck/square/blue.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        {!!Form::open(['url' => asset('login'), 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group has-feedback">
            {!!Form::email('email', $value = '', $attributes = ['placeholder' => trans('view.email'), 'class' => 'form-control'])!!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!!Form::password('password', ['class' => 'form-control'])!!}            
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        {!!Form::submit(trans('view.sigin'), ['class' => 'btn btn-primary btn-block btn-flat'])!!}
        {!!Form::close()!!}
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
{{ Html::script('bower/jquery/dist/jquery.js') }}
</body>
</html>
