@extends('layouts.app')

@section('nav')
	@include('nav.admin.index')
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col">
				<form action="{{ route('admin.role.store') }}" method="POST">
					@method('POST')
					@csrf

					<div class="">
						<label>Title</label>
						<input type="text" name="">
					</div>

					<div class="for-input">
						<label>Slug</label>
						<input type="text" name="slug">
					</div>

				</form>
			</div>
		</div>
	</div>

@endsection