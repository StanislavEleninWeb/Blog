@extends('layouts.app')

@section('nav')
	@include('nav.admin.index')
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				
				<!-- Search form for category -->
				<form method="POST" action="#" class="form form-inline">
					@csrf
					@method('POST')

					<div class="form-group">
						<label for="title" class="sr-only">Title</label>
						<input type="text" name="title" class="form-control" placeholder="Category">
					</div>

					<div class="form-group">
						<label for="parent" class="sr-only">Parent</label>
						<select name="parent" class="form-control">
							<option>Parent</option>
							@foreach($categories as $category)
								<option>{{ $category->title }}</option>
							@endforeach
						</select>
					</div>

					<x-inputs.buttons.submit type="info" text="Search"/>

				</form>

				<table class="table table-condensed">
					<tbody>
						<th>ID</th>
						<th>Title</th>
						<th>Active</th>
						<th></th>
					</tbody>

					@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							<td>{{ $category->title }}</td>
							<td>{{ $category->active }}</td>
							<td>
								<x-inputs.buttons.rud route="admin.category" :id="$category->id" />
							</td>
						</tr>
					@endforeach

				</table>

			</div>
		</div>
	</div>
@endsection