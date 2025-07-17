<?php if($_SESSION['level']== "1"){
	?>
<div class="card ">
                            <div class="header">
                                <h4 class="title">User Permission</h4>
                                <p class="category">Backend development</p>
								<hr />
								<p><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
								<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
								&nbsp;<a href="index.php?hal=user&act=add">Add</a></p>
								<hr />
                            </div>	
	
<div class="content">	
<div class="table-full-width">	
<table class="table">
	<thead>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level User</th>
		<th>Option</th>
		
	</thead>
<?php 	
	while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($result,$i);
                        $data = mysqli_fetch_array($result);?>
	<tr>
		<td><?php echo ++$no_urut;?> </td>
		<td><?php echo $data['username'];?></td>    
		<td><?php echo $data['password'];?><i class="fa fa-eye" aria-hidden="true"></i></td>
		<td><?php echo $data['level'];?></td>
		<td>
			<a href="?hal=user&act=tampil&id_user=<?php echo $data['id_user']; ?>">
			<button type="button" rel="tooltip" title="View Task" class="btn btn-info btn-simple btn-xs">
					<i class="fa fa-eye" aria-hidden="true"></i>
              </button>
			</a> 
			<a href="?hal=user&act=update&id_user=<?php echo $data['id_user']; ?>">
			  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
					<i class="fa fa-edit"></i>
              </button></a>
			  <a href="?hal=user&act=delete&id_user=<?php echo $data['id_user']; ?>">
              <button type="button" rel="tooltip" target="myModal" title="Remove" class="btn btn-danger btn-simple btn-xs">
					<i class="fa fa-times"></i>
              </button>
			  </a>
			</td>
	</tr>
	<div>
			 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModallabel" aria-hidden="true">
			 	<div class="modal-dialog">
			 		<div class="modal-content">
			 			<div class="modal-header">
			 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 				<h4 class="modal-title" id="myModalLabel">WARNING</h4>
			 			</div>
			 			<div class="modal-body">
			 					Are You Sure Boy,,, ?
			 			</div>
			 			<div class="modal-footer">
			 				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			 				<a href="?hal=user&act=delete&id_user=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-primary" >Delete</button></a>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		
</div>
<?php 
	$i++; 
    $count++;
	}?>
</table>
	<div>
		<?php echo paginate_one($reload, $page, $tpages); ?>
	</div>
</div>
</div>
</div>
<?php }?> 