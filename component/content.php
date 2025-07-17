 <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Info Grading</h4>
                                <p class="category">All Report including</p>
                            </div>
                            <div class="content"> 
							<div class="progress">
							<?php 
								include "konfigurasi.php";?>
<?php
								$sql = "SELECT COUNT(*) AS grad FROM reporting WHERE grad = 1 GROUP BY grad";
								$query = mysqli_query($con,$sql);
								$hasil1 = mysqli_fetch_array($query);
							
							?>
							  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil1['grad']}";?>%">
								<span class="sr-only"></span><?php echo "{$hasil1['grad']}";?>
							  </div>
							</div>
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS grad FROM reporting WHERE grad = 2 ";
								$query = mysqli_query($con,$sql);
								$hasil2 = mysqli_fetch_array($query);
							
							?>
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo "{$hasil2['grad']}";?>%">
									<span class="sr-only"></span><?php echo "{$hasil2['grad']}";?>
								</div> 
							</div>
							
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS grad FROM reporting WHERE grad = 3 GROUP BY grad";
								$query = mysqli_query($con,$sql);
								$hasil3 = mysqli_fetch_array($query);

							?>
							  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil3['grad']}";?>%">
								<span class="sr-only"></span><?php echo "{$hasil3['grad']}";?>
							  </div>
							</div>
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS grad FROM reporting WHERE grad = 4 GROUP BY grad";
								$query = mysqli_query($con,$sql);
								$hasil4 = mysqli_fetch_array($query);
					
							?>
							
							  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil4['grad']}";?>%">
								<span class="sr-only"></span><?php echo "{$hasil4['grad']}";?>
							  </div>
							</div>

							
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Biru 
                                        <i class="fa fa-circle text-success"></i> Hijau
                                        <i class="fa fa-circle text-warning"></i> Kuning
                                        <i class="fa fa-circle text-danger"></i> Merah
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
	<!--				
 <div class="col-md-4" >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Unit Insident Report</h4>
                                <p class="category">Daftar Unit</p>
                            </div>
                            <div class="content" >
                            <div class="content" style=" height:200px;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">
							<?php
							//$sql = "SELECT * FROM user WHERE level= 3";
							//$result = mysql_query($sql);
							//echo mysql_error();

							//$i=1;
							//while($row = mysql_fetch_array($result)) 
								//{?>								
									<div id="scrollcui">
										<td><i class="fa fa-circle text-info"><?php //echo $i?></i></td>
										<td><?php //echo $row['username'];?></td>
									
									</div>
								<?php 
								//$i++;
								//}?>
								</div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Unit
                                        <i class="fa fa-circle text-danger"></i> Admin
                                        <i class="fa fa-circle text-warning"></i> Super Admin
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>-->
					

					<div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Animasi Video</h4>
                                <p class="category">Inciden Report </p>
                            </div>
                            <div class="content">
								<div class="embed-responsive embed-responsive-16by9">
								  <iframe class="embed-responsive-item" src="insidentreport.mp4"></iframe>
								</div>
							<!--<video controls>
							  <source src="insidentreport.mp4" type="video/mp4">
							</video>
							 <iframe src="https://www.youtube.com/watch?v=fARB0xTDUMg"></iframe> -->
                            </div>
                        </div>
                    </div>

				<!--<div class="col-md-6">
				<?php 
								//include "konfigurasi.php";
								//$sql = "SELECT COUNT(*) AS unit FROM reporting WHERE unit = 'angsoka' GROUP BY unit";
								//$query = mysql_query($sql);
								//$hasil5 = mysql_fetch_array($query);
							
							?>
							<?php //echo "{$hasil5['unit']}";?>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Reporting Unit</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>		-->		

<div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Info Insiden Yang Terjadi</h4>
                                <p class="category">All Report including</p>
                            </div>
                            <div class="content"> 
							<div class="progress">
							<?php 
								include "konfigurasi.php";?>
<?php
								$sql = "SELECT COUNT(*) AS jenis FROM reporting WHERE jenis = 1 GROUP BY jenis";
								$query = mysqli_query($con,$sql);
								$hasil1 = mysqli_fetch_array($query);
							
							?>
							  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil1['jenis']}";?>%">
								KNC<span class="sr-only"></span><?php echo "{$hasil1['jenis']}";?>
							  </div>
							</div>
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS jenis FROM reporting WHERE jenis = 2 ";
								$query = mysqli_query($con,$sql);
								$hasil2 = mysqli_fetch_array($query);
							
							?>
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo "{$hasil2['jenis']}";?>%">
									KTD<span class="sr-only"></span><?php echo "{$hasil2['jenis']}";?>
								</div> 
							</div>
							
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS jenis FROM reporting WHERE jenis = 3 GROUP BY jenis";
								$query = mysqli_query($con,$sql);
								$hasil3 = mysqli_fetch_array($query);

							?>
							  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil3['jenis']}";?>%">
								KTC<span class="sr-only"></span><?php echo "{$hasil3['jenis']}";?>
							  </div>
							</div>
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS jenis FROM reporting WHERE jenis = 4 GROUP BY jenis";
								$query = mysqli_query($con,$sql);
								$hasil4 = mysqli_fetch_array($query);
					
							?>
							
							  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil4['jenis']}";?>%">
								KPC<span class="sr-only"></span><?php echo "{$hasil4['jenis']}";?>
							  </div>
							</div>
							<div class="progress">
							<?php 
								
								$sql = "SELECT COUNT(*) AS jenis FROM reporting WHERE jenis = 5 GROUP BY jenis";
								$query = mysqli_query($con,$sql);
								$hasil5 = mysqli_fetch_array($query);
					
							?>
							
							  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "{$hasil5['jenis']}";?>%">
								SENTINEL<span class="sr-only"></span><?php echo "{$hasil5['jenis']}";?>
							  </div>
							</div>

							
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> KNC
                                        <i class="fa fa-circle text-success"></i> KTD
                                        <i class="fa fa-circle text-warning"></i> KTC
                                        <i class="fa fa-circle text-danger"></i> KPC
                                        <i class="fa fa-circle text-danger"></i> SENTINEL
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					</div>
					