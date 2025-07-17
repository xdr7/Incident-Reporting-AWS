<?php if($_SESSION['level']== "1"){
	?>
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Record Laporan Insident</h4>
                                <p class="category">Berikut data Laporan dari Seluruh unit</p>
                            </div>
                            <div class="content table-responsive table-full-width">
<table class="table">
	<thead>
		<th>No</th>
		<th>Title</th>
		<th>Category</th>
		<th>Option</th>
	</thead>
<?php 	
	$i=1;
	while($row = mysqli_fetch_array($result)) {?>
	<tr>
		<td><?php echo $i?></td>
		<td><?php echo $row['title'];?></td>
		<td><?php echo $row['category'];?></td>
		<td align='center'>
			<a href="?hal=content&act=view&id_content=<?php echo $row['id_content']; ?>"><i class="fa fa-external-link" aria-hidden="true"></i> &nbsp; View</a> 
			<a href="?hal=content&act=edit&id_content=<?php echo $row['id_content']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</a> 
			<a href="?hal=content&act=delete&id_content=<?php echo $row['id_content']; ?>" ><i class="fa fa-minus-circle" aria-hidden="true"></i>&nbsp; Delete</a>
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
			 					Are You Sure Boy,,, ?<br />
			 					DATA SAUDARA : &nbsp;<?php echo $row['nama'];?> 
			 			</div>
			 			<div class="modal-footer">
			 				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			 				<a href="?hal=dokter&act=delete&id_dokter=<?php echo $row['id_content']; ?>"><button type="button" class="btn btn-primary" >Delete</button></a>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		
</div>
<?php 
	$i++;
	}?>
</table>
</div>
</div>
</div>
</div>
<?php }?> 