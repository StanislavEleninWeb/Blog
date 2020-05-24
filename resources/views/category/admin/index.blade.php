@extends('layouts.admin')

@section('content')
<div class="container mt-1">
    <div class="row">
        <div class="col">

            <!-- Search form for category -->
            <form id="searchForm" method="GET" action="{{ route('admin.category.index') }}" class="form form-inline">

                <div class="form-group m-1">
                    <label for="title" class="sr-only">Title</label>
                    <input id="title" type="text" name="title" class="form-control" placeholder="Category" @if(isset($title)) value="{{ $title }}" @endif>
                </div>

                <div class="form-group m-1">
                    <label for="active" class="sr-only">Active</label>
                    <select id="active" name="active" class="form-control">
                        <option value="">All</option>
                        <option value="1" @if(isset($active) && $active ==1) selected @endif>Active</option>
                        <option value="0" @if(isset($active) && $active ==0) selected @endif>Deactivated</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="parent" class="sr-only">Parent</label>
                    <select name="parent" class="form-control">
                        <option value="">Parent</option>
                        @foreach($parents as $itr)
                        <option value="{{ $itr->id }}" @if(isset($parent) && $itr->id == $parent) selected @endif>{{ $itr->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="btn-group m-1">
                    <x-inputs.buttons.submit type="info" text="Search"/>
                    <a id="searchFormReset" href="#" class="btn btn-secondary">Reset</a>
                </div>

            </form>

            <table class="table table-striped table-hover mt-2">
                <thead class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Active</th>
                <th></th>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->active }}</td>
                        <td><x-inputs.buttons.rud route="admin.category" :id="$category->id" /></td>
                </tr>
                @endforeach
                </tbody>

            </table>

            {{ $categories->links() }}

        </div>
    </div>
</div>
@endsection