@extends('admin.master')

@section('content')
<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
$(document).ready(function(){
<?php for($i=1;$i<60;$i++){?>
  // start loop
      $('#amountDiv<?php echo $i;?>').hide();
      $('#checkSale<?php echo $i;?>').show();
        $('#onSale<?php echo $i;?>').click(function(){  // run when admin need to add amount for sale
          $('#amountDiv<?php echo $i;?>').show();
          $('#checkSale<?php echo $i;?>').hide();
            $('#saveAmount<?php echo $i;?>').click(function(){
              var salePrice<?php echo $i;?> = $('#spl_price<?php echo $i;?>').val();
              var pro_id<?php echo $i;?> = $('#pro_id<?php echo $i;?>').val();
                $.ajax({
                  type: 'get',
                  dataType: 'html',
                  url: '<?php echo url('/admin/addSale');?>',
                  data: "salePrice=" + salePrice<?php echo $i;?> + "& pro_id=" + pro_id<?php echo $i;?>,
                  success: function (response) {
                      console.log(response);
                  }
              });
            });
        });
        $('#noSale<?php echo $i;?>').click(function(){ // this when admin dnt need sale
          $('#amountDiv<?php echo $i;?>').hide();
          $('#checkSale<?php echo $i;?>').show();

        });
        //end loop
        <?php }?>
        $('#import_products').hide();
        $('#open_importDiv').click(function(){
          $('#import_products').fadeIn();
          $('#open_importDiv').hide();
        });
});

</script>
  <section id="container" class="">
        @include('admin.sidebar')
        <section id="main-content">
            <section class="wrapper">
          <!-- import div here-->
        <div style="padding:10px;" class="col-md-12">
          <form action="{{url('/admin/import_products')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="file">
            <p style="color:red">{{$errors->first('file')}}</p>
            <input type="submit" value="import" class="btn btn-success"/>
          </form>
        </div>
                <div class="content-box-large">
                    <h1>Products</h1>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                                <th>Image</th>
                                <th>Catgeory</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Product Price</th>
                                <th>Alt Images</th>
                                <th>On Sale</th>
                                <th>update</th>
                            </tr>
                        </thead>
                        <?php $count =1;?>
                        @foreach($Products as $product)

                        <tbody>
                            <tr>
                                <td> <img src="<?php echo $product->pro_img; ?>" alt=""
                                   width="50px" height="50px"/></td>
                                <td>{{ucwords($product->name)}}</td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->pro_name}}</td>
                                <td>{{$product->pro_code}}</td>
                                <td>{{$product->pro_price}}</td>
                                <td>
                                  <?php
                                  $Aimgs = DB::table('alt_images')->where('proId', $product->id)
                                  ->get();

                                   ?>
                                  <p> {{count($Aimgs)}} images found</p>
                                  <a href="{{url('/')}}/admin/addAlt/{{$product->id}}"
                                   class="btn btn-info" style="border-radius:20px;">
                                   <i class="fa fa-plus"></i> Add</a></td>

                                  <td>
                                    <div id="checkSale<?php echo $count;?>">
                                    <input type="checkbox" id="onSale<?php echo $count;?>"> Yes
                                  </div>

                                  <div id="amountDiv<?php echo $count;?>">
                                    <input type="hidden" id="pro_id<?php echo $count;?>"
                                     value="{{$product->id}}"/>
                                    <input type="checkbox" id="noSale<?php echo $count;?>"> No<br>
                                    <input type="text" id="spl_price<?php echo $count;?>"
                                    placeholder="Sale Price" size="12" value="{{$product->spl_price}}"><br>
                                    <button id="saveAmount<?php echo $count;?>" class="btn btn-success">
                                    Save Amount</button>
                                  </div>
                                  </td>

                                <td><a href="{{url('/')}}/admin/ProductEditForm/{{$product->id}}"
                                   class="btn btn-success btn-small">Edit</a></td>
                            </tr>
                        </tbody>
                        <?php $count++;?>
                        @endforeach
                    </table>
                </div>
</section>
</section>
</section>

@endsection
