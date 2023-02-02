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
                <?php
                $id_pendaftaran = $this->session->userdata('id');
                $pendaftaran = $this->db->query("select * from tbl_pendaftaran where id_pendaftaran='$id_pendaftaran'")->row();
                ?>
                <?php $no = 1;
                foreach ($pembayaran_mhs as $a) {  ?>
                    <?php if ($a->status_pembayaran == "not approved") {
                        echo " <div class='alert alert  alert-dismissible' style='background-color: rgba(53, 148, 226, 0.822); color:white; align=' justify'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <small><i class='icon fa fa fa-check'></i>Bukti pembayaran berhasil di upload, pantau terus status pembayaran anda!</small>
                        </div>";
                    } else {
                        echo "";
                    } ?>
                <?php } ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-widget" style="border-radius: 15px;">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a data-toggle="modal" data-target="#modal-default" class="btn  btn-primary btn-xs" style="border-radius: 50px;"> <i class="fa fa-upload"></i> Upload pembayaran </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover ">
                                <tr>
                                    <th>ID</th>
                                    <th>No Pembayaran </th>
                                    <th>Bukti pembayaran</th>
                                    <th>tanggal pembayaran</th>
                                    <th>Status</th>
                                    <th>aksi</th>
                                </tr>
                                <?php
                                $id_pendaftaran = $this->session->userdata('id');
                                $pendaftaran = $this->db->query("select * from tbl_pendaftaran where id_pendaftaran='$id_pendaftaran'")->row();
                                ?>
                                <?php $no = 1;
                                foreach ($pembayaran_mhs as $a) {  ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $a->no_pembayaran; ?></td>
                                        <td><a href="" data-toggle="modal" data-target="#viewpembayaran">Cek bukti pembayaran </a></td>
                                        <td><?php echo date('d F Y H:i:s', $a->date_created); ?></td>
                                        <td>
                                            <?php if ($a->status_pembayaran == "approved") {
                                                echo "<span style='border-radius: 50px;' class='label label-success'>Valid</span>";
                                            } else {
                                                echo "<span style='border-radius: 50px;' class='label label-danger'>Tidak Valid</span>";
                                            } ?>
                                        </td>
                                        <td align="center">
                                            <?php if ($a->status_pembayaran == "not approved") { ?>
                                                <a href="<?php echo base_url('mahasiswa/edit_pembayaran'); ?>" class="btn  btn-warning btn-xs" style="border-radius: 50px;"> <i class="fa fa-edit"></i> </a>
                                                <a href="<?php echo base_url('mahasiswa/delete_pembayaran/') . $a->id_pembayaran; ?>" class="btn  btn-danger btn-xs" style="border-radius: 50px;"> <i class="fa fa-trash"></i> </a>
                                            <?php } ?>
                                            <?php if ($a->status_pembayaran == "approved") { ?>
                                                <a class="btn  btn-primary btn-xs" style="border-radius: 50px;"> <i class="fa fa-print"></i> </a>
                                            <?php } ?>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="viewpembayaran">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Bukti pembayaran</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo base_url() . '/files/pembayaran/' . $a->bukti_pembayaran; ?>" alt="image" width="100%" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Upload pembayaran</h4>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('mahasiswa/pembayaran_aksi'); ?>
                                <div class="row">
                                    <div class="col-lg-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="bukti_pembayaran"><b> No pembayaran</b></label>
                                                    <input type="hidden" value="<?php echo $this->session->userdata('id_pendaftaran') ?>" name="id_pendaftaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                    <input type="text" readonly value="IST<?php echo $this->session->userdata('date_created') ?>" name="no_pembayaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                </div>
                                                <?php echo form_error('no_pembayaran'); ?>
                                                <div class="form-group">
                                                    <label for="judul_pengumuman"><b> Bukti Pembayaran</b></label><br> <small style="color: orange;">File yang dapat di upload berupa <i>'jpg, jpeg, png'</i></small>
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="bukti_pembayaran" class="form-control form-control-sm" placeholder="Upload Image">
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
                                                        <input type="submit" style="border-radius: 50px;" value="Simpan" class="btn btn-success btn-sm"></input>
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
            </div>
        </div>
    </section>
</div>