@extends('admin.master')

@section('content')


  <section id="container" class="">
        @include('admin.sidebar')
        <section id="main-content">
            <section class="wrapper">

              <div class="content-box-large col-md-5">
                <h1>ALt images</h1>
                <?php $altImages = DB::table('alt_images')->where('proId', $proInfo[0]->id)->get();?>
@if(count($altImages)!=0)
                <table class="table table-striped">
                  <tr>
                    <td>index</td>
                    <td>Product id</td>
                    <td>alt image</td>
                    <td>status</td>
                  </tr>
                  @foreach($altImages as $img)
                  <tr>
                    <td>{{$img->id}}</td>
                    <td>{{$img->proId}}</td>
                  <td><img src="{{Config::get('app.url')}}/public/img/alt_images/{{$img->alt_img}}"
                    style="width:50px; height:50px"/></td>
                    <td>{{$img->status}}</td>
                  </tr>
                  @endforeach

                </table>
                @else
                <p class="alert alert-danger">this product have not any alt images</p>
                @endif
              </div>



                <div class="content-box-large col-md-7 pull-right">
                    <h1>Add Alt Images</h1>

                    {!! Form::open(['url' => 'admin/submitAlt',  'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <table class="table-borderless" style="height:200px">

                        <tr>
                            <td> Product Name:</td>
                            <td>    <input type="text" name="pro_name" class="form-control"
                              value="{{$proInfo[0]->pro_name}}">
                               <input type="hidden" name="pro_id" class="form-control"
                               value="{{$proInfo[0]->id}}"></td>
                        </tr>

                        <tr>
                            <td> Upload Image:</td>
                            <td>    <input type="file" name="image" class="form-control"
                              value="{{$proInfo[0]->pro_name}}"></td>

                            </tr>

                         <tr>
                             <td colspan="2">
                        <input type="submit" value="Submit" class="btn btn-success pull-right">
                             </td>
                         </tr>

                        {!! Form::close() !!}
                    </table>
                </div>

            </section>
      </section>
</section>

@endsection
