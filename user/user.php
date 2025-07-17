<?php if($_SESSION['login'] == 'oke') {?>
<form class="form-horizontal" role="form"  action="<?php echo $url_target;?>" method="POST">

  </div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		 <div class="col-sm-10">
		<input type="text" class="form-control"  placeholder="Username"  name="no_sep" value="<?php echo $username;?>" >		
	</div>
	</div>
		<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
		 <div class="col-sm-10">
		<input type="text" class="form-control"  placeholder="password" name="password" id="datepicker" value="<?php echo $password;?>" >	
	</div>	
	<button type="Submit" class="btn btn-success">LOGIN</button>

</form><?php }
?>