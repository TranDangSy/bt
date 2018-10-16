<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('../admin_asset')}}">
	<title>Login admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    body{
        font-family: 'Roboto', Arial, sans-serif !important;
        font-size: 13px;
        line-height: 1.4;
        background: #eee;
    }
    	.container-fluid{
            margin-right: auto;
            margin-left: auto;
        }
        .main-content{
            padding-top: 15px;
            padding-left: 25px;
            padding-right: 25px;
        }
        *{
            box-sizing: border-box;
        }
        .splash-container{
            max-width: 401px;
            margin: 50px auto;
        }
        div{
            display: block;
        }
        .splash-container .panel{
            margin-bottom: 30px;
        }
        .splash-container .panel-heading{
            text-align: center;
            margin-bottom: 20px;
            padding-top: 20px;
            padding-bottom: 0px;
        }
        .panel-heading{
            font-size: 18px;
            font-weight: 300px;
            padding-left: 0px;
            padding-right: 0px;
            padding-bottom: 10px;
            margin: 0px 20px;
            border-bottom-width: 0px;
            border-radius: 3px 3px 0 0;
        }
        .splash-description{
            text-align: center;
            display: block;
            line-height: 20px;
            font-size: 13px;
            color:red;;
            margin-top: 11px;
            padding-bottom: 10px
        }
        .splash-container .panel .panel-body{
            padding: 20px 30px 15px;
        }
        .form-control{
            border-width: 1px;
            box-shadow: none;
            padding: 10px 12px;
            font-size: 15px;
            transition: none;
            display: block;
            width: 100%;
            height: 48px;
            line-height: 1.5;
            background-color: #fff;
            border: 1px solid #d5d8de;
            border-radius: 2px;
        }
        .btn-xl{
            padding: 0px 12px;
            font-size: 15px;
            line-height: 43px;
            border-radius: 3px;
            font-weight: 500;
        }
        .btn-primary{
            background-color: #4285f4; 
        }
        .login-submit .btn{
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
	<div class="container-fluid main-content">
        <div class="splash-container">
            <div class="panel panel-border-color">
                <div class="panel-heading">
                    <img src="https://media.vinfast.vn/frontend02/web_images/vf-livestream-backdrop-animate-logo-3.png" alt="logo" width="100px" height="100px">
                    <span class="splash-description">Chào mừng đến với trang quản trị Vinfast</span>
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