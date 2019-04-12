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
						<strong class="card-title">Danh sách khách hàng</strong>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Create At</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								@foreach($user as $value)
								<tr>
									<td>{{$value->id_cus}}</td>
									<td>{{$value->fullname}}</td>
									<td>{{$value->email}}</td>
									<td>{{$value->phone}}</td>
									<td>{{$value->address}}</td>
									<td>{{$value->created_at}}</td>
									<td><a href="{{route('edit-user',[$value->id_cus])}}"><i class="fa fa-edit"></i> Sửa</a></td>
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
