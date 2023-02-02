<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Mahasiswa</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">home</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <!-- <div class="col-md-12">
                <div class="alert alert  alert-dismissible" style="background-color: rgba(252, 22, 22, 0.712);color: white;" align="justify">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Selamat datang <b><?php echo $this->session->userdata('nama') ?></b> data anda belum lengkap, segera lengkapi data dan berkas persyaratan anda sebelum pendaftaran PKL ditutup.
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-widget" style="border-radius: 7px;">
                    <div class="box-header with-border">
                        <div class=" box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="timeline">
                            <?php $no = 1;
                            foreach ($tbl_pendaftaran as $mhs) { ?>
                                <?php if ($mhs->volume == "n") { ?>
                                    <li>
                                        <i class="fa fa-info bg-red"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Pendaftaran</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Hi! <b><?php echo $mhs->nama ?></b> anda <b style="color: red;">belum</b> melakukan proses pendaftaran, silahkan lakukan pendaftaran sekarang!.
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <?php if ($mhs->volume == "y") { ?>
                                    <li>
                                        <i class="fa fa-check bg-green"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Pendaftaran</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Selamat! <b><?php echo $mhs->nama ?></b> anda telah <b style="color: green;">selesai</b> melakukan proses pendaftaran, silahkan segera lakukan proses selanjutnya!.
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>

                            <?php } ?>

                            <?php $no = 1;
                            foreach ($pembayaran_mhs as $mhs) { ?>
                                <?php if ($mhs->status_pembayaran == "not approved") { ?>
                                    <li>
                                        <i class="fa fa-info bg-red"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Pembayaran</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Anda telah <b style="color: green;">selesai</b> melakukan proses pembayaran, status pembayaran anda saat ini
                                                <?php
                                                if ($mhs->status_pembayaran == "approved") {
                                                    echo "telah di <span style='border-radius: 50px;' class='label label-success'>Diterima</span>";
                                                } else {
                                                    echo "sekarang <span style='border-radius: 50px;' class='label label-danger'>Tidak Valid</span> cek status pembayaran anda secara berkala.";
                                                }
                                                ?> </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <?php if ($mhs->status_pembayaran == "approved") { ?>
                                    <li>
                                        <i class="fa fa-check bg-green"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Pembayaran</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Anda telah <b style="color: green;">selesai</b> melakukan proses pembayaran, status pembayaran anda saat ini
                                                <?php
                                                if ($mhs->status_pembayaran == "approved") {
                                                    echo "telah di <span style='border-radius: 50px;' class='label label-success'>Diterima</span>";
                                                } else {
                                                    echo "sekarang <span style='border-radius: 50px;' class='label label-danger'>Revisi</span> cek status pembayaran anda secara berkala.";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <?php if ($mhs->status_pembayaran == "pending") { ?>
                                    <li>
                                        <i class="fa fa-check bg-yellow"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Pembayaran</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Anda telah <b style="color: green;">selesai</b> melakukan proses pembayaran, status pembayaran anda saat ini
                                                <?php
                                                if ($mhs->status_pembayaran == "pending") {
                                                    echo "sedang <span style='border-radius: 50px;' class='label label-warning'>Menunggu..</span> cek status pembayaran anda secara berkala.";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            <?php } ?>

                            <?php $no = 1;
                            foreach ($persyaratan_mhs as $mhs) { ?>
                                <?php if ($mhs->status_persyaratan == "not approved") { ?>
                                    <li>
                                        <i class="fa fa-info bg-red"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Upload berkas</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Anda telah <b style="color: green;">selesai</b> melakukan proses upload berkas, status upload berkas anda
                                                <?php
                                                if ($mhs->status_persyaratan == "approved") {
                                                    echo "telah di <span style='border-radius: 50px;' class='label label-success'>Diterima</span>";
                                                } else {
                                                    echo "sekarang <span style='border-radius: 50px;' class='label label-danger'>Revisi</span> cek status berkas anda secara berkala.";
                                                }
                                                ?> </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <?php if ($mhs->status_persyaratan == "approved") { ?>
                                    <li>
                                        <i class="fa fa-check bg-green"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Upload berkas</a></h3>
                                            <div class="timeline-body" align="justify">
                                                Anda telah <b style="color: green;">selesai</b> melakukan proses upload berkas, status upload berkas anda
                                                <?php
                                                if ($mhs->status_persyaratan == "approved") {
                                                    echo "<span style='border-radius: 50px;' class='label label-success'>Diterima</span>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php if ($mhs->status_persyaratan == "pending") { ?>
                                <li>
                                    <i class="fa fa-check bg-yellow"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                        <h3 class="timeline-header"><a href="#">Persyaratan</a></h3>
                                        <div class="timeline-body" align="justify">
                                            Anda telah <b style="color: green;">selesai</b> melakukan upload berkas, status berkas anda saat ini
                                            <?php
                                            if ($mhs->status_persyaratan == "pending") {
                                                echo "sedang <span style='border-radius: 50px;' class='label label-warning'>Menunggu..</span> cek status berkas anda secara berkala.";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="box" style="border-radius: 7px;">
                    <div class="box-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <!-- <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> -->
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url('assets/dist/img/slider/s1.jpg'); ?>" alt="First slide">
                                    <!-- <div class="carousel-caption">
                                        First Slide
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url('assets/dist/img/slider/s2.jpg'); ?>" alt="Second slide">
                                    <!-- <div class="carousel-caption">
                                        Second Slide
                                    </div> -->
                                </div>
                                <!-- <div class="item">
                                    <img src="<?php echo base_url('assets/dist/img/logo.png'); ?>" alt="Third slide">
                                    <div class="carousel-caption">
                                        Third Slide
                                    </div>
                                </div> -->
                            </div>
                            <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>