@extends('admin.widget.index')
@section('content')
<style type="text/css">
	.fa-2 {
		font-size: 24px;
		margin-left: 10px;
	}
	.btn{
		margin-left: 10px;
		.content-contact{
		height: 100%;
	}
	.content{
		height: auto !important;
		overflow: scroll;
	}
</style>
<div class="content-contact">
	<div class="row">
		<h2 class="fa fa-2 fa-home">Trang chủ/Liên hệ</h2>
	</div>
	<div class="row"><a href="javascript:void(0)" class="btn btn-primary">Sửa</a></div>
</div>
	<table class="table table-hover">
    	<tr>
      		<th scope="col">Email</th>
		    <td>dangsy1998@gmail.com</td>    		
		</tr>
    	<tr>
    		<th>Hotline</th>
      		<td>0386496611</td>
    	</tr>
    	<tr>
      		<th scope="col">Địa chỉ</th>
     		<td>Số 54 Phố Triều Khúc, Triều Khúc, Thanh Xuân, Hà Nội</td>
    	</tr>
    	<tr>
    		<th>Map</th>
    		<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.194583243261!2d105.79669111458708!3d20.984835794653073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDw7RuZyBOZ2jhu4cgR2lhbyBUaMO0bmcgVuG6rW4gVOG6o2k!5e0!3m2!1svi!2s!4v1540177896021" width="900" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></td>
    	</tr>
	</table>
</body>
@endsection
</html>