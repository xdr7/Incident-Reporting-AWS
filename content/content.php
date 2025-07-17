<?php if($_SESSION['level'] == '1') {?>
<div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Insident Reporting</h4>
                                <p class="category">Form Content</p>
								<hr />
									<p><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
									<i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
									&nbsp;<a href="?hal=user&act=edit&id_content=<?php echo $r['id_content']; ?>">Edit</a></p>	
								<hr />				
                            </div>
                            <div class="content">


<form class="form-horizontal" role="form"  action="<?php echo $url_target;?>" method="POST" enctype="multipart/form-data">
  <div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		 <div class="col-sm-5">
		<input type="text" class="form-control docs-date"  placeholder="Title" name="title"  value="<?php  echo $title; ?>" >	
	</div>
	</div>	

	</div>	
	
		<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Pesan</label>
			 <div class="col-sm-10">
			<textarea class="form-control input-sm"  placeholder="Body Content" name="body" ><?php echo $body; ?></textarea>		
			 <script>
					// Replace the <textarea id="editor1"> with a CKEditor
					// instance, using default configuration.
					CKEDITOR.replace( 'body', {
		filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	} );
				</script>
			</div>
		</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Category</label>
		 <div class="col-sm-10">
		<input type="text" class="form-control docs-date"  placeholder="Category" name="category" value="<?php  echo $category; ?>" >	
	</div>
	
	<button type="Submit" class="btn btn-success" name="simpan">Simpan</button>
</div>
</form>
			</div>
         </div>
       </div>
   </div>
<?php }?>
