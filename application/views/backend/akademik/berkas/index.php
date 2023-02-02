
		<!-- end #sidebar -->
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;" class="btn btn-sm btn-danger m-b-10"><i class="ion-android-calendar fa-lg"></i> &nbsp; 06 Jan 2023</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Derkas <small>View &amp; <?php echo $title; ?></small></h1>
			<!-- end page-header -->
			<!-- <div class="row">
				<div class="col-md-12">
					<div class="alert alert-info fade in m-b-15" align="justify">
						<strong>
						<i class="fa-lg fa fa-check text-success"></i> &nbsp;Welcome To SIKMA Version 2.0
						</strong> Aplikasi Sistem Informasi Aktifitas Mahasiswa. Dikembangkan oleh <a href="https://istannuqayah.ac.id/" target="_blank">IT TEAM </a> | Ist Anuuqayah |
						<i class="fa-lg ion-ios-telephone"></i> +62821-3780-1536<span class="close"data-dismiss="alert">&times;</span>
					</div>
				</div>
			</div> -->
			<div class="row">
				<div class="col-md-9">
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
									<h4 class="panel-title"><i class="ion-ios-paper-outline fa-lg text-warning"></i>
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
                                                <th width="15%">Nama</th>
												<th width="8%">KTM</th>
												<th width="8%">KHS</th>
												<th width="8%">Proposal</th>
												<th width="8%">Status</th>
												<th width="35%">Catatan</th>
												<th width="8%">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
                                           foreach ($tbl_instansi as $a) { ?>
											<tr>
												<td>
													<?php echo $no++; ?>
												</td>
                                                <td>Aqid Fahri Hafin</td>

												<?php if ($a->nama_instansi == "") { ?>
												<td  align="center"> - </a></td>
												<?php } elseif ($a->nama_instansi == $a->nama_instansi) {
												echo "
													<td align='center'> 
													<a type='button' class=' text-danger'data-toggle='modal' data-target='#pdfModal' title='berkas ktm' style='cursor:pointer' title='view'><i class='fa fa-file-pdf-o fa-lg text-warning'></i>  
													</td>";                         
											     } ?>

												<?php if ($a->alamat == "") { ?>
												<td align="center"> - </td>
												<?php } elseif ($a->alamat == $a->alamat) {
												echo "	
                                                    <td align='center'> 
                                                    <a type='button' class=' text-danger'data-toggle='modal' data-target='#pdfModal' title='berkas ktm' style='cursor:pointer' title='view'><i class='fa fa-file-pdf-o fa-lg text-warning'></i>  
                                                    </td>";                         
											    } ?>

												<?php if ($a->kecamatan == "") { ?>
												<td align="center"> - </td>
												<?php } elseif ($a->kecamatan == $a->kecamatan) {
												echo "	
                                                    <td align='center'> 
                                                    <a type='button' class=' text-danger'data-toggle='modal' data-target='#pdfModal' title='berkas ktm' style='cursor:pointer' title='view'><i class='fa fa-file-pdf-o fa-lg text-warning'></i>  
                                                    </td>";                      
											   } ?>
												<td style="display: none;" align="center">	<span >Not Approved</span> </td>
												<td style="display: none;" align="justify">Upload ulang KHS </td>
												<td class="text-center" style="display: none;">
												<a  data-toggle="modal" data-target="#Edituser" title="edit" type="button" class="btn btn-info btn-icon btn-sm"><i class="fa fa-pencil fa-lg"></i></a>
												<a type="button" class="btn btn-danger btn-icon btn-sm" href="#;" title="processed"><i class="fa fa-trash-o fa-lg"></i></a>
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
							<h4 class="panel-title"><i class="ion-stats-bars fa-lg text-warning"></i>&nbsp;Statistik Approval</h4>
						</div>
						<div class="panel-body">
							<div id="container-pie-berkas" class="height-sm"></div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="modal fade" id="pdfModal" tabindex="1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
				<div class="modal-header" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<div  class='pull-left' >
								<h5>Aqid Fahri Hafin</h5>				
						    </div>
							<div  class='pull-right' >
								<a type="button" class="btn btn-default active" data-dismiss="modal"	aria-hidden="true"><i class="ion-arrow-return-left"></i> &nbsp;Cancel</a>					
								<button type="submit" name="save" value="save" class="btn btn-danger"><i class="fa fa-floppy-o"></i> &nbsp;Save</button>
						   </div>
						</div>
						<div class="modal-body">
							<iframe src="<?php echo site_url() . '/files/persyaratan/Manajemen_Lembaga_Pendidikan_Islam.pdf' ?>" width="100%" height="530" frameborder="0"></iframe>
						</div>
					</div>
				</div>
			</div>
    </div>
</div>
