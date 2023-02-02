<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>SIKMA | Login Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>css/vendor.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assetss/')?>css/default/app.min.css" rel="stylesheet" />

</head>

<body class='pace-top'>

	<div id="app" class="app">
		<div class="login login-with-news-feed">
			<div class="news-feed">
				<div class="news-image" style="background-image: url(<?php echo base_url('assetss/')?>img/ist.png)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>SIKMA</b> Annuqayah</h4>
					<p>
						Sistem Informasi aktifitas mahasiswa Institut Sains dan Teknologi Annuqayah Guluk-guluk Sumenep Madura.
					</p>
				</div>
			</div>

			<div class="login-container">
                <div align="center">
                    <div class="image">
                        <a href="#"><img src="<?php echo base_url('assetss/')?>img/logokecil.png" alt="" width="100"></a>
                    </div>
                </div>
                    <br>
                    <br>
				<div class="login-header mb-30px">
					<div class="brand">
						<div class="d-flex align-items-center">
							<b>LOGIN</b>
						</div>
						<small>Masukkan data login anda dan mulailah perjalanan belajar bersama kami.</small>
					</div>
				</div>
				<div class="login-content">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger alert-dismissible'  align='justify'>
                            Username atau password yang anda masukkan salah!
                            </div> ";
                        } else if ($_GET['alert'] == "belum_login") {
                            echo "<div class='alert alert-danger alert-dismissible'  align='justify'>
                            Anda belum login!
                            </div>";
                        } else if ($_GET['alert'] == "logout") {
                            echo "<div class='alert alert-success alert-dismissible'  align='justify'>
                            Anda telah berhasil logout!
                            </div> ";
                        }
                    }
                    ?>
<!-- flas data -->
					<?php if ($this->session->flashdata('alert')): ?>
						<div id="alert" class="alert alert-success">
							<?php echo $this->session->flashdata('alert'); ?>
						</div>
						<script>
							setTimeout(function() {
								document.getElementById("alert").remove();
							}, <?php echo $this->session->flashdata('alert_timeout'); ?>);
						</script>
					<?php endif; ?>

					<?php if ($this->session->flashdata('error')): ?>
						<div id="alert" class="alert alert-danger">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
						<script>
							setTimeout(function() {
								document.getElementById("error").remove();
							}, <?php echo $this->session->flashdata('error_timeout'); ?>);
						</script>
					<?php endif; ?>


					<form action="<?php echo base_url() . 'login/aksi'; ?>" method="POST" class="fs-13px">
						<div class="form-floating mb-15px">
							<input type="text" class="form-control h-45px fs-13px" placeholder="username" id="username" name="username" />
							<label for="username" class="d-flex align-items-center fs-13px text-gray-600">username</label>
						</div>
                        <?php echo form_error('username'); ?>
						<div class="form-floating mb-15px">
							<input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" name="password" />
							<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
						</div>
                        <?php echo form_error('password'); ?>
						<div class=" text-dark" align="right">
						<a href="<?php echo base_url() . 'lupapassword'; ?>" class="text-primary">Lupa Password</a>
						</div>
						<br>
						<div class="mb-15px">
							<button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Sign in</button>
						</div>
						
						<div class="mb-40px pb-40px text-dark" align="center">
							Belum memiliki akun? klik <a href="#" class="text-primary">disini</a> untuk daftar.
						</div>
						<hr class="bg-gray-600 opacity-2" />
						<div class="text-gray-600 text-center  mb-0">
							&copy; IT_Team All Right Reserved 2023
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('assetss/')?>js/vendor.min.js" type="67c67da5fd940b87f2883c08-text/javascript"></script>
	<script src="<?php echo base_url('assetss/')?>js/app.min.js" type="67c67da5fd940b87f2883c08-text/javascript"></script>
</body>

</html>