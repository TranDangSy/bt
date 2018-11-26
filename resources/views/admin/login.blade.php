<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('../css')}}">
	<title>Login admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/csslogin.css">
</head>
<style type="text/css">
    .panel-border-color{
        border-top: inset;
        border-top-color: #ff8080;
        border-left-color: #33ff33;
        border-right-color: #33ff33;
        border-bottom-color: #ffff1a;
    }
    body{
        font-family: Helvetica, Arial, Tahoma, sans-serif !important;
    }
</style>
<body>
	<div class="container-fluid main-content">
        <div class="splash-container">
            <div class="panel panel-border-color">
                <div class="panel-heading">
                    <img src="https://media.vinfast.vn/frontend02/web_images/vf-livestream-backdrop-animate-logo-3.png" alt="logo" width="120px" height="120px">
                    <span class="splash-description">Wellcom to Vinfast</span>
                </div>
                <div class="panel-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach    
                    </div>
                    @endif
                    @if(session('thongbao'))
                            {{session('thongbao')}}
                    @endif
                    <form action="{{route('admin/login')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <input id="email" type="email" placeholder="Nhập email" class="form-control" name="email" required autofocus>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" placeholder="Nhập password" class="form-control" name="password" required>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><a href="{{'public/create'}}" target="_blank">Đăng kí</a></div>
                            <div class="col-md-6 col-sm-6"><a href="{{'public/updatelogin'}}" target="_blank">Quên mật khẩu ?</a></div>
                        </div>
                        <div class="form-group login-submit">
                            <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</body>
</html>