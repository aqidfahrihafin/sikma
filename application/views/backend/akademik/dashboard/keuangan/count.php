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

					<?php $this->load->view('backend/akademik/dashboard/keuangan/mhs_pending'); ?>

				</div>