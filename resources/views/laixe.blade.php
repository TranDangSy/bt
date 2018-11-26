@extends('admin.widget.index')
@section('content')
<style type="text/css">
.be-content .search-box{
    margin-left: 180px;
    margin-bottom: 30px;
    position: absolute;
/*    top: 50%;
 left: 50%;*/
    transform: translate(-50%, -50%);
    background: #2f3640;
    height: 55px;
    border-radius: 40px;
    padding: 10px;
}

.be-content .search-box:hover > .search-txt{
    width: 240px;
    padding: 0 6px;
}

.be-content .search-box:hover > .search-btn{
    background: white;
}

.be-content .search-btn{
    color: #e84118;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #2f3640;
    display: flex;
    justify-content: center;
    align-items: center;
}
.be-content .search-txt{
    border:none;
    background: none;
    outline: none;
    float: left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4;
    line-height: 40px;
    width: 0px;
}
.be-content .btn-primary{
    font-size: 20px;
    margin-top: 10px;
    margin-bottom: 20px;
    margin-left: 20px;
}
.be-content .fa-1{
    font-size: 24px;
}
.be-content .table-content {
    margin-top: 50px;
}
</style>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">   
            <div class="page-title">
                <div class="title_left col-md-12 col-sm-2">
                    <h2 class="fa fa-1 fa-home">Trang chủ/Lái xe</h2>
                    <h3>Danh sách người dùng</h3>
                    <a href="javascript:void(0)" class="btn btn-primary">Thêm</a>
                    <h4>Search</h4>
                    <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Type to search...">
                        <a class="search-btn" href="javascript:void(0)">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>{{-- end search --}}
                </div>{{-- end title-left --}}
            </div>{{-- end page-title --}}    
            <div class="col-md-12 col-sm-12 col-xs-12">
                <table class="table-content table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 30%;">Tên</th>
                            <th style="width: 30%;">Số điện thoại</th>
                            <th style="width: 40%;">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><span class="badge badge-success">1</span></td>
                             <td>Trần Đăng Sỹ </td>
                            <td>01642512868</td>
                            <td>
                                <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                                <a href="" class="btn btn-success" title="Khoá">Bật</a>
                                <a class="btn btn-warning" href="">Sửa</a>
                                <a class="btn btn-danger"  href="{{'public/admin/chitiet'}}">Xem</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><span class="badge badge-success">2</span></td>
                            <td>Nguyễn Tuấn Anh</td>
                            <td>01642512868</td>
                            <td>
                                <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                                <a href="" class="btn btn-success" title="Khoá">Bật</a>
                                <a class="btn btn-warning" href="">Sửa</a>
                                <a class="btn btn-danger"  href="{{'public/admin/chitiet'}}">Xem</a>
                            </td>
                        </tr>  
                        <tr>
                            <td class="text-center"><span class="badge badge-success">3</span></td>
                            <td>Đinh Thành An</td>
                            <td>01642512868</td>
                            <td>
                                <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                                <a href="" class="btn btn-success" title="Khoá">Bật</a>
                                <a class="btn btn-warning" href="">Sửa</a>
                                <a class="btn btn-danger"  href="{{'public/admin/chitiet'}}">Xem</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>{{-- end row--}}
    </div>
</div>
</body>
@endsection
</html>


