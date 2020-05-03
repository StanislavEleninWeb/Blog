@extends('layouts.app')

@section('nav')
	@include('nav.admin.index')
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col">

				<table class="table table-condenced table-hover">
					<tbody>
						<th>ID</th>
						<th>Role</th>
						<th>
							<a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">+ Add</a>
						</th>
					</tbody>

					@foreach($roles as $role)
					<tr>
						<td>{{ $role->id }}</td>
						<td>{{ $role->title }}</td>
						<td>
							<a href="{{ route('admin.role.show', $role->id) }}" class="btn btn-sm btn-info">Show</a>
							<a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-sm btn-warning">Edit</a>
							<a href="{{ route('admin.role.destroy', $role->id) }}" class="btn btn-sm btn-danger">Delete</a>
						</td>
					</tr>
					@endforeach

				</table>

			</div>
		</div>
	</div>

@endsection