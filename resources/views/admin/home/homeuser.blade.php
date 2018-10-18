@extends('admin.widget.index')
@section('content')
<style type="text/css">
	.noi-dung .noi-dung-header h2{
		margin-top: 40px;
		margin-right: 160px;
		text-align: center;
	}
	.widget-tile h4{
		margin: 10px;
	}
</style>
<h4 class="fa fa-home">Trang chủ</h4>
<div class="widget widget-tile">
	<div class="row">
		<div class="col-md-4 widget-content first-content" data-aos="flip-up">
			<div class="content-number">Tổng số lái xe:</div>
			<div class="number">100</div>
		</div>
		<div class="col-md-4 col-sm-4 widget-content second-content" data-aos="flip-left">
			<div class="content-number">Số nhân viên quản trị:</div>
			<div class="number">90</div>
		</div>
	</div>		
<div class="noi-dung">
	<div class="noi-dung-header">
		<h2>Nội dung</h2>
	</div>
	<div class="noi-dung-content">
		<div class="row">
			<a href="#">Lịch lái xe</a>
			<a href="#">Lịch họp</a>
			<a href="#">Thời gian làm việc</a>
		</div>
	</div>
</div>
@endsection