@include('admin.widget.header')
<style type="text/css">
.select ul {
    /*letter-spacing: 2px;*/
    line-height: 2.5;
    width: 250px;
    padding: 0;
    list-style-type: none;
    text-align: left;
}
.select ul li a{
    text-decoration:none;  
}
.sidenav {
    height: -webkit-fill-available;
    width: 220px;
    position: relative;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #cccccc;
    overflow-x: hidden;
    padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width:100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
}

/* Main content */
.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: #b3b3b3;
    color: white;
}
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}
.dropdown-container a{
    font-size: 16px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}
.container .select{
    padding-left: 0px !important;
}
.dropdown-btn{
    overflow: hidden;
    height: 0;
    height: auto;
    transition : 0.4s;
}
.content{
    background: #EEEEEE;
    padding-right: 0px;
    height: -webkit-fill-available;
}
.container{
    height: 100%;
    padding-left: 0px;
    position: fixed;
    top: 0;
    bottom: 0;
}
.btn-danger{
    padding-left: 60px !important;
    font-size: 16px !important;
}
.home{
    padding-left: 50px !important;
}
</style>
<body>
    <div class="container" style="width: 100%; height: auto;">
        <div class="row" style="background: #000;">
            <div class="col-md-2 col-sm-2">
                <a href="admin">
                    <img src="https://vinfast.vn/web_images/vf-logo-image.png" class="img-responsive" style="max-height: 75px; padding: 10px 0px 10px 10px">
                </a>
            </div>    
    </div>{{-- end row --}}
    <div class="select col-md-2 col-sm-2">
        <div class="sidenav">
            <a href="admin" class="home">Trang chủ</a>
            <button class="dropdown-btn">Quản lí người dùng
            </button>
            <div class="dropdown-container">
                <a href="admin/laixe">Quản lí lái xe</a>
            </div>
            <button class="dropdown-btn">Quản lý hệ thống 
                {{-- <i class="fa fa-caret-down"></i> --}}
            </button>
            <div class="dropdown-container">
                <a href="#">Quản lí nhân viên</a>
                <a href="#">Liên hệ</a>
                <a href="#">Theo dõi</a>
            </div>
        {{--     @if(isset($user_login))
            <div class="dropdown-container">
                <i>{{$user_login->name}}</i>
                <a href="#">Setting</a>
                <a href="admin/logout">Logout</a>
            </div>
            @endif --}}
            <a href="admin/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
    <div class="content col-md-10 col-sm-10">
        @yield('content')
    </div>
</div>
</div>{{-- endcontainer --}}
<script type="text/javascript">
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if
                (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } 
                else 
                {
                    dropdownContent.style.display = "block";
                }
            });
    }
</script>

