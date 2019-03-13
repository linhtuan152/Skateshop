@extends('admin.master')
@section('content')
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
					<li><a href="#">Danh mục</a></li>
					<li class="active">Danh sách sản phẩm</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Danh sách sản phẩm</strong>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Price</th>
									<th>Price(sale)</th>
									<th>Image</th>
									<th>Descriprion</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($product as $value)
								<tr>
									<td>{{$value->id_pro}}</td>
									<td>{{$value->name_pro}}</td>
									<td>{{$value->price_pro}}</td>
									<td>{{$value->sale_price_pro}}</td>
									<td><img src="{{$value->img}}" alt="" style="height: 60px;"></td>
									<td>{{$value->description}}</td>
									<td><a href="{{route('edit-pro',[$value->id_pro])}}"><i class="fa fa-edit"></i> Sửa</a></td>
									<td><a href="{{route('delete-pro',[$value->id_pro])}}"><i class="fa fa-trash"></i> Xóa</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
