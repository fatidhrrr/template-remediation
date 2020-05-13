@extends('layouts/master')

@section('content')

    {{-- Home --}}

    @include('home/nav')

    @include('/home/slider')

    @include('/home/menu')

    @include('/home/feature')

    @include('/home/about')

    @include('/home/video')

    @include('home/testimonial')

    @include('home/insta')

    @include('home/footer')

@endsection