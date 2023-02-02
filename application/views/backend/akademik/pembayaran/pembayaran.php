<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Data Pembayaran</small>
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
                                        <th width="3px">ID</th>
                                        <th>NIM </th>
                                        <th>No pembayaran</th>
                                        <th>Bukti pembayaran</th>
                                        <th>Tanggal pembayaran</th>
                                        <th>Status</th>
                                        <th width="145px">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tbl_pendaftaran as $a) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $a->nim; ?></td>
                                            <td><?php echo $a->no_pembayaran; ?></td>
                                            <td><a href="" data-toggle="modal" data-target="#viewpembayaran<?php echo $a->id_pembayaran ?>">Cek bukti pembayaran </a></td>
                                            <td><?php echo date('d F Y H:i:s', $a->date_created); ?></td>
                                            <td align="center">
                                                <?php
                                                if ($a->status_pembayaran == "approved") {
                                                    echo "  <span style='border-radius: 50px;' class='label label-success'>Approved</span>";
                                                } else {
                                                    echo "<span style='border-radius: 50px;' class='label label-danger'>Not Approved</span>";
                                                }
                                                ?>
                                            </td>
                                            <td align="center" width="145px">
                                                <a data-toggle="modal" data-target="#editpembayaran<?php echo $a->id_pembayaran; ?>" class="btn  btn-success btn-xs" style="border-radius: 50px;"> <i class="fa fa-check"></i> </a>
                                                <a class="btn  btn-primary btn-xs" style="border-radius: 50px;"> <i class="fa fa-print"></i> </a>
                                                <a href="<?php echo base_url('pembayaran/delete_pembayaran/') . $a->id_pembayaran; ?>" class="btn  btn-danger btn-xs" style="border-radius: 50px;"> <i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <?php $no = 0;
                                        foreach ($tbl_pendaftaran as $a) : $no++; ?>
                                            <div class="modal fade" id="viewpembayaran<?php echo $a->id_pembayaran; ?>">
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
                                        <?php endforeach ?>

                                    <?php } ?>
                                    <?php $no = 0;
                                    foreach ($tbl_pembayaran as $a) : $no++; ?>
                                        <div class="modal fade" id="editpembayaran<?php echo $a->id_pembayaran; ?>">
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
                                                                                <input type="hidden" value="<?php echo $a->id_pembayaran ?>" name="id_pembayaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
                                                                                <input type="text" readonly value="<?php echo $a->no_pembayaran ?>" name="no_pembayaran" class="form-control   form-control-sm" id="exampleInputUsername1" placeholder="Masukkan Kategori">
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

    </section>
</div>