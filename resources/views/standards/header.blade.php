@extends('standards.external')
    
    @section('body_content')
        
        @section('header')
            @include('header')
        @endsection

        @section('primary_header')
            @include('primary_header')
        @endsection

        @yield('after_header')
        

@endsection

