@include('admin.widget.header')
<body>
    <div class="container" style="width: 100%; height: auto;">
        <div class="row" style="background: black;">
            <div class="col-md-2 col-sm-2">
                <a href="admin">
                    <img src="https://vinfast.vn/web_images/vf-logo-image.png" class="img-responsive" style="max-height: 75px; padding: 10px 0px 10px 10px">
                </a>
            </div>
            <div class="co-md-10 col-sm-10">
                <a href="{{'public/admin/logout'}}" class="fa fa-user faicon">Logout</a>
            </div>    
        </div>{{-- end row --}}
        <div class="select col-md-2 col-sm-2">
            <div class="sidenav">
                <a href="<?php echo "public/admin" ?>" class="fa fa-home">Trang chủ</a>
                <button class="dropdown-btn fa fa-pencil">Quản lí người dùng
                </button>
                <div class="dropdown-container">
                    <a href="<?php echo "public/admin/laixe" ?>">Quản lí lái xe</a>
                </div>
                <button class="dropdown-btn fa fa-pencil">Quản lý hệ thống 
                </button>
                <div class="dropdown-container">
                    <a href="#">Quản lí nhân viên</a>
                    <a href="#">Liên hệ</a>
                    <a href="#">Theo dõi</a>
                </div>
            </div>{{-- end sidenav --}}
        </div>{{-- end select col-2 --}}
        <div class="content col-md-10 col-sm-10">
            @yield('content')
        </div>{{-- end content-10 --}}
    </div>{{-- endcontainer --}}
@include('admin.widget.footer')

