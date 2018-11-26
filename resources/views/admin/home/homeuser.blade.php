@extends('admin.widget.index')
@section('content')
<h2 class="fa fa-home fa-1">Trang chủ</h2>
<div class="widget widget-tile">
	<div class="row">
		<div class="col-md-4 widget-content first-content" data-aos="flip-up">
			<div class="content-number">Tổng số lái xe:</div>
			<div class="number">100</div>
		</div>
		<div class="col-md-4 col-sm-4 widget-content second-content" data-aos="flip-up">
			<div class="content-number">Số nhân viên quản trị:</div>
			<div class="number">90</div>
		</div>
	</div>		
	<div class="noi-dung">
		<h2 class="noi-dung-header">Nội dung</h2>
	</div>
</div>	
<div class="main-content container-fluid">
	<div class="row	">
		<div class="col-md-10">
			<div class="col-md-3">
				<label>Từ ngày</label>
				<div class='input-group date' id='datetimepicker' data-date-format="yyyy-mm-dd" data-min-view="2" >
					<input type='text' id="newstart" class="form-control" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
			<div class="col-md-3">
				<label>Đến ngày</label>
				<div class="form-group">
					<div class='input-group date' id='datetimepicker'>
						<input type='text' class="form-control" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<label for="">Chọn chức vụ</label>
				<div class="input-group" style="width: 120px;">
					<select id="cattype" class="form-control">
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-2" style="">
			<label for=""></label>
			<button style="height: 45px;" id="submit" class="form-control btn-success">Thống kê lái xe</button>
		</div>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Email</th>
				<th>Ngày bắt đầu làm việc</th>
				<th>Ngày chỉnh sửa thông tin</th>
				<th>Tên lái xe</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>thuan@gmail.com</td>
				<td>12-3-2000</td>
				<td>23-6-2015</td>
				<td>Nguyễn Văn Thuần</td>
			</tr>
			<tr>
				<td>an262@gmail.com</td>
				<td>12-1-1998</td>
				<td>12-3-2016</td>
				<td>Đinh Thành An</td>
			</tr>
			<tr>
				<td>an262@gmail.com</td>
				<td>12-1-1998</td>
				<td>12-3-2016</td>
				<td>Nguyễn Tuấn Anh</td>
			</tr>
		</tbody>
	</table>
	@endsection