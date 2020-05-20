@extends('layouts.admin')

@section('content')

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col col-md-4">

            <div class="row">
                <div class="col">
                    ID
                </div>
                <div class="col">
                    {{ $role->id }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Title
                </div>
                <div class="col">
                    {{ $role->title }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Slug
                </div>
                <div class="col">
                    {{ $role->slug }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Description
                </div>
                <div class="col">
                    {{ $role->description }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Deleted_at
                </div>
                <div class="col">
                    {{ $role->deleted_at }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Created_at
                </div>
                <div class="col">
                    {{ $role->created_at }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Updated_at
                </div>
                <div class="col">
                    {{ $role->updated_at }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <x-inputs.buttons.back url="{{ URL::previous() }}" type="secondary" text="Back"/>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection