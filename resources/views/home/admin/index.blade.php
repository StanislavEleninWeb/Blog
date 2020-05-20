@extends('layouts.admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h3>Most Viewed</h3>

            <table>
                <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Category</th>
                <th>Published</th>
                </thead>
                
                @foreach(mostViewed as itr)
                <tr>
                    <td></td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h3>Recent Posts</h3>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h3>Recent Comments</h3>
        </div>
    </div>
</div>


<!--
<x-alerts.alert type="danger" message="Alert message" class="mt-4">
Component slot
</x-alerts.alert>

<x-inputs.buttons.back class="btn-lg" type="secondary" text="Back" url="http://blog.stanislavelenin.demo"/>

<x-inputs.buttons.submit type="primary" text="Submit" class="btn-lg mt-4"/>
-->

@endsection