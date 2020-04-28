@extends('layouts.app')

@section('title')Demo Title @endsection
@section('description')Demo Description @endsection
@section('keywords')Demo keywords @endsection

@section('nav')
	@include('welcome')
@endsection

@section('content')

<x-alerts.alert type="danger" message="Alert message" class="mt-4">
Component slot
</x-alerts.alert>

<x-inputs.buttons.back class="btn-lg" type="secondary" text="Back" url="http://blog.stanislavelenin.demo"/>

<x-inputs.buttons.submit type="primary" text="Submit" class="btn-lg mt-4"/>

@endsection