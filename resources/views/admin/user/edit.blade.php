@extends('admin.master')
<?php 
// include 'D:\XAMPP\htdocs\demo\public\admin\filemanager\config\config.php';
// include 'D:\XAMPP\htdocs\demo\public\admin\filemanager\dialog.php';
?>

@section('content')
<script src="{{url('/')}}/public/admin/js/tinymce/tinymce.min.js"></script>
<script src="{{url('/')}}/public/admin/js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="{{url('/')}}/public/admin/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/style.css">
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="#">Sản phẩm</a></li>
					<li class="active">Sửa sản phẩm</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="animated fadeIn">
	<div class="col-lg-10">
		<div class="card">
			<div class="card-header">
				<strong>Sửa sản phẩm</strong>
			</div>
			<div class="card-body card-block">
				<form method="POST" role="form" class="form-horizontal">
					@csrf
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Full name </label></div>
						<div class="col-12 col-md-9"><input type="text" id="fullname" name="fullname" placeholder="Text" class="form-control" value="{{$user->fullname}}">
							<small class="form-text text-muted">
								@if($errors->count() > 0)
								{{$errors->first('fullname')}}
								@endif
							</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Email </label></div>
						<div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="Text" class="form-control" value="{{$user->email}}">
							<small class="form-text text-muted">
								@if($errors->count() > 0)
								{{$errors->first('email')}}
								@endif
							</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone </label></div>
						<div class="col-12 col-md-9"><input type="text" id="phone" name="phone" placeholder="Text" class="form-control" value="{{$user->phone}}">
							<small class="form-text text-muted">
								@if($errors->count() > 0)
								{{$errors->first('phone')}}
								@endif
							</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label></div>
						<div class="col-12 col-md-9"><input type="text" id="address" name="address" placeholder="Text" class="form-control" value="{{$user->address}}">
							<small class="form-text text-muted">
							</small>
						</div>
					</div>
					
					
					<div>
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Submit
						</button>
					</div>
				</form>

			</div>

		</div>

	</div>
</div>
<script src="{{url('/')}}/public/admin/fancybox/jquery.fancybox.pack.js"></script>
<script src="{{url('/')}}/public/admin/assets/js/script.js"></script>
@stop
