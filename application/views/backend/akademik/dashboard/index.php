<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;" class="btn btn-sm btn-danger m-b-10"><div class="text-gray-600 small ml-auto" id="clock2" ></div> </a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Home &amp; <?php echo $title; ?></small></h1>
			<!-- end page-header -->
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-info fade in m-b-15" align="justify">
						<strong>
						 Welcome To SIKMA Version 2.0
						</strong> Aplikasi Sistem Informasi Aktifitas Mahasiswa. Dikembangkan oleh <a href="https://istannuqayah.ac.id/" target="_blank">IT TEAM </a> | <strong>Ist Anuuqayah</strong>. 
					</div>
				</div>
			</div>

			<?php if ($this->session->userdata('level') == "Akademik") {   ?>
			<div class="row">
			<!-- Mhs pending dan count data -->
			<?php $this->load->view('backend/akademik/dashboard/akademik/count'); ?>
            <!-- data statistik untuk akademik -->
			<?php $this->load->view('backend/akademik/dashboard/akademik/statistik'); ?>
			</div>
			<!-- view pdh -->
			<?php $this->load->view('backend/akademik/dashboard/pdf-view'); ?>
			<?php  }  ?>

			<?php if ($this->session->userdata('level') == "Keuangan") {   ?>
			<div class="row">
			<!-- Mhs pending dan count data -->
			<?php $this->load->view('backend/akademik/dashboard/keuangan/count'); ?>
            <!-- data statistik untuk akademik -->
			<?php $this->load->view('backend/akademik/dashboard/keuangan/statistik'); ?>
			</div>
			<!-- view pdh -->
			<?php $this->load->view('backend/akademik/dashboard/pdf-view'); ?>
			<?php  }  ?>

			
			
			
    </div>
</div>
