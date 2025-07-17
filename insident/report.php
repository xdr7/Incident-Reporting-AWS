<?php if($_SESSION['level']== "1"){ ?>

<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Record Laporan Insident</h4>
                                <p class="category">Berikut data Laporan dari Seluruh unit</p>
                            </div>
                            <div class="content table-responsive table-full-width">
<table class="table table-hover table-striped small">
	<thead>
		<th><b>No</b></th>
		<th><b>NAMA PASIEN</b></th>
		<th><b>UNIT</b></th>
		<th><b>TANGGAL MASUK</b></th>
		<th><b>TANGGAL KEJADIAN</b></th>
		<th><b>TANGGAL MELAPORKAN</b></th>
		<th><b>Diagnosa</b></th>
		<th><b>Images</b></th>
		<th><b>Status</b></th>
		<th><b>Option</b></th>
	</thead>
<?php 
	while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($result,$i);
                        $data = mysqli_fetch_array($result);
						//Tanggal format indo
						$tanggal = date('Y-m-d', strtotime($data['tgl']));
						?>
	<tr>
		<td><?php echo ++$no_urut;?></td>
		<td><?php echo $data['nama_pasien'];?></td>
		<td><b><?php echo $data['unit'];?></b></td>
		<td><?php echo $data['tgl_masuk'];?></td>
		<td><?php echo $data['tgl_kejadian']; ?></td>
		<td><?php echo tanggal_indo($tanggal,true);?></td>
		<td><?php echo $data['diagnosa'];?></td>		
		<td><?php echo $data['image'];?></td>
		<td><?php if($data['status'] == "1")
					{echo"<button type='button' class='btn btn-success small'>BARU</button>";}
					elseif($data['status'] =="2"){
						echo("<button type='button' class='btn btn-warning'>LAPORAN DITERIMA</button>");
					}else if($data['status'] == "3"){
						echo("<button type='button' class='btn btn-primary'>SELESAI</button>");
					}elseif($data['status'] == "4"){
						echo("<button type='button' class='btn btn-danger'>DIBATALKAN</button>");
					}?>		
		</td>
		<td>
			<a href="?hal=insident&act=view&id_ins=<?php echo $data['id_ins']; ?>">
			<button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-link" data-original-title="view">	
				<i class="fa fa-external-link" aria-hidden="true"></i></button>
			</a>
						
			<a href="?hal=insident&act=edit_insident&id_ins=<?php echo $data['id_ins']; ?>">
			<button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-link" data-original-title="edit">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
			</a>
			
			<a href="?hal=insident&act=delete&id_ins=<?php echo $data['id_ins']; ?>" >
				<button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-link" data-original-title="Remove permanet">
					<i class="fa fa-minus-circle" aria-hidden="true"></button></i>
			</a>
					
			<a href="" data-toggle="modal" data-target=".bs-example-modal-sm">
				<button type="button" rel="tooltip" title="" class="btn btn-warning btn-simple btn-link" data-original-title="Remove">
					<i class="fa fa-times" aria-hidden="true"></i></button>
				</a>
			</td>
	</tr>
				 
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
			 		<div class="modal-content">
			 			<div class="modal-header">
			 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 				<h4 class="modal-title" id="myModalLabel">WARNING</h4>
			 			</div>
			 			<div class="modal-body">
			 					Anda Yakin Ingin Menghapus ?<br />
			 					DATA PASIEN : &nbsp;<?php echo $row['nama'];?> 
			 			</div>
			 			<div class="modal-footer">
			 				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			 				<a href="?hal=insident&act=delete&id_ins=<?php echo $row['id_ins']; ?>"><button type="button" class="btn btn-primary" >Delete</button></a>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		

<?php 
	$i++; 
    $count++;
	}?>
</table>
	<div class="col-md-8">
		<?php echo paginate_one($reload, $page, $tpages); ?>
	</div>
</div>
</div>
</div>
</div>

<?php }?> 

<!-- ====================================================================================================================== -->
<!-- ==============================================SECOND CHANGE=========================================================== -->
<!-- ====================================================================================================================== -->

<?php if($_SESSION['level']== "2"){ ?>
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Record Laporan Insident</h4>
                                <p class="category">Berikut data Laporan dari Seluruh unit</p>
								<hr />
								<nav class="nav"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										  <a class="nav-link active" href="#">Home /</a>
										  <a class="nav-link" href="index.php?hal=insident&act=add_insident">Add Report /</a>	
											<hr />	
										</nav>		
                            </div>
                            <div class="content table-responsive table-full-width">
<table class="table table-hover table-striped small">
	<thead>
		<th>NO</th>		
		<th>UNIT</th>
		<th>KEJADIAN</th>
		<th>TANGGAL MELAPORKAN</th>
		<th>DIAGNOSA</th>
		<th>STATUS</th>
		<th>JENIS INSIDEN</th>		
		<th>GRADING</th>
		<th>OPTION</th>
	</thead>
<?php 	
	while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($result,$i);
                        $data = mysqli_fetch_array($result);
						//Tanggal format indo
						$tanggal = date('Y-m-d', strtotime($data['tgl']));
						$grad = $data['grad'];
						$jenis = $data['jenis'];
						?>
	<tr>
		<td><?php echo ++$no_urut;?></td>		
		<td><b><?php echo $data['unit'];?></b></td>
		<td><?php echo $data['tgl_kejadian'];?></td>
		<td><?php echo tanggal_indo($tanggal,true);;?></td>
		<td><?php echo $data['diagnosa'];?></td>
		<td><?php if($data['status'] == "1")
					{echo"<button type='button' class='btn btn-success small'>BARU</button>";}
					elseif($data['status'] =="2"){
						echo("<button type='button' class='btn btn-warning'>LAPORAN DITERIMA</button>");
					}else if($data['status'] == "3"){
						echo("<button type='button' class='btn btn-primary'>SELESAI</button>");
					}elseif($data['status'] == "4"){
						echo("<button type='button' class='btn btn-danger'>DIBATALKAN</button>");
					}?>		
		</td>
		<td><?php if($jenis == "1")
						{
							echo "KNC";
						}elseif($jenis == "2")
							{
								echo "KTD";
							}elseif($jenis == "3")
								{
									echo "KTC";
								}elseif($jenis == "4")
									{
										echo "KPC";
									}elseif($jenis == "5")
										{
											echo "SENTINEL";
										}?></td>
		<td><?php if($grad == "1")
				{
					echo "<i class='fa fa-circle text-info'></i><span >BIRU</span>";
				}elseif($grad == "2")
					{
						echo "<i class='fa fa-circle text-success'></i><span >HIJAU</span>";
					}elseif($grad == "3")
						{
							echo "<i class='fa fa-circle text-warning'></i><span>KUNING</span>";
						}elseif($grad == "4")
							{
								echo "<i class='fa fa-circle text-danger'></i><span>MERAH</span>";
							}?></td>
		<td>
			<a href="?hal=insident&act=view&id_ins=<?php echo $data['id_ins']; ?>"><i class="fa fa-external-link" aria-hidden="true"></i> &nbsp; View</a> |
			<a href="?hal=insident&act=edit_insident&id_ins=<?php echo $data['id_ins']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; <!--Edit--></a> |
			
			</td>
	</tr>

<?php 
	$i++; 
    $count++;
	}?>
	
</table>
	<div class="col-md-8">
		<?php echo paginate_one($reload, $page, $tpages); ?>
	</div>
</div>
</div>
</div>
</div>

<?php }?> 
