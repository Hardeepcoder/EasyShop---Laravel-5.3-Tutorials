@extends('front.master')

@section('content')
<style>
    table td { padding:10px
    }</style>




<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">My Profile</li>
            </ol>
        </div><!--/breadcrums-->

        <div class="row">
            @include('profile.menu')
            <div class="col-md-8">

                <?php /*   <table border="0" align="center">   
                  <tr>
                  <td>      <a href="{{url('/')}}/orders" class="btn btn-success">My Orders</a></td>
                  <td>      <a href="" class="btn btn-success">My Address</a></td>
                  <td>      <a href="" class="btn btn-success">Change Password</a></td>
                  </tr>
                  </table>
                 * 
                 */ ?>
                <h3><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, Welcome</h3>
              
            </div>
        </div>



    </div>
</section>
@endsection
