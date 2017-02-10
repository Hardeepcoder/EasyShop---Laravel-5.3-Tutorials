@extends('front.master')

@section('content')

<h1 align="center">{{Auth::user()->name}} Thankyou</h1>

<p class="panel-body">
    Your order has been placed</p>

@endsection
