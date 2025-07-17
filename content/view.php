<?php if($_SESSION['login']== "oke"){
	?>
<div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title;?></h4>
                                <p class="category">date & time&nbsp;&nbsp;<?php echo $date;?></p>
								<hr />	
								<?php if($_SESSION['level']== "1"){?>
									<p><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
									<i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
							&nbsp;
							
	
							<a href="?hal=content&act=edit&id_content=<?php echo $r['id_content']; ?>">Edit</a>
							</p><?php } ?>	
								<hr />									
                            </div>
                            <div class="content">
								<?php echo $body;?>
							</div>
						</div>
					</div>
</div>
<?php }?>