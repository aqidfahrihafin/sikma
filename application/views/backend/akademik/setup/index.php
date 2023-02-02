<div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li><a class="btn btn-sm btn-danger m-b-10" data-toggle="modal" data-target="#AddPriode"><i class="fa fa-gear"></i> &nbsp;Setup Institut</a></li>
	</ol>
	<h1 class="page-header">Management Setup <small><?php echo $title; ?>&nbsp;</small></h1>
	<div class="row">
	<div class="col-sm-12">
		<div class="tab-content">
			<!-- begin table -->
			<div class="table-responsive">
				<table class="table table-profile">
					<thead>
						<tr>
							<th>
								<h5><span class="label label-inverse pull-right"> # Institut </span></h5>
							</th>
							<th>
							<h5><span class="label label-warning pull-left"> Institut Sains dan Teknologi Annuqayah </span></h5>
								
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="highlight">
							<td class="field"  width="2%">Kabupaten / Kota</td>
							<td>Kabupaten Sumenep</td>
						</tr>
						<tr class="divider">
							<td colspan="2"></td>
						</tr>
						<tr>
							<td class="field"  width="2%">Alamat</td>
							<td><i class="fa fa-map-marker fa-lg m-r-5"></i> Guluk-guluk</td>
						</tr>
						<tr>
							<td class="field"  width="2%">No. Telp</td>
							<td>082137801536</td>
						</tr>
						<tr>
							<td class="field"  width="2%">Website</td>
							<td>www.af-foundation.com</td>
						</tr>
						<tr>
							<td class="field"  width="2%">Email</td>
							<td>aqitfahrihafin@gmail.com</td>
						</tr>
						<tr>
							<td colspan="2"  width="2%">
								<hr>
							</td>
						</tr>
						<tr>
							<td class="field"  width="2%">Logo</td>
							<td><img src="<?php echo base_url('assetss/')?>img/logokecil.png" width="100" height="100" alt=""> </td>
						</tr>
						<tr>
							<td class="field"  width="2%"></td>
							<td>
                                 <a data-toggle="modal" data-target="#Gantilogo1" title="ganti logo" class="btn btn-sm btn-info m-b-10"><i class="fa fa-pencil"></i>&nbsp;Ganti Logo</a>
							</td>
						</tr>
					</tbody>
				</table>
				
                <!-- edit logo -->
                <?php $this->load->view('backend/akademik/setup/SetupLogo'); ?>
			</div>
			<!-- end table -->
		</div>
	</div>
</div>
</div>