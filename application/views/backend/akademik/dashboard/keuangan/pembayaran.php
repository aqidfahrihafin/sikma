<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;" class="btn btn-sm btn-danger m-b-10"><div class="text-gray-600 small ml-auto" id="clock2" ></div> </a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Home &amp; </small></h1>
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
			<div class="row">
				<div class="col-md-12">
                <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
                    <input type="hidden" name="result_type" id="result-type" value=""></div>
                    <input type="hidden" name="result_data" id="result-data" value=""></div>
					<div class="form-group">
								<label class="control-label">Nama Periode</label>
								<div>
                                <input type="text" class="form-control" id="nama_periode" name="nama_periode" required placeholder="2023/2024" value="<?php echo set_value('nama_periode'); ?>">
                                <?php echo form_error('nama_periode', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <div>
                                    <select name="status" class="select2 form-control" style="width:100%" required tabindex="-1" aria-hidden="true">
                                        <option value="aktif">Aktif</option>
                                        <option value="non aktif">Non Aktif</option>
                                    </select>
                                </div>
                            </div>
                    <button id="pay-button">Pay!</button>
                </form>
				</div>
			</div>

            
			
			
    </div>
</div>
