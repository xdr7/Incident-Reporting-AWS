<?php if($_SESSION['level']== "2"){?>
<div class="content">
<div class="card">
                            <div class="header">
                                <h4 class="title">User Permission</h4>
                                <p class="category">Report Unit Insident Report</p>
								<hr />
								<nav class="nav"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										  <a class="nav-link active" href="#">Home /</a>
										  <a class="nav-link" href="index.php?hal=user&act=add-unit">Add Unit /</a>										 
										</nav>				
								<hr />
                            </div>	
	
	<div class=""content table-responsive table-full-width">	
		
		<table class="table table-hover table-striped small">
			<thead>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				
			</thead>
		<?php 	
			while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($result,$i);
								$data = mysqli_fetch_array($result);?>
			<tr>
				<td><?php echo ++$no_urut;?> </td>
				<td><?php echo $data['username'];?></td>
				<td><?php echo $data['password'];?></td>				
			</tr>
			
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