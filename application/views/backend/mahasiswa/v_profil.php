<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Profil</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">home</li>
        </ol>
    </section>

    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-3">
                <div class="box box-widget" style="border-radius: 15px;">
                    <div class="box-body">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets'); ?>/dist/img/default.png" alt="User profile picture">
                            <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama') ?></h3>
                            <p class="text-muted text-center"><?php echo $this->session->userdata('prodi') ?></p>
                            <div class="box-tools" align="center">
                                <?php $no = 1;
                                foreach ($tbl_pendaftaran as $a) {  ?>
                                    <a data-toggle="modal" data-target="#viewprofil<?php echo $a->id_pendaftaran; ?>" class="btn  btn-primary btn-xs" style="border-radius: 50px;"> <i class="fa fa-eye"></i> View</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Falidasi Data</a></li>
                        <li><a href="#activity" data-toggle="tab">Profil</a></li>
                        <li><a href="#settings" data-toggle="tab">Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class=" active tab-pane" id="timeline">
                            <?php $no = 1;
                            foreach ($tbl_pendaftaran as $a) {  ?>
                                <?php if ($a->volume == "n") { ?>
                                    <form action="<?php echo base_url('mahasiswa/update_profil'); ?>" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="<?php echo $a->id_pendaftaran; ?>">
                                                <input type="hidden" class="form-control" value="<?php echo $a->nim; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="priode">Program Studi</label>
                                                <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $a->prodi; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="priode">Priode</label>
                                                <?php foreach ($tbl_priode as $p) { ?>
                                                    <input type="text" class="form-control" id="priode" name="priode" value="<?php echo $p->nama_priode; ?>" disabled>
                                                <?php } ?>
                                                <small class="text-danger"> <?= form_error('priode'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label>Domisili</label>
                                                <select class="form-control form-control-sm" id="domisili" name="domisili">
                                                    <?php foreach ($tbl_domisili as $p) { ?>
                                                        <option <?php if (set_value('domisili') == $p->id_domisili) {
                                                                    echo "selected='selected'";
                                                                } ?> value="<?php echo $p->id_domisili ?>">
                                                            <?php echo $p->nama_domisili; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <small class="text-danger"> <?= form_error('domisili'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label>Ukuran PDH</label>
                                                <select class="form-control form-control-sm" id="ukuran_pdh" name="ukuran_pdh">
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                </select>
                                                <small class="text-danger"> <?= form_error('ukuran_pdh'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Usulan Tempat PKL</label>
                                                <label class="pull-right">
                                                    <small class="pull-right">
                                                        <a data-toggle="modal" data-target="#modal-default" class="btn  btn-primary btn-xs" style="border-radius: 50%; "> <i class="fa fa-plus"></i> </a>
                                                    </small>
                                                </label>
                                                <select class="form-control select12" style="width: 100%; border-radius:0px; " id="lokasi_pkl_satu" name="lokasi_pkl_satu">
                                                    <option value="">Pilih Instansi</option>
                                                    <?php foreach ($tbl_instansi as  $key =>  $value) { ?>
                                                        <option <?php if (set_value('lokasi_pkl_satu') == $value->id_instansi) {
                                                                    echo "selected='selected'";
                                                                } ?> value="<?php echo $value->id_instansi ?>">
                                                            <?php echo $value->nama_instansi; ?> | <?php echo $value->kecamatan; ?> | <?php echo $value->kabupaten; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <small class="text-danger"> <?= form_error('lokasi_instansi_satu'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Usulan DPL</label>
                                                <select class="form-control select12" style="width: 100%; border-radius:0px; " id="dpl" name="dpl">
                                                    <option value="">Pilih Dosen</option>
                                                    <?php foreach ($tbl_dosen as  $key =>  $value) { ?>
                                                        <?php if ($a->jenis_kelamin ==  'Laki-laki') { ?>
                                                            <?php if ($value->jk_dosen ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                                <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                    <option <?php if (set_value('dpl') == $value->id_dosen) {
                                                                                echo "selected='selected'";
                                                                            } ?> value="<?php echo $value->id_dosen ?>">
                                                                        <?php echo $value->nid; ?> | <?php echo $value->nama_dosen; ?> | <?php echo $value->prodi; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                        <?php if ($a->jenis_kelamin ==  'Perempuan') { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('dpl') == $value->id_dosen) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_dosen ?>">
                                                                    <?php echo $value->nid; ?> | <?php echo $value->nama_dosen; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                <small class="text-danger"> <?= form_error('lokasi_instansi_satu'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_hp">No Hp</label>
                                                <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $a->no_hp; ?>" placeholder="contoh : 087879501315">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $a->email; ?>" placeholder="contoh : aqitfahrihafin@gmail.com">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <small><i>IST Annuqayah</i></small>
                                            <div class="pull-right">
                                                <a data-toggle="modal" data-target="#simpan" style="border-radius: 50px;" class="btn btn-primary ">Simpan</a>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="simpan">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" style="color: red;">Info!</h4>
                                                    </div>
                                                    <div class="body">

                                                        <div class="modal-body" align="justify">
                                                            <div class="alert alert  alert-dismissible" style="background-color: rgba(53, 148, 226, 0.822); color:white;" align="justify">
                                                                <small>
                                                                    Pasatikan data pendaftaran anda sudah di isi dengan benar!. form ini hanya dapat di isi satu kali pengisian saja, Anda akan secara otomatis di pindahkan ke halaman pembayaran.
                                                                </small>
                                                            </div>
                                                            <label>
                                                                <input type="checkbox" required> <small>Data yang saya masukkan sudah sesuai dan benar.</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">


                                                        <div class="pull-right">
                                                            <button type="submit" style="border-radius: 50px;" class="btn btn-primary ">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                <?php } ?>
                                <?php if ($a->volume == "y") { ?>
                                    <div class="alert alert  alert-dismissible" style="background-color: rgba(53, 148, 226, 0.822); color:white;" align="justify">
                                        <small>
                                            Anda sudah selesai melakukan validasi pendaftaran, jika ada kesalahan data silahkan hubungi panitian Praktik Kerja Lapangan.
                                        </small>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="activity">
                            <?php $no = 1;
                            foreach ($tbl_pendaftaran as $a) {  ?>
                                <form action="<?php echo base_url('mahasiswa/update_profil'); ?>" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="<?php echo $a->id_pendaftaran; ?>">
                                            <input type="hidden" class="form-control" value="<?php echo $a->nim; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="prodi" name="prodi" value="<?php echo $a->prodi; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $a->nama; ?>" placeholder="Masukkan nama lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $a->jenis_kelamin; ?>" placeholder="Masukkan nama lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $a->tgl_lahir; ?>" placeholder="Masukkan tanggal lahir">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <small><i>Institut Sains dan Teknologi Annuqayah</i></small>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="settings">
                            dalam perbaikan :(
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><i class="fas fa-school"></i>&nbsp; Add Instansi</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 grid-margin">
                                    <div class="card">
                                        <form action="<?php echo base_url('mahasiswa/tambah_instansi'); ?>" method="post">
                                            <div class="card-body">
                                                <div class="alert alert  alert-dismissible" style='background-color: rgba(53, 148, 226, 0.822); color:white; '>
                                                    <p>Tambah data instansi jika tidak terdaftar pada pilihan.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="varchar">Nama Instansi<span style="color:red;">*</span></label>
                                                    <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="Nama instansi..." required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="varchar">Alamat <span style="color:red;">*</span></label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat instansi..." required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="varchar">Kecamatan <span style="color:red;">*</span></label>
                                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan..." required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="varchar">Kabupaten<span style="color:red;">*</span></label>
                                                    <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten..." required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="varchar">Kontak <span style="color:red;">*</span></label>
                                                    <input type="text" class="form-control" name="kontak" id="kontak" placeholder="kontak..." required />
                                                </div>
                                            </div>
                                            <div class="modal-footer" align="right">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <input type="submit" style="border-radius: 50px;" value="Simpan" class="btn btn-success btn-sm"></input>
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
        </div>
        <div class="row">
            <?php $no = 0;
            foreach ($pendaftaran as $a) : $no++; ?>
                <div class="modal fade" id="viewprofil<?php echo $a->id_pendaftaran; ?>">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-school"></i>&nbsp; Add Instansi</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12 grid-margin">
                                        <div class="card">
                                            <form action="<?php echo base_url('mahasiswa/tambah_instansi'); ?>" method="post">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="varchar">Nama Instansi<span style="color:red;">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $a->nama ?>" name="nama_instansi" id="nama_instansi" placeholder="Nama instansi..." required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varchar">Alamat <span style="color:red;">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $a->nama_instansi ?>" name="alamat" id="alamat" placeholder="Alamat instansi..." required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varchar">Kecamatan <span style="color:red;">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $a->prodi ?>" name="kecamatan" id="kecamatan" placeholder="Kecamatan..." required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varchar">Kabupaten<span style="color:red;">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $a->nama_dosen ?>" name="kabupaten" id="kabupaten" placeholder="Kabupaten..." required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varchar">Kontak <span style="color:red;">*</span></label>
                                                        <input type="text" class="form-control" name="kontak" id="kontak" placeholder="kontak..." required />
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
        </div>
    </section>
</div>