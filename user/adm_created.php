<?php if($_SESSION['level'] == '2') {?>
<div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add User</h4>
                                <p class="category">Input data User</p>
								<hr />
									<p><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
									<i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
									&nbsp;<a href="index.php?hal=user&act=report"> Back to Report</a></p>	
								<hr />								
                            </div>
                            <div class="content">
<form class="form-horizontal" role="form" action="<?php echo $url_target;?>" method="POST">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Unit</label>
    <div class="col-sm-4">
      <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Nama Unit" name="unit" value="<?php echo $unit;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="username" name="username" value="<?php echo $username;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control input-sm" id="inputPassword3" placeholder="Password" name="password" value="<?php echo $password;?>" >
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-2">
      <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Level" name="level" value="<?php echo $level;?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
</div>
			</div>
         </div>
       </div>
<?php }?>	   