@include('widget.header')
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style type="text/css">
            .navigation a {
                font-family: Arial;
                color: #fff;
                text-transform: uppercase;
            }
            .navigation a:hover {
                text-decoration: none;
                border-bottom: 2px solid #c00000;
            }
            .actived {
                border-bottom: 2px solid #c00000;
            }
            .navigation {
                text-align: right;
                margin: 28px 60px;
                font-size: 13px;
            }
            .navigation ul li {
                display: inline-block;
                margin-left: 30px;
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div class="row" style="background: #000; padding: 20px 10px 20px 50px; height: 115px;">
            <div class="col-md-6">
                <img src="https://vinfast.vn/web_images/vf-logo-image.png" alt="" class="img-responsive" style="max-height: 74px;">
            </div>
            <div class="col-md-6">
                <div class="navigation">
                    <ul>
                        <li class="actived"><a href="">Trang chủ</a></li>
                        <li><a href="">Về chúng tôi</a></li>
                        <li><a href="">Newsroom</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
    <div class="container">
        @yield('content')
    </div>
    <div class="footer" style="color: red">
        @yield('footer')
    </div>