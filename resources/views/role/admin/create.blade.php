@extends('layouts.admin')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col col-md-4">
            <form action="{{ route('admin.role.store') }}" method="POST">
                @method('POST')
                @csrf

                <div class="form-input mt-2">
                    <label for="title">Role</label>
                    <input type="text" name="title" class="form-control">
                    <x-errors.input name="title"/>
                </div>

                <div class="for-input mt-2">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control">
                    <x-errors.input name="slug"/>
                </div>

                <div class="form-input mt-2">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                    <x-errors.input name="description"/>
                </div>
                <div class="form-group">
                    <x-inputs.buttons.submit type="primary" text="Submit" class="mt-2"/>
                    <x-inputs.buttons.back type="secondary" text="Back" url="{{ route('admin.role.index') }}" class="mt-2"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection