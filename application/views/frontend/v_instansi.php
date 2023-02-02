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
            <div class="col-lg-12">
                <div class="box" style="border-radius: 7px;">
                    <div class="box-body table-responsive">
                        <table id="database" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="3px">No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Kontak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($tbl_instansi as $a) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo ucfirst($a->nama_instansi); ?></td>
                                        <td><?php echo $a->alamat; ?></td>
                                        <td><?php echo $a->kecamatan; ?></td>
                                        <td><?php echo $a->kabupaten; ?></td>
                                        <td><?php echo $a->kontak; ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>