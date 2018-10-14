<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('../admin_asset')}}">
	<title>Login admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    body{
        font-family: 'Roboto', Arial, sans-serif;
        font-size: 13px;
        line-height: 1.4;
        background: #eee;
    }
    	.container-fluid{
            margin-right: auto;
            margin-left: auto;
        }
        .main-content{
            padding-top: 25px;
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
        .panel-border-color{
            border-top-color: #4285f4;
        }
        .panel-border-color{
            border-top: 3px solid #c9c9c9;
        }
        .panel{
            background-color: #ffffff;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.04);
            border-width: 0;
            border-radius: 3px;
        }
        .panel-default{
            border-color: #ddd;
        }
        .splash-container .panel-heading{
            text-align: center;
            margin-bottom: 20px;
            padding-top: 40px;
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
            color: #5a5a5a;
            margin-top: 11px;
            padding-bottom: 10px
        }
    </style>
</head>
<body>
	<div class="container-fluid main-content">
        <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading">
                    <img src="admin_asset/img/vinfast.PNG" alt="logo" width="150px" height="40px" class="logo-img">
                    <span class="splash-description">Chào mừng đến với trang quản trị Vinfast</span>
                </div>
            </div>
        </div>
	</div>
</body>
</html>