@extends('layouts.front')
@section('title', $meta->title)
@section('content')

    //INCLUDE YOUR CODE HERE

    {{--    Services--}}
    <h1>-Services-</h1>
    @include('front.components.services', ['services' => $services])

    {{--Blog--}}
    <h1>-Reviews-</h1>
    @include('front.components.reviews')
    {{--Blog--}}
    <h1>-Blog-</h1>
    @include('front.components.posts_home_page', ['posts' => $posts])

    {{--Customers Logo--}}
    <h1>-Customer Logos-</h1>
    @include('front.components.customer_logo', ['customers' => $customers])



@endsection
