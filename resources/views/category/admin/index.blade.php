@extends('layouts.admin')

@section('content')
<div class="container mt-1">
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

        </div>
    </div>
</div>
@endsection