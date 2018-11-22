@extends('standards.header')
    
    @section('after_header')
        
        @section('home_slider')
            @include('home_slider')
        @endsection

        @section('product')
            @include('product', ["violet"=>"blue"] )
            @include('product', ["violet"=>"red"] )
            @include('product', ["violet"=>"violet"] )
        @endsection

        @section('footer')
            @include('footer')
        @endsection

@endsection

