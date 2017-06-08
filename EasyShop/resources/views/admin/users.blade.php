@extends('admin.master')

@section('content')
<style>
<?php for($i=1;$i<15;$i++){?>
#banUser<?php echo $i ;?>{ display:none}
.banUserDiv<?php echo $i ;?> {
	width: 120px; 	height: 40px;	background: #333;	border-radius: 50px;	position: relative;
}
.banUserDiv<?php echo $i ;?>:before {
	content: 'Yes';	position: absolute;	top: 12px;	left: 13px;	height: 2px;	color: #26ca28;	font-size: 16px;
}
.banUserDiv<?php echo $i ;?>:after {
	content: 'No';	position: absolute;	top: 12px; left: 84px;	height: 2px;	color: #fff;	font-size: 16px;
}

.banUserDiv<?php echo $i ;?> label {
	display: block;	width: 52px;	height: 22px;	border-radius: 50px;	transition: all .5s ease;
	cursor: pointer;	position: absolute;	top: 9px;	z-index: 1;	left: 12px;	background: #ddd;
}
.banUserDiv<?php echo $i ;?> input[type=checkbox]:checked + label {
	left: 60px;	background: #26ca28;
}
<?php }?>
</style>

<script>
$(document).ready(function(){
  <?php for($i=1;$i<15;$i++){?>
      $('#successMsg<?php echo $i;?>').hide();
  $('#role<?php echo $i;?>').change(function(){
    var role_val<?php echo $i;?> = $('#role<?php echo $i;?>').val();
      var userId<?php echo $i;?> = $('#userId<?php echo $i;?>').val();
    $.ajax({
      type: 'get',
      data: 'userID='+userId<?php echo $i;?> + '&role_val=' + role_val<?php echo $i;?>,
      url: '<?php echo url('/admin/updateRole');?>',
      success: function(response){
        console.log(response);
        $('#successMsg<?php echo $i;?>').show();
        $('#successMsg<?php echo $i;?>').html(response);
      }
    });
  });
	$('#banUser<?php echo $i;?>').click(function(){
		//alert('yes');
		if(document.getElementById('banUser<?php echo $i;?>').checked){
			alert('checked');
		}else{
			alert('uncheck');
		}
	});
<?php }?>
});
</script>
<section id="container" class="">
      @include('admin.sidebar')
      <section id="main-content">
          <section class="wrapper">
              <div class="content-box-large">
                  <h1>Users</h1>
                  <table class="table table-striped table-advance table-hover">
                      <thead>
                        <tr>
                              <th><i class="icon_profile"></i> Name</th>
                              <th><i class="icon_mail_alt"></i> Email</th>
                              <th><i class="icon_calendar"></i> Role</th>
                            	<th><i class="icon_mobile"></i> Ban</th>
															<th><i class="icon_cogs"></i> Actions</th>
                          </tr>
                      </thead>


                      <tbody>
                          <?php $countRole =1;?>
                        @foreach($usersData as $userData)
                        <input type="hidden" value="{{$userData->id}}" id="userId<?php echo $countRole;?>">

                        <tr>
                          <td>{{$userData->name}}</td>
                         <td>{{$userData->email}}</td>
                         <td><select name="role" class="form-control" id="role<?php echo $countRole;?>">
                           <option value="1" @if($userData->admin=='1')
                             selected="selected" @endif>admin</option>
                           <option value="0"  @if($userData->admin=='' || $userData->admin=='0')
                             selected="selected" @endif>user</<option>
                           </select>
                           <p id="successMsg<?php echo $countRole;?>"
														  class="alert alert-success"></p>
                          </td>
                          <td>
                            <div class="banUserDiv<?php echo $countRole;?>">
                            	<input type="checkbox" id="banUser<?php echo $countRole;?>"/>
                            	<label for="banUser<?php echo $countRole;?>"></label>
                            </div>
                          </td>
													<td>
														<div class="btn-group">
                                    <a class="btn btn-info popovers" data-trigger="hover"
																		 data-content="Edit user" data-placement="top" href="#">
																				<i class="icon_minus_alt2"></i>
																		</a>
																	 <a class="btn btn-danger popovers" data-trigger="hover"
																		 data-content="Remove" data-placement="top" href="#">
																				<i class="icon_close_alt2"></i>
																		</a>
                                  </div>
													</td>
                        </tr>
                          <?php $countRole++;?>
                        @endforeach

                      </tbody>
                    </table>

                  </div>
                </section>
              </section>


@endsection
