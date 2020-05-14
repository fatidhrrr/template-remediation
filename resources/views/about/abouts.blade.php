@extends('layouts/master')

@section('content')

    @include('home/nav')

    @include('/about/header')

    @include('/home/about')

    @include('/about/gallery')

    @include('home/testimonial')
 
    @include('home/insta')

    @include('home/footer')

@endsection