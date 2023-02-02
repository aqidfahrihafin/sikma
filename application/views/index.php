<html lang="en">

<head>
	<meta charset="utf-8">
	<title>SIKMA | 404 Error Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('assetss/')?>css/vendor.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assetss/')?>css/default/app.min.css" rel="stylesheet">

</head>

<body class="pace-done pace-top">
	<div class="pace pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99"
			style="transform: translate3d(100%, 0px, 0px);">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>

	<div id="loader" class="app-loader loaded">
		<span class="spinner"></span>
	</div>


	<div id="app" class="app">
		<div class="error">
			<div class="error-code">403</div>
			<div class="error-content">
			<div class="error-message">Upss sorry, your activity is illegal !!!</div>
				<div class="error-desc mb-4">
				   Anda tidak bisa mengakses halaman ini.	
				   <br>
				   Data Anda sudah kami record secara otomatis termasuk data pribadi anda.
				</div>
				<div>
					<a href="<?php echo base_url('dashboard'); ?>" class="btn btn-success px-3">Go Home</a>
				</div>
			</div>
		</div>

		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

	</div>


	<script src="<?php echo base_url('assetss/')?>js/vendor.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assetss/')?>js/app.min.js" type="text/javascript"></script>


</body>
</html>