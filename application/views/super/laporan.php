<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Daebak Cafe </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <link href=" <?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet">

<style type="text/css">
		 }
		 table {
		 border-top: solid thin #000;
		 border-collapse: collapse;
		 }
		 th, td {
		 border-top: border-top: solid thin #000;
		 padding: 6px 12px;
		 }
 </style>
    </head>
    
    <body>
        
        <!-- Header -->
		<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-toggle"></span>
			  </button>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
				
				<li><a href="<?php echo base_url('index.php/Welcome/logout') ;?>"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
			  </ul>
			</div>
		  </div><!-- /container -->
		</div>
		<!-- /Header -->

		<!-- Main -->
		<div class="container">
		<div class="row">
			<div class="col-md-3">
			  <!-- Left column -->

			  <hr>
			  
			  <ul class="nav nav-pills nav-stacked">
				<li class="nav-header"></li>
				<li><a href="<?php echo base_url('index.php/Welcome/profil'); ?>"><i class="glyphicon glyphicon-list"></i> Profil Admin</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/daftar_pegawai') ; ?>"><i class="glyphicon glyphicon-list-alt"></i> Daftar Pegawai</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/laporan'); ?>"><i class="glyphicon glyphicon-book"></i> Tabel Laporan</a></li>
				<li><a href="<?php echo base_url('index.php/Php_excel/download/') ?>"><i class="glyphicon glyphicon-file"></i> Download Laporan Excel</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/pdf') ?>"><i class="glyphicon glyphicon-file"></i> Download Laporan PDF</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/grafik') ?>"><i class="glyphicon glyphicon-star"></i> Grafik</a></li>
			  </ul>
			</div><!-- /col-3 -->
			
				<div class="col-md-9">

			  
				<div class="row">
				   
					
				  
					<!-- center left-->	
				<div class="col-md-9" id="content">
					  <?php echo form_open_multipart('Php_excel/do_upload') ; ?>
					<h4 align="center">Sebelum mengupload, pastikan file anda berformat .xls/.xlsx</h4>
					<label class="custom-file">
					  <input type="file" id="file" name="file" class="form-control" value="upload">
					  <span class="custom-file-control"></span>
				  	</label>
				<button type="submit" class="btn btn-default">Go!</button>
				</form>

				<br><br>
				<hr>
				<table border="1" width="100%">
					<thead>
						<th>No</th>
						<th>Makanan</th>
						<th>Minuman</th>
						<th>Jumlah Makanan</th>
						<th>Jumlah Minuman</th>
						<th>Harga Makanan</th>
						<th>Harga Minuman</th>
					</thead>
					<tbody>
						<?php $i=1; foreach($laporan as $user) { ?>
						 <tr>
						 <td><?php echo $i ; ?></td>
						 <td><?php echo $user->makan; ?></td>
						 <td><?php echo $user->minum; ?></td>
						 <td><?php echo $user->jumlah_makan; ?></td>
						 <td><?php echo $user->jumlah_minum; ?></td>
						 <td><?php echo $user->harga_makan; ?></td>
						 <td><?php echo $user->harga_minum; ?></td>
						 </tr>
						 <?php $i++; } ?>
					</tbody>
				</table>
				</div>
			  </div><!--/row-->
			</div><!--/col-span-9-->
		</div>
		</div>
		<!-- /Main -->

        
		<script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".alert").addClass("in").fadeOut(4500);
			$('[data-toggle=collapse]').click(function(){
				$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
			});
        });
        </script>
    
</body></html>