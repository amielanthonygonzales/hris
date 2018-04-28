<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico"); ?>" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url("assets") ?>/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url("assets") ?>/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url("assets") ?>/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets") ?>/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("assets") ?>/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url("assets") ?>/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url("assets") ?>/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url("assets") ?>/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("assets") ?>/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url("assets") ?>/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url("assets") ?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url("assets") ?>/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets") ?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo base_url("assets") ?>/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo base_url("assets") ?>/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel = "icon" href="<?php echo base_url("assets/app/img/hris-logo.png"); ?>"/>	
		<title>HRCS</title>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app") ?>/lib/stroke-7/style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app") ?>/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- alerts -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app") ?>/lib/jquery.gritter/css/jquery.gritter.css"/>
		
		<!-- base -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css") ?>/sss-style.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url("assets/css") ?>/style.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url("assets/app") ?>/css/style.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url("assets/app") ?>/css/themes/theme-hris.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url("assets/css") ?>/media-queries.css" type="text/css"/>
		<!-- font awesome -->
		<link rel="stylesheet" href="<?php echo base_url("assets/app") ?>/css/font-awesome-5.0.8/css/font-awesome.css" type="text/css"/>
		
		
		<!-- basic js-->
		<script src="<?php echo base_url("assets/app") ?>/lib/jquery/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app") ?>/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app") ?>/js/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app") ?>/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
		<!-- JQuery UI JS -->
		<script src="<?php echo base_url("assets/app"); ?>/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
		
		<!-- datetime picker css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app"); ?>/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
		
		<!-- slider css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app"); ?>/lib/bootstrap-slider/css/bootstrap-slider.css"/>
		
		<!-- select2 css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app"); ?>/lib/select2/css/select2.min.css"/>

		<!-- data tables -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app"); ?>/lib/datatables/css/dataTables.bootstrap.min.css"/>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/js/app-tables-datatables.js" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/app"); ?>/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

		<!-- plotly -->
		<script src="<?php echo base_url("assets/app"); ?>/lib/plotly.js-1.36.1/dist/plotly.min.js" type="text/javascript"></script>
		
		
		
	</head>
	<body>
		<div class="sk-fading-circle">
		  <div class="sk-circle1 sk-circle"></div>
		  <div class="sk-circle2 sk-circle"></div>
		  <div class="sk-circle3 sk-circle"></div>
		  <div class="sk-circle4 sk-circle"></div>
		  <div class="sk-circle5 sk-circle"></div>
		  <div class="sk-circle6 sk-circle"></div>
		  <div class="sk-circle7 sk-circle"></div>
		  <div class="sk-circle8 sk-circle"></div>
		  <div class="sk-circle9 sk-circle"></div>
		  <div class="sk-circle10 sk-circle"></div>
		  <div class="sk-circle11 sk-circle"></div>
		  <div class="sk-circle12 sk-circle"></div>
		</div>
		<div class="am-fixed-sidebar am-wrapper">
			<div class="sidebar">
			<?php
			// echo $this->load->view("app/nav-head", $data, true);
			echo $callHead;
			 echo $call;
			?>
			</div>
			<div class="am-content">
				<div class="main-content">
					<?php echo $content?>
				</div>
			</div>
		</div>
	
	
	