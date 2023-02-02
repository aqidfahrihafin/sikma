
		<!-- end #sidebar -->
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;" class="btn btn-sm btn-danger m-b-10"><i class="ion-android-calendar fa-lg"></i> &nbsp; 06 Jan 2023</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Home &amp; <?php echo $title; ?></small></h1>
			<!-- end page-header -->
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-info fade in m-b-15" align="justify">
						<strong>
						<i class="fa-lg fa fa-check text-success"></i> &nbsp;Welcome To SIKMA Version 2.0
						</strong> Aplikasi Sistem Informasi Aktifitas Mahasiswa. Dikembangkan oleh <a href="https://istannuqayah.ac.id/" target="_blank">IT TEAM </a> | Ist Anuuqayah |
						<i class="fa-lg ion-ios-telephone"></i> +6287879501315<span class="close"data-dismiss="alert">&times;</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-stats bg-white">
                            <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-blue"><i class="ion-ios-personadd-outline"></i></div>
                            <div class="stats-info">
                                <h4 style="color : black;">MAHASISWA</h4>
                                <p><?php echo $diterima; ?></p>
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;"><b>View Detail</b>  <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-stats bg-white">
                            <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-orange"><i class="ion-ios-color-filter-outline"></i></div>
                            <div class="stats-info">
                                <h4 style="color : black;">BERKAS</h4>
								<p><?php echo $ditolak; ?></p>
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;"><b>View Detail</b>  <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-stats bg-white">
                            <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-green"><i class="ion-university"></i></div>
                            <div class="stats-info">
                                <h4 style="color : black;">USER</h4>
                                <p><?php echo $user; ?></p>
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;"><b>View Detail</b>  <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
					</div>
					<div class="row">
						<!-- begin col-12 -->
						<div class="col-md-12">
							<div class="panel panel-default" data-sortable-id="index-1">
								<div class="panel-heading">
									<div class="panel-heading-btn">
										<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
											data-click="panel-expand"><i class="fa fa-expand"></i></a>
										<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
											data-click="panel-reload"><i class="fa fa-repeat"></i></a>
										<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
											data-click="panel-collapse"><i class="fa fa-minus"></i></a>
										<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
											data-click="panel-remove"><i class="fa fa-times"></i></a>
									</div>
									<h4 class="panel-title"><i class="ion-university fa-lg text-warning"></i>
										&nbsp;Berkas persyaratan</h4>
								</div>
								<div class="panel-body">
									<table id="data-table"
										class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed"
										width="100%" role="grid" aria-describedby="data-table_info"
										style="width: 100%;">
										<thead>
											<tr role="row">
												<th width="3%">No</th>
												<th width="20%">KTM</th>
												<th width="20%">KHS</th>
												<th width="20%">Proposal</th>
												<th>Status</th>
												<th>Catatan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
                                           foreach ($tbl_instansi as $a) { ?>
											<tr>
												<td>
													<?php echo $no++; ?>
												</td>

												<?php if ($a->nama_instansi == "") { ?>
												<td> - <a type="button" class="pull-right text-danger"	data-toggle="modal" data-target="#pdfModal" title="upload berkas ktm" style="cursor:pointer">Upload</a></td>
												<?php } elseif ($a->nama_instansi == $a->nama_instansi) {
												echo "
													<td> 
													<a type='button' class='pull-left text-danger'data-toggle='modal' data-target='#pdfModal' title='upload berkas ktm' style='cursor:pointer' title='view'><i class='fa fa-file-pdf-o fa-lg text-warning'></i>  
													</a> <a type='button' class='pull-right' data-toggle='modal' data-target='#Ktm13' title='upload berkas ktm' style='cursor:pointer'>Update</a> 
													</td>";                         
											     } ?>

												<?php if ($a->alamat == "") { ?>
												<td> - <a type="button" class="pull-right text-danger" data-toggle="modal" data-target="#Ktm13" title="upload berkas ktm" style="cursor:pointer">Upload</a></td>
												<?php } elseif ($a->alamat == $a->alamat) {
												echo "	
													<td> 
													<a href='shdakjsdjdas' target='_blank' title='view'><i class='fa fa-file-pdf-o fa-lg text-warning'></i></a> 	
													<a type='button' class='pull-right' data-toggle='modal' data-target='#Ktm13' title='upload berkas ktm' style='cursor:pointer'>Update</a> 
													</td>";                         
											    } ?>

												<?php if ($a->kecamatan == "") { ?>
												<td> - <a type="button" class="pull-right text-danger" data-toggle="modal" data-target="#Ktm13" title="upload berkas ktm" style="cursor:pointer">Upload</a></td>
												<?php } elseif ($a->kecamatan == $a->kecamatan) {
												echo "	
													<td> 
													<a href='shdakjsdjdas' target='_blank' title='view'><i class='fa fa-file-pdf-o fa-lg text-warning'></i></a> 	
													<a type='button' class='pull-right' data-toggle='modal' data-target='#Ktm13' title='upload berkas ktm' style='cursor:pointer'>Update</a> 
													</td>";                         
											   } ?>
												<td style="display: none;">Approved </td>
												<td style="display: none;" align="justify">Segera lengkapi berkas</td>
												<td class="text-center" style="display: none;">
													<a type="button" class="btn btn-default btn-icon btn-sm"href="javascript:;" title="processed"><i class="fa fa-trash-o fa-lg"></i></a>
												</td>
											</tr>

											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end col-12 -->
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
									data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
									data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
									data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
									data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title"><i class="ion-stats-bars fa-lg text-warning"></i>
								&nbsp;Statistik Approval</h4>
						</div>
						<div class="panel-body">
							<div id="container-pie-a" class="height-sm"></div>
						</div>
						<?php $this->load->view('backend/akademik/dashboard/statistik'); ?>
					</div>
				</div>
				
			</div>

			<?php $this->load->view('backend/akademik/dashboard/pdf-view'); ?>
    </div>
</div>
