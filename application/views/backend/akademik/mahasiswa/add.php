  <div id="AddMahasiswa" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('mahasiswa/simpan') ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Add Data Mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <div>
                   		<div class="form-group">
								<label class="control-label">Nama mahasiswa</label>
								<div>
                                <input type="text" class="form-control" id="nama" name="nama" required placeholder="nama">
                                <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
								</div>
						</div>   
                   		<div class="form-group">
								<label class="control-label">NIM</label>
								<div>
                                <input type="text" class="form-control" id="nim" name="nim" required placeholder="nim">
                                <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
								</div>
						</div>   
                          <div class="form-group">
                                <label class="control-label">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa"  >
                                <?php echo form_error('desa', '<small class="text-danger">', '</small>'); ?>                          
                         </div>     
                          <div class="form-group">
                                <label class="control-label">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"  >
                                <?php echo form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>                          
                         </div>     
                          <div class="form-group">
                                <label class="control-label">Kabupaten</label>
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                                <?php echo form_error('kabupaten', '<small class="text-danger">', '</small>'); ?>                          
                         </div>  
                   		
                    </div>   
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-default active" data-dismiss="modal"	aria-hidden="true"><i class="ion-arrow-return-left"></i> &nbsp;Cancel</a>					
                    <button type="submit" name="save" value="save" class="btn btn-danger"><i class="fa fa-floppy-o"></i> &nbsp;Save</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
    </div>