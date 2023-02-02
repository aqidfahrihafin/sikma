<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Pembayaran</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">home</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info  alert-dismissible" align="justify">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Segera lakukan pembayaran agar pendaftaran anda dapat segera di proses.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-widget" style="border-radius: 15px;">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a href="#" class="btn  btn-success btn-xs" style="border-radius: 50px;" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-plus"></i> Upload pembayaran </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <?php echo form_open_multipart('mahasiswa/pembayaran_aksi'); ?>
                        <div class="row">
                            <div class="col-lg-8 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="bukti_pembayaran"><b> No pembayaran</b></label>
                                            <input type="hidden" value="<?php echo $this->session->userdata('id_pendaftaran') ?>" name="id_pendaftaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                            <input type="text" readonly value="IST<?php echo $this->session->userdata('date_created') ?><?php echo $this->session->userdata('id_pendaftaran') ?>" name="no_pembayaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                        </div>
                                        <?php echo form_error('no_pembayaran'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="judul_pengumuman"><b> Bukti Pembayaran</b></label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" name="bukti_pembayaran" class="form-control  form-control-sm file-upload-info" placeholder="Upload Image">
                                                <?php
                                                if (isset($gambar_error)) {
                                                    echo $gambar_error;
                                                }
                                                ?>
                                            </div>
                                            <?php echo form_error('bukti_pembayaran'); ?>
                                        </div>
                                        <div align="right">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <input type="submit" value="not approved" class="btn btn-warning btn-sm"></input>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>