<div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li><a class="btn btn-sm btn-danger m-b-10" data-toggle="modal" data-target="#Addkategori"><i class="fa fa-plus-circle"></i> &nbsp;Add Kategori</a></li>
	</ol>
	<h1 class="page-header">Management Setup <small><?php echo $title; ?>&nbsp;</small></h1>
	<!-- end page-header -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12 ui-sortable">
        <?php if ($this->session->flashdata('alert')): ?>
            <div id="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('alert'); ?>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById("alert").remove();
                }, <?php echo $this->session->flashdata('alert_timeout'); ?>);
            </script>
          <?php endif; ?>
       
			<!-- begin panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload" data-original-title="" title="" data-init="true"><i	class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Results <span class="text-info">	<?php echo $jumlah?></span> rows for "Data Kategori"</h4>
				</div>

				<div class="panel-body">
					<table id="data-table"
						class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed"
						width="100%" role="grid" aria-describedby="data-table_info" style="width: 100%;">
						<thead>
							<tr role="row">
								<th width="3%">No</th>
								<th>Nama Kategori</th>
								<th width="10%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							   foreach ($tbl_program_kategori as $p) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $p['nama_kategori']; ?></td>
								<td class="text-center">
									<a  data-toggle="modal" data-target="#EditKategori<?php echo $p['id_kategori']; ?>" title="edit" type="button" class="btn btn-info btn-icon btn-sm"><i class="fa fa-pencil fa-lg"></i></a>
									<a  data-toggle="modal" data-target="#DeleteKategori<?php echo $p['id_kategori']; ?>" title="delete" type="button" class="btn btn-danger btn-icon btn-sm"><i class="fa fa-trash-o fa-lg"></i></a>
                                </td>
							</tr>
							<?php } ?>
                            <!-- edit Kategori -->
                            <?php $this->load->view('backend/akademik/kategori_program/edit'); ?>
                            <!-- add kategori_program -->
                            <?php $this->load->view('backend/akademik/kategori_program/add'); ?>
                            <!-- delete kategori_program -->
                            <?php $this->load->view('backend/akademik/kategori_program/delete'); ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-10 -->
	</div>
	<!-- end row -->
</div>