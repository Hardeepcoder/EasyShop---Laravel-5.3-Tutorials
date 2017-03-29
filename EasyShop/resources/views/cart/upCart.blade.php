<script>
$(document).ready(function(){
<?php for($i=1;$i<20;$i++){?>
  $('#upCart<?php echo $i;?>').on('change keyup', function(){

  var newqty = $('#upCart<?php echo $i;?>').val();
  var rowId = $('#rowId<?php echo $i;?>').val();
  var proId = $('#proId<?php echo $i;?>').val();

   if(newqty <=0){ alert('enter only valid qty') }
  else {

    $.ajax({
        type: 'get',
        dataType: 'html',
        url: '<?php echo url('/cart/update');?>/'+proId,
        data: "qty=" + newqty + "& rowId=" + rowId + "& proId=" + proId,
        success: function (response) {
            console.log(response);
            $('#updateDiv').html(response);
        }
    });
  }

  });
  <?php } ?>
});



</script>

@if(session('status'))
        <div class="alert alert-success">

            {{session('status')}}
        </div>
        @endif

          @if(session('error'))
        <div class="alert alert-danger">

            {{session('error')}}
        </div>
        @endif


<div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu">
<td class="image">Item</td>
<td class="description"></td>
<td class="price">Price</td>
<td class="quantity">Quantity</td>
<td class="total">Total</td>
<td></td>
</tr>
</thead>
<?php $count =1;?>
@foreach($cartItems as $cartItem)


<tbody>

<tr>
<td class="cart_product">
    <a href="{{url('/product_details')}}/{{$cartItem->id}}"><img src="{{$cartItem->options->img}}" alt="" width="200px"></a>
</td>
<td class="cart_description">
    <h4><a href="{{url('/product_details')}}/{{$cartItem->id}}" style="color:blue">{{$cartItem->name}}</a></h4>
    <p>Product ID: {{$cartItem->id}}</p>
     <p>Only {{$cartItem->options->stock}} left</p>
</td>
<td class="cart_price">
    <p>${{$cartItem->price}}</p>
</td>
<td class="cart_quantity">
    <div class="cart_quantity_button">

      <input type="hidden" id="rowId<?php echo $count;?>" value="{{$cartItem->rowId}}"/>
        <input type="hidden" id="proId<?php echo $count;?>" value="{{$cartItem->id}}"/>

        <input type="number" size="2" value="{{$cartItem->qty}}" name="qty" id="upCart<?php echo $count;?>"
               autocomplete="off" style="text-align:center; max-width:50px; "  MIN="1" MAX="30">


    </div>
</td>
<td class="cart_total">
    <p class="cart_total_price">${{$cartItem->subtotal}}</p>
</td>
<td class="cart_delete">
    <a class="cart_quantity_delete" style="background-color:red"
       href="{{url('/cart/remove')}}/{{$cartItem->rowId}}"><i class="fa fa-times"></i></a>
</td>
</tr>

<?php $count++;?>
</tbody>  @endforeach
</table>
</div>
