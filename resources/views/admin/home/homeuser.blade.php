@extends('admin.widget.index')
@section('content')
<style type="text/css">
	.main-content {
  		padding-left: 25px;
  		padding-right: 25px;
 	 	padding-top: 60px;
 	 	margin-left: 120px;
	}
/*	.client.client-tile {
  		padding: 24px 20px;
  		margin-bottom: 25px;
  		display: table;
  		table-layout: fixed;
  		width: 100%;
  		font-size: 22px;
  		font-weight: 300;
  		color: #4285f4;
	}*/
	.box1{
		text-align: center;
		padding-top: 25px;
		border-radius: 5px;/*bo cong cạnh*/
		height: 80px;
		width: 230px;
		background: #f29ff2;
		font-size: 16px;
	}
	.box2{
		margin-left: 300px;
		text-align: center;
		padding-top: 25px;
		border-radius: 5px;
		background: #f4c842;
		height: 80px;
		width: 230px;
		font-size: 16px;
	}
}
</style>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="main-content">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="box1">Danh sách các lái xe</div>	
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="box2">Danh sách các user</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-sm-6 col-xs-6">
		<h2 style="text-align: center;">Trang chủ</h2>
	</div>
</div>
</body>
@endsection
</html>