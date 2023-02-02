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
                                <form action="<?php echo base_url('mahasiswa/cek_formulir'); ?>" method="post">
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
                                            <label for="">Nama mahasiswa satu</label>
                                            <select class="form-control select12" style="width: 100%; border-radius:0px; " id="mhs_satu" name="mhs_satu">
                                                <option value="">Pilih Mahasiswa</option>
                                                <?php foreach ($kelompok_mhs as  $key =>  $value) { ?>
                                                    <?php if ($a->jenis_kelamin ==  'Laki-laki') { ?>
                                                        <?php if ($value->jenis_kelamin ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('mhs_satu') == $value->id_pendaftaran) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_pendaftaran ?>">
                                                                    <?php echo $value->nim; ?> | <?php echo $value->nama; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php if ($a->jenis_kelamin ==  'Perempuan') { ?>
                                                        <?php if ($value->jenis_kelamin ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('mhs_satu') == $value->id_pendaftaran) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_pendaftaran ?>">
                                                                    <?php echo $value->nim; ?> | <?php echo $value->nama; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                            <small class="text-danger"> <?= form_error('mhs_satu'); ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama mahasiswa dua</label>
                                            <select class="form-control select12" style="width: 100%; border-radius:0px; " id="mhs_dua" name="mhs_dua">
                                                <option value="">Pilih Mahasiswa</option>
                                                <?php foreach ($kelompok_mhs as  $key =>  $value) { ?>
                                                    <?php if ($a->jenis_kelamin ==  'Laki-laki') { ?>
                                                        <?php if ($value->jenis_kelamin ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('mhs_dua') == $value->id_pendaftaran) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_pendaftaran ?>">
                                                                    <?php echo $value->nim; ?> | <?php echo $value->nama; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php if ($a->jenis_kelamin ==  'Perempuan') { ?>
                                                        <?php if ($value->jenis_kelamin ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('mhs_dua') == $value->id_pendaftaran) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_pendaftaran ?>">
                                                                    <?php echo $value->nim; ?> | <?php echo $value->nama; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                            <small class="text-danger"> <?= form_error('mhs_dua'); ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama mahasiswa ketiga</label>
                                            <select class="form-control select12" style="width: 100%; border-radius:0px; " id="mhs_tiga" name="mhs_tiga">
                                                <option value="">Pilih Mahasiswa</option>
                                                <?php foreach ($kelompok_mhs as  $key =>  $value) { ?>
                                                    <?php if ($a->jenis_kelamin ==  'Laki-laki') { ?>
                                                        <?php if ($value->jenis_kelamin ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('mhs_tiga') == $value->id_pendaftaran) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_pendaftaran ?>">
                                                                    <?php echo $value->nim; ?> | <?php echo $value->nama; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php if ($a->jenis_kelamin ==  'Perempuan') { ?>
                                                        <?php if ($value->jenis_kelamin ==  $this->session->userdata('jenis_kelamin')) { ?>
                                                            <?php if ($value->prodi ==  $this->session->userdata('prodi')) { ?>
                                                                <option <?php if (set_value('mhs_tiga') == $value->id_pendaftaran) {
                                                                            echo "selected='selected'";
                                                                        } ?> value="<?php echo $value->id_pendaftaran ?>">
                                                                    <?php echo $value->nim; ?> | <?php echo $value->nama; ?> | <?php echo $value->prodi; ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                            <small class="text-danger"> <?= form_error('mhs_tiga'); ?></small>
                                        </div>

                                    </div>
                                    <div class="box-footer">
                                        <small><i>IST Annuqayah</i></small>
                                        <div class="pull-right">
                                            <button type="submit" style="border-radius: 50px;" class="btn btn-primary ">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>


                        <div class="tab-pane" id="activity">
                            <form action="<?php echo base_url('mahasiswa/cek_formulir'); ?>" method="post">
                                <div class="box-body">

                                    <table>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Nama</td>
                                            <td>Nama</td>
                                        </tr>
                                        <?php $no = 1;
                                        foreach ($pendaftaran as $a) {  ?>
                                            <tr>
                                                <td><?php echo $a->id_pendaftaran; ?></td>
                                                <td><?php echo $a->nim; ?></td>
                                                <td><?php echo $a->nama; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $a->id_pendaftaran; ?></td>
                                                <td><?php echo $a->nim; ?></td>
                                                <td><?php echo $a->nama; ?></td>
                                            </tr>

                                        <?php } ?>
                                    </table>



                                </div>
                                <div class="box-footer">
                                    <small><i>IST Annuqayah</i></small>
                                    <div class="pull-right">
                                        <button type="submit" style="border-radius: 50px;" class="btn btn-primary ">Simpan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>