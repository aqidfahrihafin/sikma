<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Akademik IST Annuqayah</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top" style="background: linear-gradient( rgb(41, 143, 173), rgb(32, 109, 180));">
                <div class="container">
                    <div>
                        <a href="<?php echo base_url('') ?>">
                            <h3 style="color: rgb(238, 222, 74);"><b>SiPPS</b> </h3>
                        </a>
                        <!-- <a href="<?php echo base_url('') ?>"><span class="logo-mini"><img src="<?php echo base_url('assets'); ?>/dist/img/logokecil.png" height="50px"></span></a> -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <br><br>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-4">
                        <!-- Box Comment -->
                        <div class="box box-widget" style="border-radius: 15px;">
                            <div class="box-header with-border">
                                <span>
                                    Form *<b>Login</b>
                                </span>
                                <!-- /.user-block -->
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form role="form" action="<?php echo base_url() . 'login/aksi'; ?>" method="post">
                                    <div class="box-body">
                                        <?php
                                        if (isset($_GET['alert'])) {
                                            if ($_GET['alert'] == "gagal") {
                                                echo "<div class='alert alert alert-dismissible' style='background-color: rgba(252, 22, 22, 0.712);color:white;' align='justify'>
                                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                <h4><i class='icon fa fa-warning'></i> Maaf!</h4>
                                                Username atau password yang anda masukkan salah!
                                              </div> ";
                                            } else if ($_GET['alert'] == "belum_login") {
                                                echo "<div class='alert alert alert-dismissible' style='background-color: rgba(252, 22, 22, 0.712); color:white;' align='justify'>
                                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                <h4><i class='icon fa fa-warning'></i> Maaf!</h4>
                                                Anda belum login!
                                              </div>";
                                            } else if ($_GET['alert'] == "logout") {
                                                echo "<div class='alert alert alert-dismissible' style='background-color: rgba(0, 128, 0, 0.521); color:white;' align='justify'>
                                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                <h4><i class='icon fa fa-check'></i> Selamat!</h4>
                                                Anda telah berhasil logout!
                                              </div> ";
                                            }
                                        }
                                        ?>
                                        <h4 align="justify"><b>LOGIN</b> <br> <small>Masukkan data login Anda dan mulailah pengelolaan pendaftaran PKL. </small></h4>
                                        <br>

                                        <div class="form-group">
                                            <input type="username" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan NID anda...">
                                        </div>
                                        <?php echo form_error('username'); ?>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password anda...">
                                        </div>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer" align="right">
                                        <button style="border-radius: 50px; background: rgb(32, 109, 180);" type="submit" class="btn btn-block  btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="col-md-8">
                        <div class="box box-gray collapsed-box box-solid" style="border-radius: 15px;">
                            <div class="box-header with-border">
                                <span data-widget="collapse">
                                    Informasi Hak Akses Pengguana
                                </span>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- /.box-header -->
                                <p>Ada 4 akses pengguna yang dapat mengakses sistem pendaftaran PKL dan Skripsi Institut Sains dan Teknologi Annuqayah yaitu :</p>
                                <ul>
                                    <li>Akademik</li>
                                    <li>Keuangan</li>
                                    <li>kaprodi</li>
                                    <li>DPL</li>
                                </ul>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer" style=" background: linear-gradient( rgb(32, 109, 180), rgb(41, 143, 173));color: white; ">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.18
                </div>
                <strong>Copyright &copy; 2022 <a style="color: rgb(238, 222, 74);" href="#">Aqid Fahri Hafin</a>.</strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets'); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets'); ?>/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>
</body>

</html>