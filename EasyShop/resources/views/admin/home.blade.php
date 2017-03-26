@extends('admin.master')

@section('content')


  <section id="container" class="">
       @include('admin.sidebar')
       <section id="main-content">
           <section class="wrapper">

            <div class="row">
                <div class="col-md-6">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Add New Product
                                <input type="submit" value="Submit" class="btn btn-primary pull-right" style="margin:-5px">
                            </div>
                              {!! Form::open(['url' => 'admin/add_product',  'method' => 'post', 'enctype' => 'multipart/form-data']) !!}




                        </div>
                        <div class="panel-body">
                            <Select class="form-control" name="cat_id">
                            @foreach($cat_data as $cat)
                            Category:  <option value="{{ $cat->id }}">{{ ucwords($cat->name) }}</option>
                            @endforeach
                            </select>
                            <br>

                            Name:    <input type="text" name="pro_name" class="form-control">
                            <br/>
                            Price     <input type="text" name="pro_price" class="form-control">
                            <br/>

                            Code:    <input type="text" name="pro_code" class="form-control">
                            <br/>
                            Imgage     <input type="file" name="pro_img" class="form-control">
                            <br/>


                            Details:    <textarea name="pro_info" class="form-control" rows="5"></textarea>
                            <br/>
                            Spl  price     <input type="text" name="spl_price" class="form-control">
                            <br/>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            {!! Form::close() !!}
                        </div>



                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">Add Properties<div>

                                <div align="center">
                                      <a href="{{url('admin/addPropertyAll')}}" class="btn btn-sm btn-info">Add Property</a>
                                </div>


                            </div>
                            <div class="content-box-large box-with-header">

                                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">New vs Returning Visitors</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">

                                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>



      <section>
</section>

@endsection
