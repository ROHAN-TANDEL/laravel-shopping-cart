@extends('standards.master')

@section('include')
	@include('include')
@endsection

@section('body')
	
		@include('standards.body')

		@yield('body_content')

@endsection