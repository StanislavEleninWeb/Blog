@extends('layouts.admin')


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
                <tr @if($role->deleted_at == null) @else class="table-secondary" @endif>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->title }}</td>
                    <td>
                <x-inputs.buttons.rud route="admin.role" :id="$role->id" softDelete="{{ $role->deleted_at }}" />
                </td>
                </tr>
                @endforeach

            </table>

        </div>
    </div>
</div>

@endsection