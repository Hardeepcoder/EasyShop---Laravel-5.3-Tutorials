@extends('admin.master')

@section('content')

<div class="page-content">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10">

            <div class="row">



                <div class="content-box-large">
                    <h1>Products</h1>
                    <table class="table table-striped">
                        <thead>  <tr>
                                <th>Img</th>
                                <th>Catgeory</th>
                                
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Product Price</th>
                                
                                
                                <th>update</th>
                            </tr>
                        </thead>
                        @foreach($Products as $product)
                        <tbody>
                            <tr>
                                <td> <img src="http://localhost/easyshop/upload/images/<?php echo $product->pro_img; ?>" alt="" width="50px" height="50px"/></td>
                                <td>{{ucwords($product->name)}}</td>
                               
                                 <td>{{$product->id}}</td>
                                <td>{{$product->pro_name}}</td>
                                <td>{{$product->pro_code}}</td>
                                <td>{{$product->pro_price}}</td>
                               
                                
                                <td><a href="{{url('/')}}/admin/ProductEditForm/{{$product->id}}" class="btn btn-info btn-small">Edit</a></td>
                            </tr>
                        </tbody> 
                        @endforeach
                    </table>





                </div>



            </div>


        </div>
    </div>
</div>

@endsection