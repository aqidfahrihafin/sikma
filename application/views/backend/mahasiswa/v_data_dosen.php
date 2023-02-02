<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Data dosen</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">home</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box" style="border-radius: 7px;">
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
                                    <th width="145px">No Hp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($tbl_dosen as $a) { ?>
                                    <?php if ($a->prodi ==  $this->session->userdata('prodi')) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo ucfirst($a->nama_dosen); ?></td>
                                            <td><?php echo $a->nid; ?></td>
                                            <td><?php echo $a->prodi; ?></td>
                                            <td><?php echo $a->jabatan; ?></td>
                                            <td><?php echo $a->fakultas; ?></td>
                                            <td><?php echo $a->alamat_dosen; ?></td>
                                            <td><?php echo $a->no_hp; ?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>