<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Daebak Cafe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('Chart.js/Chart.bundle.js'); ?>">
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
				
				<li><a href="<?php echo base_url('index.php/Welcome/logout'); ?>"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
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
				   
					  <hr>              
		   
					</div>

<html>
    <head>
        
        <!--<style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>-->
        <meta charset="utf-8">
    		<link   href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" rel="stylesheet">
    		<script src="<?php echo base_url('Chart.js/Chart.bundle.js'); ?>"></script>
    		<!--<script src="js/bootstrap.min.js"></script>-->
    </head>
    <body>
        <div width: 0px margin: 0px auto>
            <canvas id="myChart" width="0" height="0"></canvas>
        </div>
         <?php include 'querygrap.php'; ?>
        <script>

       
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php echo $ya['SUM(harga_menu)']; ?>, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>

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