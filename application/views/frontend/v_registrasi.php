<div class="content-wrapper">
    <section class="content-header">

        <h1>
            Registrasi
            <small>Pendaftaran PKL dan Skripsi</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Registrasi</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-widget" style="border-radius: 15px;">
                    <div class="box-header with-border">
                        <span>
                            Form *<b>Registrasi</b>
                        </span>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="<?php echo base_url('registrasi/aksi'); ?>" method="post">
                            <div class="box-body">
                                <h4 align="justify"><b style="color: rgba(22, 198, 252);">REGISTRASI</b><br> <small>Masukkan data login Anda dan mulailah pendaftaran PKL. </small> </h4>
                                <br>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="hidden" class="form-control" id="id_pendaftaran" placeholder="Masukkan nim anda...">
                                    <input type="text" value="<?= set_value('nim'); ?>" class="form-control" name="nim" placeholder="Masukkan nim" />
                                </div>
                                <small class="text-danger"> <?= form_error('nim'); ?></small>
                                <div class="form-group">
                                    <label>Priode</label>
                                    <select class="form-control form-control-sm" id="priode" name="priode">
                                        <?php foreach ($tbl_priode as $p) { ?>
                                            <option <?php if (set_value('priode') == $p->id_priode) {
                                                        echo "selected='selected'";
                                                    } ?> value="<?php echo $p->id_priode ?>"><?php echo $p->nama_priode; ?></option>
                                        <?php } ?>
                                    </select>
                                    <small class="text-danger"> <?= form_error('priode'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Program studi</label>
                                    <select class="form-control form-control-sm" id="prodi" name="prodi">
                                        <option>-Pilih Prodi-</option>
                                        <?php foreach ($tbl_prodi as $p) { ?>
                                            <option <?php if (set_value('prodi') == $p->id_prodi) {
                                                        echo "selected='selected'";
                                                    } ?> value="<?php echo $p->nama_prodi ?>"><?php echo $p->nama_prodi; ?></option>
                                        <?php } ?>
                                    </select>
                                    <small class="text-danger"> <?= form_error('prodi'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" value="<?= set_value('nama'); ?>" class="form-control" name="nama" placeholder="Masukkan nama lengkap" />
                                </div>
                                <small class="text-danger"> <?= form_error('nama'); ?></small>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select type="form-select" class="form-control" name="jenis_kelamin" <?= set_select('Laki-laki', 'Perempuan'); ?>>
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <?= form_error('jenis_kelamin', '<span class="text-danger small">', '</span>'); ?>

                                <div class="form-group">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <input type="date" value="<?= set_value('tgl_lahir'); ?>" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" />
                                </div>
                                <small class="text-danger"> <?= form_error('tgl_lahir'); ?></small>

                                <div class="form-group">
                                    <label for="password1">Password </label>
                                    <input type="password" class="form-control" name="password1" placeholder="Masukkan password" />
                                </div>
                                <small class="text-danger"> <?= form_error('password1'); ?></small>

                                <div class="form-group">
                                    <label for="password">Ulangi Password</label>
                                    <input type="password" class="form-control" name="password2" placeholder="Masukkan ulang password" />
                                </div>
                                <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>

                            </div>
                            <div class="box-footer" align="center">
                                <button style="border-radius: 50px;" type="submit" class="btn btn-block btn-info">Register</button>
                            </div>
                        </form>
                        <!-- <div class="alert alert-warning alert-dismissible" align="justify">
                            <h4><i class="icon fa fa-ban"></i> Maaf !!!</h4>
                            Pendaftaran Praktik Kerja Lapangan (PKL) Institut Sains dan Teknologi Annuqayah telah <b style="border-radius: 50px;" class="label label-danger">ditutup</b> proses registrasi tidak dapat dilakukan .
                        </div> -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-widget" style="border-radius: 15px;">
                    <div class="box-header with-border">
                        <div>
                            <span>
                                Alur dan persyaratan pendaftar PKL <span style="color: red;">*<b>IST Annuqayah</b></span>
                            </span>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover ">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama </th>
                                    <th>Prodi</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>Aqid Fahri Hafin</td>
                                    <td>Teknologi Informasi</td>
                                    <td align="center"><span style="border-radius: 50px;" class="label label-danger">Not Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>Teknologi Informasi</td>
                                    <td align="center"><span style="border-radius: 50px;" class="label label-danger">Not Approved</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->