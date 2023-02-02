<?php $no = 0;
    foreach ($tbl_periode as $p) : $no++; ?>
        <div id="Editperiode<?php echo $p['id_periode']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('periode/update/'.$p['id_periode']) ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Edit Data periode</h4>
                </div>
                <div class="modal-body">
                    <div>
                          <div class="form-group">
                                <label class="control-label">Nama periode</label>
                                
                                <input type="hidden" class="form-control" id="id_periode" name="id_periode" required  value="<?php echo $p['id_periode']; ?>">
                                <input type="text" class="form-control" id="nama_periode" name="nama_periode" required  value="<?php echo $p['nama_periode']; ?>">
                                <?php echo form_error('nama_periode', '<small class="text-danger">', '</small>'); ?>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                
                                    <select name="status" class="select2 form-control" style="width:100%" required value="<?php echo $p['status']; ?>">
                                        <option value="aktif">Aktif</option>
                                        <option value="non aktif">Non Aktif</option>
                                    </select>
                                  <?php echo form_error('status', '<small class="text-danger">', '</small>'); ?>    
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
    <!-- edit data periode -->
<?php endforeach ?>