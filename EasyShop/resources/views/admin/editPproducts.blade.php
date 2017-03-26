@extends('admin.master')

@section('content')

  <section id="container" class="">
        @include('admin.sidebar')
        <section id="main-content">
            <section class="wrapper">

             <div class="col-md-9">
                <div class="content-box-large ">
                     <div class="panel-heading col-md-8">
                      <div class="panel-title">Edit Product
                        <input type="submit" class="btn btn-success pull-right" value="Update product" style="margin:-4px"/>
                      </div>
                      </div>

                    <?php $cats = DB::table('pro_cat')->get(); ?>

                    @foreach($Products as $product)
                    <div class="panel-body">

                        {!! Form::open(['url' => 'admin/editProduct',  'method' => 'post']) !!}
                        <div class="col-md-8">
                          <br>  Category:  <select name="cat_id" class="form-control">
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


                            Details:    <textarea name="pro_info" class="form-control" rows="5">{{$product->pro_info}}</textarea>
                            <br/>
                            Spl  price     <input type="text" name="spl_price" class="form-control" value="{{$product->spl_price}}">
                            <br/>




                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        {!! Form::close() !!}

                        <div align="center">
                              <a href="{{url('admin/addProperty')}}/{{$product->id}}" class="btn btn-sm btn-default" style="margin:5px">Add Property</a>

                        </div>

                    </div>

                    @endforeach
                </div>
              </div>

                <div class="col-md-3">




                  <div class="panel-heading">
                      <div class="panel-title">Change Product Image
                        </div>
                      </div>

                    <img src="<?php echo $product->pro_img; ?>" alt="" class="img-responsive"/>
                    <br>
                  <div align="center">
                      <a href="{{url('/admin/EditImage')}}/{{$product->id}}" class="btn btn-info">Change Image</a>
                  </div>
                </div>


          </section>
        </section>
</section>

@endsection
