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
							<x-inputs.buttons.rud route="admin.role" :id="$role->id" />
						</td>
					</tr>
					@endforeach

				</table>

			</div>
		</div>
	</div>

@endsection