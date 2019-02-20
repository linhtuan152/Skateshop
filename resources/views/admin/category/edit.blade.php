@extends('admin.home')

@section('content')
<div class="col-lg-6">
	<div class="card">
		<div class="card-header">
			<strong>Sửa danh mục sản phẩm</strong>
		</div>
		<div class="card-body card-block">
			<form method="POST" role="form" class="form-horizontal">
				@csrf
				<div class="row form-group">
					<div class="col col-md-3"><label class=" form-control-label">Tên danh mục cũ</label></div>
					<div class="col-12 col-md-9">
						<p class="form-control-static">{{$category->name_cat}}</p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên danh mục mới</label></div>
					<div class="col-12 col-md-9"><input type="text" id="name_cat" name="name_cat" placeholder="Text" class="form-control" value="{{$category->name_cat}}">
						<small class="form-text text-muted">
							@if($errors->count() > 0)
								{{$errors->first('name_cat')}}
							@endif
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

@stop
