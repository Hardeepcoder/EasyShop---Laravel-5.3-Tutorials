@extends('front.master')

@section('content')
<style>
    table td { padding:10px
    }</style>


<section id="advertisement">
    <div class="container">
        <img src="{{asset('theme/images/shop/advertisement.jpg')}}" alt="" />
    </div>
</section>

<h1 align="center">Hi, <span style='color:green'>{{ucwords(Auth::user()->name)}}</span> </h1>

<div class="container">    
    <p class="panel-body" align="center">
        welcome to your profile</p>

    <table border="0" align="center">   
        <tr>
            <td>      <a href="{{url('/')}}/orders" class="btn btn-success">My Orders</a></td>
            <td>      <a href="" class="btn btn-success">My Address</a></td>
            <td>      <a href="" class="btn btn-success">Change Password</a></td>
        </tr>
    </table>
</div>
@endsection
