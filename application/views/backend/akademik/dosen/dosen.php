<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Data Instansi</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">home</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box" style="border-radius: 7px;">
                    <div class="box-header">
                        <a data-toggle="modal" data-target="#modal-default" class="btn  btn-success btn-xs" style="border-radius: 50px;"> <i class="fa fa-plus"></i> Tambah Data </a>
                        <a data-toggle="modal" data-target="#importdosen" class="btn  btn-danger btn-xs" style="border-radius: 50px;"> <i class="fa fa-upload"></i> Import Data </a>
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" onclick="location.reload()" title="Refresh">
                                <i class="fa fa-refresh"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive">
                            <table id="database" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="3px">No</th>
                                        <th>Nama</th>
                                        <th>Nidn</th>
                                        <th>Prodi</th>
                                        <th>Jabatan</th>
                                        <th>Fakultasn</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th width="145px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tbl_dosen as $a) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $a->nama_dosen; ?></td>
                                            <td><?php echo $a->nid; ?></td>
                                            <td><?php echo $a->prodi; ?></td>
                                            <td><?php echo $a->jabatan; ?></td>
                                            <td><?php echo $a->fakultas; ?></td>
                                            <td><?php echo $a->alamat_dosen; ?></td>
                                            <td><?php echo $a->no_hp; ?></td>
                                            <td align="center" width="145px">
                                                <a class="btn  btn-warning btn-xs" style="border-radius: 50px;"> <i class="fa fa-edit"></i> </a>
                                                <a href="<?php echo base_url('dashboard/delete_data_dosen/') . $a->id_dosen; ?>" class="btn  btn-danger btn-xs" style="border-radius: 50px;"> <i class="fa fa-trash"></i> </a>
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

                                    <?php $no = 0;
                                    foreach ($tbl_dosen as $a) : $no++; ?>
                                        <div class="modal fade" id="editdosen<?php echo $a->id_dosen; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Upload pembayaran</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 grid-margin">
                                                                <div class="card">
                                                                    <form action="<?php echo base_url('pembayaran/update_pembayaran'); ?>" method="post">
                                                                        <div class="card-body">
                                                                            <div class="form-group">
                                                                                <label for="bukti_pembayaran"><b> No pembayaran</b></label>
                                                                                <input type="hidden" value="<?php echo $a->id_dosen ?>" name="id_pembayaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                                                <input type="text" readonly value="<?php echo $a->nama ?>" name="no_pembayaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>status pembayaran</label>
                                                                                <select type="form-select" class="form-control" name="status_pembayaran" <?= set_select('approved', 'not approved'); ?>>
                                                                                    <option value="approved">Approved</option>
                                                                                    <option value="not approved">Not Approved</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Catatan</label>
                                                                                <textarea class="form-control" name="catatan" id="" placeholder="Tambahkan catatan.."></textarea>
                                                                            </div>
                                                                            <div align="right">
                                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                                    <input type="submit" style="border-radius: 50px;" value="Simpan" class="btn btn-success btn-sm"></input>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="modal fade" id="importdosen">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Import Data Dosen</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 grid-margin">
                                    <div class="card">
                                        <?= form_open_multipart('import/uploaddata/') ?>
                                        <div class="card-body">
                                            <p align="justify"><b style="color: orange;">Perhatian!</b> <br> Sebelum melakukan <i style="color: red;">import</i> data dosen silahkan download template yang telah disediakan, untuk menghindari terjadinya eror pada sistem. <a href="">download template</a> </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Import data dosen</label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" class="form-control form-control-sm" id="importexcel" name="importexcel" accept=".xlsx,.xls">
                                            </div>
                                        </div>
                                        <div align="right">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <input type="submit" style="border-radius: 50px;" value="Simpan" class="btn btn-success btn-sm"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>