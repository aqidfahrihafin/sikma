<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SIKMA | Reset Password</title>
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

		<div class="login login-v2 fw-bold">

			<div class="login-cover">
				<div class="login-cover-img" style="background-image: url(<?php echo base_url('assetss/')?>img/ist.png)"
					data-id="login-cover-image"></div>
				<div class="login-cover-bg"></div>
			</div>
			<div class="login-container">

				<div class="login-header">
					<div class="brand">
						<div class="d-flex align-items-center">
							<span></span> <b>SIKMA</b>
						</div>
						<small>Masukkan password baru Anda !</small>
					</div>
				</div>


				<div class="login-content">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
					
                 <form action="<?php echo base_url('lupapassword/update_password') ?>" method="post">
                    
                    <div class="form-floating mb-20px">        
                            <input type="hidden" name="token" value="<?php echo $this->input->get('token'); ?>">
							<input type="password" class="form-control fs-13px h-45px border-0" type="password" name="password" id="password" placeholder="masukkan password baru ">
							<label for="password" class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
					</div>
                    <div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" type="confirm_password" name="confirm_password" id="confirm_password" placeholder="konfirmasi password ">
							<label for="confirm_password" class="d-flex align-items-center text-gray-600 fs-13px">Konfirmasi Password</label>
					</div>
                        
						<div class="mb-20px">
							<button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Reset Password</button>
						</div>
                </form>

				</div>

			</div>

		</div>

		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

	</div>


	<script src="<?php echo base_url('assetss/')?>js/vendor.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assetss/')?>js/app.min.js" type="text/javascript"></script>


	<script src="<?php echo base_url('assetss/')?>js/demo/login-v2.demo.js" type="text/javascript"></script>

</body>
</html>
