@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Category</h3>
            {{ $category->id }}
            {{ $category->title }}

        </div>
        <div class="col">
            <h3>Parent</h3>
            @if(isset($category->parent))
            {{ $category->parent->id }}
            {{ $category->parent->title }}
            @endif
        </div>
        <div class="col">
            <h3>Children</h3>
            @foreach($category->children as $child)
            {{ $child->id }}
            {{ $child->title }}

            @foreach($child->children as $subChild)
            {{ $subChild->id }}
            {{ $subChild->title }}



            @endforeach

            @endforeach
        </div>
    </div>
</div>

@endsection