@extends('admin.widget.index')
@section('content')
<style type="text/css">
  .content{
    overflow: auto;
  }
</style>
<div class="col-md-7">
    <h2 class="fa fa-1 fa-home">Trang chủ/Admin/Chi tiết admin</h2>
    <h2  style="padding-left: 250px">Thông tin tài khoản</h2>
</div>
<div class="col-md-7" style="padding-left: 250px">
  <div style="margin-top: 25px">
    <form>
        <div class="text-center" class="col-md-12">
          <img src="admin_asset/img/icon3.png" class="rounded" alt="...">
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Email</label>
          <label class="form-control">dangsy1998@gmail.com</label>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Giới tính </label>
          <label class="form-control">Nam</label>
      </div>
      <div class="form-group col-md-12">
          <label for="inputPassword4">Phone</label>
          <label class="form-control">038568987</label>
      </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Address</label>
    <label class="form-control">TP Nam Định</label>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">City</label>
      <label class="form-control">Nam Định</label>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Chức vụ</label>
      <label class="form-control">Nhân viên</label>
  </div>
  <div class="form-group col-md-12">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
    </select>
</div>
<div class="form-group col-md-12">
  <label for="inputZip">Ghi chú</label>
  <label class="form-control">Không</label>
</div>
</div>
</div>
<div class="col-md-12"> 
 <a href="" class="btn btn-outline-danger"><button class="btn-success">Sửa thông tin</a>
  <a href="" class="btn btn-outline-danger"><button class="btn-success">Back</a>
  </div>
</form>
</div>
</div>
@endsection