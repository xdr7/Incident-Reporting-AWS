<table class="table table-bordered">
	<tr>
		<td>
			<img src="images/logo.png" height="80" width="75">
		</td>
		<td>
			<h3>RSUD A. WAHAB SYAHRANIE - SAMARINDA</h3><br />
			<h5>BIDANG PENGEMBANGAN, INF, DAN TEKNOLOGI</h5>
		</td>
		<td>
			<label>Tanggal</label> : <?php echo $tgl_mulai;?> <br />
			<label>Tanggal Selesai</label> : <?php echo $tgl_selesai;?>
		</td>
	</tr>
</table>

<div class="form-horizontal">		
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Dasar Pekerjaan</label>
		 <div class="col-sm-3">
		<textarea class="form-control input-sm"><?php echo $d_pekerjaan;?></textarea>	
	</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Unit / Instalasi Pemohon</label>
		 <div class="col-sm-3">
		<input type="text" class="form-control input-sm"  value="<?php echo $unit;?>" >	
	</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nilai</label>
		 <div class="col-sm-1">
		<input type="text" class="form-control input-sm"  value="<?php echo $nilai;?>" >	
	</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Kendala</label>
		 <div class="col-sm-3">
		<textarea class="form-control input-sm"><?php echo $kendala;?></textarea>	
	</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Penyelesaian</label>
		 <div class="col-sm-3">
		<textarea class="form-control input-sm"><?php echo $penyelesaian;?></textarea>	
	</div>
	</div>
</div>
<table class="table">
	<tr>
		<td>Yang Mengerjakan&nbsp;:<br /><br /><br /><br /><br />			
			(&nbsp;<?php echo $nama;?>&nbsp;) <br />
			NIP&nbsp;: &nbsp; <?php echo $nip;?>
		</td>
		<td>Mengetahui&nbsp;:<br /><br /><br /><br /><br />
			(--------------------------) <br />
			NIP&nbsp;:
		</td>
		<td>Unit / Instalasi Penerima&nbsp;:<br /><br /><br /><br /><br />
			(--------------------------------) <br />
			NIP&nbsp; :
		</td>
	</tr>	
</table>