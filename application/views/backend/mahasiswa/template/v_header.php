<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>SIKMA | <?php echo $title; ?></title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="keywords" />
	<meta content="Raja Putra Media" name="author" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url('assetss/')?>plugins/jquery-ui/themes/base/minified/jquery-ui.min.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url('assetss/')?>plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/DataTables/media/css/dataTables.bootstrap.min.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/DataTables/media/css/dataTables.bootstrap.min.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css"rel="stylesheet" />

	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-datepicker/css/bootstrap-datepicker.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/password-indicator/css/password-indicator.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-combobox/css/bootstrap-combobox.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-daterangepicker/daterangepicker.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css"rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css"	rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assetss/')?>plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?php echo base_url('dashboard/'); ?>" class="navbar-brand"><span class="navbar-logo"><i
								class="ion-university text-blue"></i></span><b>SIKMA</b> 2.0</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				<!-- begin navbar-collapse -->
				<div class="collapse navbar-collapse pull-left" id="top-navbar">
					<ul class="nav navbar-nav">
						<li><a href="javascript:;" data-click="sidebar-minify"><i
									class="ion-navicon-round m-r-5 f-s-20 pull-left text-inverse"></i></a></li>
					</ul>
				</div>
				<!-- end navbar-collapse -->
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="user-image online"><img src="<?php echo base_url('assetss/')?>img/aqit.png"		alt="" /></span>
							<span class="hidden-xs"><span class="text-warning">SIKMA </span>Management</span> <span	class="text-warning"><i class="fa fa-caret-down"></i></span>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="<?php echo base_url('dashboard/logout/'); ?>" ><i	class="ion-ios-locked"></i> &nbsp;Log in</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
		<div data-scrollbar="true" data-height="100%" data-init="true"
			style="overflow: hidden; width: auto; height: 100%;">
			<!-- begin sidebar user -->
			<ul class="nav">
				<li class="nav-profile">
					<div class="image">
						<a href="#"><img src="<?php echo base_url('assetss/')?>img/logokecil.png" alt=""></a>
					</div>
					<div class="info">
					<b>IST</b>	 <small>Annuqayah</small>
					</div>
				</li>
			</ul>
			<!-- end sidebar user -->
			<!-- begin sidebar nav -->
			<ul class="nav">
				<li class="nav-header">Navigation <i class="fa fa-paper-plane m-l-5"></i></li>
				<li><a href="<?php echo base_url('dashboard/'); ?>"><i class="ion-ios-pulse bg-red"></i><span>Dashboard</span> <span class="badge bg-danger pull-right">HOME</span></a></li>
				<li class="has-sub">
					<a href="javascript:;"><b class="caret pull-right"></b><i class="ion-ios-gear-outline bg-blue"></i><span>Management Setup</span></a>
					<ul class="sub-menu">
						<li><a href="<?php echo base_url('setup/'); ?>"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Institut</a></li>
						<li><a href="<?php echo base_url('priode/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Program</a></li>
						<li><a href="<?php echo base_url('priode/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Periode</a></li>	
						<li><a href="<?php echo base_url('prodi/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Program studi</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;"><b class="caret pull-right"></b><i
							class="ion-ios-color-filter-outline bg-purple"></i><span>Master Data</span></a>
							<ul class="sub-menu">
						<li><a href="<?php echo base_url('users/'); ?>"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data User</a></li>
						<li><a href="#"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data Instansi</a></li>
						<li><a href="#"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data Domisili</a></li>
						<li><a href="#"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data File</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="ion-ios-personadd-outline bg-danger"></i><span>Dosen</span></a></li>
				<li><a href="<?php echo base_url('mahasiswa/'); ?>"><i class="ion-university bg-warning"></i><span>Mahasiswa<span class="label label-warning pull-right">APPROVAL</span></span></a></li>
				<li><a href="<?php echo base_url('berkas/'); ?>"><i class="ion-ios-paper-outline bg-gradient-blue"></i><span>Berkas<span class="label label-info pull-right">APPROVAL</span></span></a></li>
				
				<!-- begin sidebar minify button -->
				<li><a href="javascript:;" class="sidebar-minify-btn grey" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
				<!-- end sidebar minify button -->
			</ul>
			<!-- end sidebar nav -->
		</div>
		<div class="slimScrollBar"
			style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 828px;">
		</div>
		<div class="slimScrollRail"
			style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
		</div>
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>