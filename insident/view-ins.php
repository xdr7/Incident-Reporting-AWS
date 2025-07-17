<?php if($_SESSION['login']== "oke"){ ?>
<div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
								<div class="row">
								  <div class="col-xs-2"><img class="media-object"src="images/logo.png" height="86" width="150">									
								  </div>
								  <div class="col-xs-6">
									<h4 class="title">RSUD Abdoel Wahab Sjahranie Samarinda</h4>
									<p class="category">Pemerintah Provinsi Kalimantan Timur</p>
									<p class="category">KOMITE PMKP</p>
									<!--
									<p class="category">UNIT&nbsp;<?php //echo $unit;?></p>-->
								  </div>
								  <div class="col-xs-4">
									<p>
										<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
										<i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
										&nbsp;<a href="index.php?hal=insident&act=report">Back To Report</a>
									</p>
								  </div>
								</div>
                                
								<hr />
                            </div>
							
		<div class="media">
			  <div class="media-right media-middle">
				<a href="#">
				
				</a>
			  </div>
			  <div class="col-md-6">
				<h4 class="media-heading"><h5>Unit Pelapor &nbsp; :&nbsp;<b><?php echo $unit ?></b></h5></h4>
				<label>No RM</label> : <?php echo $no_rm;?> <br />
						<label>Tanggal Lapor</label> : <?php echo $tgl;?> <br />
						<label>Tanggal Masuk Pasien</label> : <?php echo $tgl_masuk;?>
			  </div>
			  
		</div>	<hr>					
    <div class="content">

<div class="container form-horizontal small">
<div class="row">	
<div class="col-12 col-md-6">
<?php
// Tanggal Lahir
	$birthday = $tgl_lahir;
	
	// Convert Ke Date Time
	$biday = new DateTime($birthday);
	$today = new DateTime();
	
	$diff = $today->diff($biday);
?>
<dl class="dl-horizontal">
  <dt>Tanggal Lahir</dt>
  <dd><?php echo " ". date('d/m/Y', strtotime($birthday)) .'<br />';?> </dd>
  <dd><?php echo "Umur: ". $diff->y ." Tahun";?></dd>
</dl>
<dl class="dl-horizontal">
  <dt>Tanggal Kejadian</dt>
  <dd><?php echo $tgl_kejadian;?> </dd>

</dl>
<dl class="dl-horizontal">
  <dt>Nama Pasien</dt>
  <dd><?php echo $nama_pasien;?></dd>
</dl>
<dl class="dl-horizontal">
  <dt>Diagnosa</dt>
  <dd><?php echo $diagnosa;?></dd>
</dl>
<dl class="dl-horizontal">
  <dt>Jenis Kelamin</dt>
  <dd><?php if($jenkel == "1") {echo "Laki - Laki";}elseif ($jenkel == "2") { echo "Perempuan";}?></dd>
</dl>
<dl class="dl-horizontal">
  <dt>Kronologi</dt>
  <dd><?php echo $laporan; ?></dd>
</dl>
<dl class="dl-horizontal">
  <dt>Jenis</dt>
  <dd><?php if($jenis == "1")
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
										}?></dd>
</dl>
<dl class="dl-horizontal">
  <dt>Grading</dt>
  <dd><?php if($grad == "1")
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
							}?></dd>
</dl>
</div>

<div class="col-3 col-md-3">

<figure class="figure">
<span class="border border-primary">
  <a href="http://192.168.35.50:7777/insreport/insident/image/<?php echo $image;?>">
	<img src="http://192.168.35.50:7777/insreport/insident/image/<?php echo $image;?>" class="figure-img img-thumbnail" alt="Info Images">
	</a>
  </span><p class="font-italic"><figcaption class="figure-caption">Info Images</figcaption></p>
</figure>

</div>
</div>
</div>
<hr>

<blockquote class="blockquote-reverse">
 RSUD Abdoel Wahab Sjahranie Samarinda
</blockquote>
	</div>
	</div>
	</div>
	</div>
<?php }?> 
