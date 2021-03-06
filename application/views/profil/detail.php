<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DAEBAK CAFE</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="<?php echo base_url('asset/css/bootstrap.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('asset/css/bootstrap-responsive.css'); ?> " rel="stylesheet">
	<link href="<?php echo base_url('asset/css/detail.css'); ?> " rel="stylesheet">
	<link href="<?php echo base_url('asset/css/social-icons.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Droid+Sans:400,700'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Droid+Serif'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Boogaloo'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Economica:700,400italic'); ?> ">
	<!-- end: CSS -->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="<?php echo base_url('asset/images/logo.jpg'); ?>" width="200px" height="200px" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href=" <?php echo base_url('Welcome/index'); ?>">Home</a></li>
			              			<li><a href="<?php echo base_url('Welcome/produk'); ?> ">Makanan</a></li>
			              			<li><a href="<?php echo base_url('Welcome/minum'); ?> ">Minuman</a></li>
                                    <li><a href="<?php echo base_url('Welcome/detail'); ?>">Keranjang</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="<?php echo base_url('Welcome/login'); ?>">Admin</a></li>
			                  				<li><a href="<?php echo base_url('Welcome/login2'); ?>">Super Admin</a></li>
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i>Pesanan</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
				
		<!-- start: Container -->
		<div class="container">
			 <form action="<?php echo base_url('index.php/Welcome/pesan'); ?>" method="post">
			<!-- start: Table -->
            <div class="title"> <h3>Detail Pesanan</h3> </div>
	            <div class="col-md-4 harga">
			<a data-toggle="modal" href='#modal-id' class="kusus">

				
				  <button class="btn btn-primary">BAYAR</button> 
				  <h3 id="total" ></h3>


			</a>
			<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="tutup" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
						<h4 class="modal-title">KALKULATOR</h4>
					</div>
					<div class="modal-body text-center">
						<h4 class="totalan" ></h4>
						<form>
						<center >
						<input type="text" id="bayare" name="" class="form-control" required="required" placeholder="Bayar">
						</center>
						<div id="ganti">
						</div>
					</div>
					<div class="modal-footer">
							<button type="button" id="kembalian" class="btn btn-primary">KEMBALIAN</button>
							<a class="btn btn-success" href="<?=site_url("myigniter/selesai")?>">SLESAI</a>
						<form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
				</div>
				<table class="table table-bordered">
				
				<thead>
				<tr>
					<th><center>Makanan</center></th>
                    <th><center>Minuman</center></th>
                    <th><center>Jumlah Makanan</center></th>
					<th><center>Harga Makan</center></th>
					<th><center>Jumlah Minuman</center></th>
					<th><center>Harga Minum</center></th>
					
				</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach ($data as $d) { ?>
					<tr>
					<td><?php echo $d->makanan; ?></td>
					<td><?php echo $d->minuman; ?></td>
					<td><?php echo $d->jumlah_makanan; ?></td>
					<td><?php echo $d->harga_makanan; ?></td>
					<td><?php echo $d->jumlah_minuman; ?></td>
					<td><?php echo $d->harga_minuman; ?></td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			   </table>
		</div>
		<!-- end: Container -->
	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>Tentang Daebak Cafe</h3>
					<p>
						Daebak adalah restoran korea pertama yang mengusung konsep Fan Cafe di Indonesia. Dengan kata lain Daebak adalah The First Korean Fan Cafe in Indonesia. Konsep Korean Fan Cafe memiliki tujuan memberikan pengalaman tidak terlupakan bagi para pecinta Korea, baik suka Korea Karena Kpop, Drama, Pariwisata, atau terlebih lagi karena Kulinernya. Nuansa dan suasana Fan Cafe yang di Daebak begitu kuat terasa dari mulai desain, musik, rasa, makanan, aroma, warna (Experience Korean Taste: sight, sound, scent, taste, and touch) yang semuanya Korea banget!
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Alamat Kami</h3>
					Jl. Bungur No. 130 Jember<br />
                    Telp : 081234567890<br />
                    Email : <a href="mailto:">daebakcafe@gmail.com</a>
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="http://dribbble.com"></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="http://dribbble.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
				<!--	<form id="newsletter">
						<h3>Newsletter</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form> -->
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				Copyright &copy; <a href="http://www.niqoweb.com">DistroIT 2015</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('asset/js/jquery-1.8.2.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/bootstrap.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/flexslider.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/carousel.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/jquery.cslider.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/slider.js'); ?> "></script>
<script defer="defer" src="<?php echo base_url('asset/js/custom.js'); ?> "></script>
<!-- end: Java Script -->

</body>
</html>


<script>
