@extends('admin.master')

@section('content')


<div class="page-content">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10">

            <div class="row">

                <div class="content-box-large">
                    <h1>Edit Product</h1>

                    <?php $cats = DB::table('pro_cat')->get(); ?>

                    @foreach($Products as $product)       
                    <div class="panel-body">

                        {!! Form::open(['url' => 'admin/editProduct',  'method' => 'post']) !!}
                        <div class="col-md-8">
                            Category:  <select name="cat_id" class="form-control">
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}" <?php if ($product->cat_id == $cat->id) { ?> selected="selected"<?php } ?>>{{ucwords($cat->name)}}</option>
                                @endforeach
                            </select>

                            <br/>

                            <input type="hidden" name="id" class="form-control" value="{{$product->id}}">
                            Name:    <input type="text" name="pro_name" class="form-control" value="{{$product->pro_name}}">
                            <br/>
                            Price     <input type="text" name="pro_price" class="form-control" value="{{$product->pro_price}}">
                            <br/>

                            Code:    <input type="text" name="pro_code" class="form-control" value="{{$product->pro_code}}">
                            <br/>


                            Details:    <input type="text" name="pro_info" class="form-control" value="{{$product->pro_info}}">
                            <br/>
                            Spl  price     <input type="text" name="spl_price" class="form-control" value="{{$product->spl_price}}">
                            <br/>


                            <input type="submit" class="btn btn-success pull-right" value="Update product"/>


                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        {!! Form::close() !!}


                        <div class="col-md-4">
                            <img src="http://localhost/easyshop/upload/images/medium/<?php echo $product->pro_img; ?>" alt="" width="100px" height="100px"/>
                            <br>
                            <a href="{{url('/admin/EditImage')}}/{{$product->id}}">Change Image</a>
                        </div>
                    </div>

                    @endforeach
                </div>


            </div>
        </div>
    </div>
</div>

@endsection