  <div id="Addperiode" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('periode/simpan') ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Add Data Periode</h4>
                </div>
                <div class="modal-body">
                    <div>
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