<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Home Page
            <small>Pendaftaran PKL dan Skripsi</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Home Page</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert  alert-dismissible" style="background-color: rgba(53, 148, 226, 0.822); color: white;" align="justify">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Info !!!</h4>
                    Pendaftaran Praktik Kerja Lapangan (PKL) Institut Sains dan Teknologi Annuqayah telah <b style="border-radius: 50px;" class="label label-success">Di buka</b> lakukan registrasi sekarang.
                    <!-- Pendaftaran Praktik Kerja Lapangan (PKL) Institut Sains dan Teknologi Annuqayah telah <b style="border-radius: 50px;" class="label label-success">Di buka</b> proses registrasi tidak dapat dilakukan . -->
                </div>
            </div>
        </div>
        <!-- /.row -->
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
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <form action="<?php echo base_url('home/login_aksi/'); ?>" method="post">
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
                                <?= $this->session->flashdata('pesan'); ?>
                                <h4 align="justify"><b style="color: rgba(22, 198, 252);">LOGIN</b><br> <small>Masukkan data login Anda dan mulailah pendaftaran PKL. </small> </h4>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nim" required id="exampleInputEmail1" placeholder="Masukkan NIM anda...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" required id="exampleInputPassword1" placeholder="Masukkan Password anda...">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer" align="center">
                                <button style="border-radius: 50px;" type="submit" class="btn btn-block btn-info">Login</button>
                                --- OR ---
                                <a href="<?php echo base_url('registrasi/'); ?>" style="border-radius: 50px;" type="submit" class="btn btn-block btn-danger">Register</a>
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
                            Informasi *<b>Jadwal Pendaftaran</b>
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
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover ">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama </th>
                                    <th>Prodi</th>
                                    <th>Status</th>
                                    <th>aksi</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>Aqid Fahri Hafin</td>
                                    <td>11-7-2014</td>
                                    <td align="center"><span style="border-radius: 50px;" class="label label-success">Approved</span>
                                    </td>
                                    <td align="center">
                                        <a class="btn  btn-warning btn-xs" style="border-radius: 50px;"> <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td align="center"><span style="border-radius: 50px;" class="label label-danger">Approved</span>
                                    </td>
                                    <td align="center">
                                        <a class="btn  btn-warning btn-xs" style="border-radius: 50px;"> <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->