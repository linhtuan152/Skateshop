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
						<div class="col col-md-3"><label for="select" class=" form-control-label">Loại sản phẩm</label></div>
						<div class="col-12 col-md-9">
							<select id="id_cat" name="id_cat" class="form-control">
								@foreach($category as $value)
								<option  value="{{$value->id_cat}}">{{$value->name_cat}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm </label></div>
						<div class="col-12 col-md-9"><input type="text" id="name_pro" name="name_pro" placeholder="Text" class="form-control" value="{{$product->name_pro}}">
							<small class="form-text text-muted">
								@if($errors->count() > 0)
								{{$errors->first('name_pro')}}
								@endif
							</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá sản phẩm(gốc) </label></div>
						<div class="col-12 col-md-9"><input type="text" id="price_pro" name="price_pro" placeholder="Text" class="form-control" value="{{$product->price_pro}}">
							<small class="form-text text-muted">
								@if($errors->count() > 0)
								{{$errors->first('price_pro')}}
								@endif
							</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá sản phẩm(sale) </label></div>
						<div class="col-12 col-md-9"><input type="text" id="sale_price_pro" name="sale_price_pro" placeholder="Text" class="form-control" value="{{$product->sale_price_pro}}">
							<small class="form-text text-muted"></small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Ảnh  </label></div>
						<div class="container col-12 col-md-9">
							<div class="row top">
								<div class="col-12 col-md-9 text-center ">
									<a href="{{url('/')}}/public/admin/filemanager/dialog.php?type=1&field_id=none_img" data-fancybox-type="iframe" class="btn btn-info fancy">Choose Image</a>
									<img src="{{$product->img}}" alt="" id="prev_img">
									<input type="text" value="{{$product->img}}" class="form-control" id="none_img" name="img">
								</div>
							</div>
							<small class="form-text text-muted">
								@if($errors->count() > 0)
								{{$errors->first('img')}}
								@endif
							</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="text-input" class=" form-control-label">Mô tả </label></div>
						<div class="col-12 col-md-9"><input type="text" id="description" name="description" placeholder="Text" class="form-control" value="{{$product->description}}">
							<small class="form-text text-muted">
							</small>
						</div>
					</div>
					
					
					<div>
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Submit
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
							<i class="fa fa-ban"></i> Reset
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
