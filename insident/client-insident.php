<?php if($_SESSION['login'] == 'oke') {?>
<div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Insident Reporting</h4>
                                <p class="category">Laporkan Insiden Pada Form Berikut</p>
								<hr />								
                            </div>
                            <div class="content">


<form class="form-horizontal" role="form"  action="<?php echo $url_target;?>" method="POST" enctype="multipart/form-data">
  <div>
	
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama Unit</label>
		 <div class="col-sm-3">
		 <?php
			include "konfigurasi.php";
			$sql = mysqli_query('SELECT * FROM user WHERE level=3 ORDER BY unit ASC ');
		 ?>
		 <select class="form-control" name="unit" value="<?php echo $unit;?>">
			<option>Pilih Unit</option>
		 <?php
			if (mysqli_num_rows($sql) > 0){
				while ($row = mysqli_fetch_array($sql)){?>
				<option><?php echo $row['unit']; ?></option>
				<?php }
					}	
				?>
			
		</select>	
		<small id="emailHelp" class="form-text text-danger">&nbsp;<i>( * ) Wajib (pilih unit Sebagai Umum)</i> </small>
	</div>			
	</div>
	<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Status Laporan</label>
			  <div class="col-sm-3">
			  <select class="form-control" name="status" value="<?php echo $status;?>">
				  <option>Pilih Status</option>
				  <option value="Baru" >Baru</option>
				  <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
				  <option value="Selesai">Selesai</option>				
				  <option value="dibatalkan">Dibatalkan</option>				
				</select>
				<small id="emailHelp" class="form-text text-success">&nbsp;<i>Pilih Optional Jika tidak digunakan</i> </small>
			  </div>			  
			</div>
	<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">NO Rekam Medik</label>
			  <div class="col-sm-2">
				<input type="text" maxlength="8" class="form-control" placeholder="No. Rekam Medik" name="no_rm" value="<?php echo $no_rm;?>">
			  <small id="emailHelp" class="form-text text-muted">&nbsp;<i>Contoh : 12.13.23</i> <!--&nbsp;Beri Strip ( - ) Untuk Insiden KPC--></small>
			  <small id="emailHelp" class="form-text text-success">&nbsp;<i>Boleh dikosongkan</i> </small>
			  </div>
			</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama Pasien</label>
		 <div class="col-sm-4">
		<input type="text" class="form-control"  placeholder="Nama Pasien" name="nama_pasien"  value="<?php  echo $nama_pasien;?>" >	
		<small id="emailHelp" class="form-text text-success">&nbsp;<i>Boleh dikosongkan</i> </small>	
	</div>
		</div>	
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
			  <div class="col-sm-3">
			  <select class="form-control" name="jenkel" value="<?php echo $jenkel;?>">
				  <option >Pilih Jenis Kelamin</option>
				  <option value="3" >Optional</option>
				  <option value="1">Laki - Laki</option>
				  <option value="2">Perempuan</option>				
				</select>
				<small id="emailHelp" class="form-text text-success">&nbsp;<i>Pilih Optional Jika tidak digunakan</i> </small>
			  </div>			  
			</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Tanggal lahir Pasien</label>
		 <div class="col-sm-3">
		<input id="datepicker2" type="text" class="form-control"  placeholder="Tanggal Lahir Pasien" name="tgl_lahir"  value="<?php  echo $tgl_lahir;?>" >
	<small id="emailHelp" class="form-text text-success">&nbsp;<i>Boleh dikosongkan</i> </small>		
	</div>	
	</div>
	<hr />	
	<hr />	
	<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Masuk Pasien / Tanggal kejadian</label>
			  <div class="col-sm-3">
				<input id="datepicker" type="text" class="form-control" placeholder="Tanggal Masuk Pasien" name="tgl_masuk" value="<?php echo $tgl_masuk;?>">
				<small id="emailHelp" class="form-text text-danger">&nbsp;<i>( * ) Wajib</i> </small>
			  </div>
			   <script type="text/javascript">
				var foopicker = new FooPicker({
				  id: 'datepicker',
				  dateFormat: 'dd/MM/yyyy',
				  disable: ['29/07/2017', '30/07/2017', '31/07/2017', '01/08/2017']
				});
				var foopicker2 = new FooPicker({
				  id: 'datepicker2'
				});
			  </script>
			</div>
	
			<div class="form-group">
    <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
	<div class="col-sm-3">
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="image" onchange="PreviewImage();">
    <small id="fileHelp" class="form-text text-muted">Input File Gambar dengan Ext (*.jpg, *.jepg, *.PNG)</small>
  </div>
  </div>
  
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Diagnosa</label>
		 <div class="col-sm-10">
		<input type="text" class="form-control"  placeholder="Diagnosa" name="diagnosa" value="<?php  echo $diagnosa;?>" >	
		<small id="emailHelp" class="form-text text-success">&nbsp;<i>Boleh dikosongkan</i> </small>
	</div>
	</div>	
	
		<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Kronologis Insident</label>
			 <div class="col-sm-10">
			<textarea class="form-control input-sm"  placeholder="Organisasi Profesi" name="laporan" ><?php echo $laporan;?></textarea>		
			 <script>
					// Replace the <textarea id="editor1"> with a CKEditor
					// instance, using default configuration.
					CKEDITOR.replace( 'laporan', {
		filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl: '/ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	} );
				</script>
				<small id="emailHelp" class="form-text text-danger">&nbsp;<i>* Wajib</i> </small>
			</div>
		</div>
		<div class="form-group form-check-inline">
		<label class="col-sm-2 form-check-label">Jenis Insiden</label>
			<div class="col-sm-10">
				<?php $grading = array(1=>'KNC &nbsp;',
				2=>'KTD &nbsp;',
				3=>'KTC &nbsp;', 
				4=>'KPC &nbsp;',
				5=>'SENTINEL &nbsp;');
				foreach($grading as $value => $pilih)
				{
					$checked = ($value == $jenis) ? "checked" : "";
					echo "&nbsp;<input class='form-check-input' type='radio' name='jenis' value='$value' $checked> $pilih";
				}?>
<small id="emailHelp" class="form-text text-danger">&nbsp;<i>* Wajib</i> </small>	
	</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 radio-inline">Grading Risiko</label>
			<div class="col-sm-10">
				<?php $grading = array(1=>'<i class="fa fa-circle text-info"></i><span >BIRU</span><br>',
				2=>'<i class="fa fa-circle text-success"></i><span >HIJAU</span><br>',
				3=>'<i class="fa fa-circle text-warning"></i><span>KUNING</span><br>', 
				4=>'<i class="fa fa-circle text-danger"></i><span>MERAH</span><br>');
				foreach($grading as $value => $pilih)
				{
					$checked = ($value == $grad) ? "checked" : "";
					echo "&nbsp;<input type='radio' id='inlineRadio1' name='grad' value='$value' $checked> $pilih";
				}?>
				<small id="emailHelp" class="form-text text-danger">&nbsp;<i>( * ) Wajib</i> </small>
			</div>
		</div>
	
	<button type="Submit" class="btn btn-success" name="simpan">Laporkan</button>
</div>
</form>
			</div>
         </div>
       </div>
   </div>
<?php }?>
