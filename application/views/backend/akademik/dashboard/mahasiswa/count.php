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
									<h4 class="panel-title"><i class="ion-android-checkbox fa-lg text-warning"></i>
										&nbsp;Pending Approval</h4>
								</div>
								<div class="panel-body">
									<table id="data-table"
										class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed"
										width="100%" role="grid" aria-describedby="data-table_info"
										style="width: 100%;">
										<thead>
											<tr role="row">
												<th width="3%">No</th>
												<th width="20%">NIM</th>
												<th width="20%">Nama</th>
												<th width="20%">Prodi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
                                           foreach ($tbl_instansi as $a) { ?>
											<tr>
												<td>
													<?php echo $no++; ?>
												</td>
												<td>IST994830</td>
												<td>Aqid Fahri Hafin</td>
												<td>Teknologi informasi</td>
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