<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Upload berkas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">home</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-widget" style="border-radius: 15px;">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a data-toggle="modal" data-target="#persyaratantambah" class="btn  btn-primary btn-xs" style="border-radius: 50px;"> <i class="fa fa-upload"></i> Upload pembayaran </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover ">
                                <tr>
                                    <th>No.</th>
                                    <th>Kartu Tanda Mahasiswa</th>
                                    <th>Kartu Hasil Studi</th>
                                    <th>Proposal</th>
                                    <th>Wajib</th>
                                    <th>Status Validasi</th>
                                    <th>aksi</th>
                                </tr>
                                <?php
                                $id_pendaftaran = $this->session->userdata('id');
                                $pendaftaran = $this->db->query("select * from tbl_pendaftaran where id_pendaftaran='$id_pendaftaran'")->row();
                                ?>
                                <?php $no = 1;
                                foreach ($persyaratan_mhs as $a) {  ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><a href="" data-toggle="modal" data-target="#viewktm">mhs_<?php echo $this->session->userdata('date_created') ?><?php echo $a->id_pendaftaran; ?> </a></td>
                                        <td><a href="" data-toggle="modal" data-target="#viewkhs">mhs_<?php echo $this->session->userdata('date_created') ?></td>
                                        <td><a href="" data-toggle="modal" data-target="#viewkhs">mhs_<?php echo $this->session->userdata('date_created') ?></td>
                                        <td>Y</td>
                                        <td>
                                            <?php if ($a->status_persyaratan == "approved") {
                                                echo "<span style='border-radius: 50px;' class='label label-success'>Valid</span>";
                                            } else {
                                                echo "<span style='border-radius: 50px;' class='label label-danger'>Tidak Valid</span>";
                                            } ?>
                                        </td>
                                        <td>
                                        <td align="center">
                                            <?php if ($a->status_persyaratan == "not approved") { ?>
                                                <a href="<?php echo base_url('mahasiswa/edit_persyaratan'); ?>" class="btn  btn-warning btn-xs" style="border-radius: 50px;"> <i class="fa fa-edit"></i> </a>
                                                <a href="<?php echo base_url('mahasiswa/delete_persyaratan/') . $a->id_persyaratan; ?>" class="btn  btn-danger btn-xs" style="border-radius: 50px;"> <i class="fa fa-trash"></i> </a>
                                            <?php } ?>
                                            <?php if ($a->status_persyaratan == "approved") { ?>
                                                <a class="btn  btn-primary btn-xs" style="border-radius: 50px;"> <i class="fa fa-print"></i> </a>
                                            <?php } ?>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="viewktm">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Kartu Tanda Mahasiswa</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo base_url() . '/files/persyaratan/' . $a->ktm; ?>" alt="image" width="100%" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="viewkhs">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Kartu Hasil Studi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo base_url() . '/files/persyaratan/' . $a->khs; ?>" alt="image" width="100%" />
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
                <div class="modal fade" id="persyaratantambah">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Upload berkas </h4>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('mahasiswa/persyaratan_aksi'); ?>
                                <div class="row">
                                    <div class="col-lg-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" value="<?php echo $this->session->userdata('id_pendaftaran') ?>" name="id_pendaftaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                    <input type="hidden" value="<?php echo $this->session->userdata('persyaratan') ?>" name="persyaratan" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                    <label for="judul_pengumuman"><b>Upload KHS</b></label><br> <small style="color: orange;">File yang dapat di upload berupa <i>'jpg, jpeg, png, pdf'</i></small>
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="khs" class="form-control form-control-sm" placeholder="Upload Image">
                                                        <?php
                                                        if (isset($gambar_error)) {
                                                            echo $gambar_error;
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php echo form_error('khs'); ?>
                                                </div>
                                                <?php echo form_error('no_pembayaran'); ?>
                                                <div class="form-group">
                                                    <label for="judul_pengumuman"><b> Upload KTM</b></label><br> <small style="color: orange;">File yang dapat di upload berupa <i>'jpg, jpeg, png, pdf'</i></small>
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="ktm" class="form-control form-control-sm" placeholder="Upload Image">
                                                        <?php
                                                        if (isset($gambar_error)) {
                                                            echo $gambar_error;
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php echo form_error('ktm'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul_pengumuman"><b> Upload Proposal</b></label><br> <small style="color: orange;">File yang dapat di upload berupa <i>'jpg, jpeg, png, pdf'</i></small>
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="proposal_pkl" class="form-control form-control-sm" placeholder="Upload Image">
                                                        <?php
                                                        if (isset($gambar_error)) {
                                                            echo $gambar_error;
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php echo form_error('proposal_pkl'); ?>
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