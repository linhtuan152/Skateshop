@extends('admin.home')

@section('content')
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="#">Danh mục</a></li>
					<li class="active">Danh sách danh mục</li>
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
						<strong class="card-title">Danh sách danh mục</strong>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($category as $value)
								<tr>
									<td>{{$value->id_cat}}</td>
									<td>{{$value->name_cat}}</td>
									<td><a href="{{route('edit-cat',[$value->id_cat])}}"><i class="fa fa-edit"></i> Sửa</a></td>
									<td><a href="{{route('delete-cat',[$value->id_cat])}}"><i class="fa fa-trash"></i> Xóa</a></td>
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