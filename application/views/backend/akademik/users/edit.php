<?php $no = 0;
    foreach ($tbl_user as $p) : $no++; ?>
        <div id="Edituser<?php echo $p['id_user']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('users/update/'.$p['id_user']) ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Edit Data user</h4>
                </div>
                <div class="modal-body">
                    <div>
                          <div class="form-group">
                                <label class="control-label">Nama user</label>
                                
                                <input type="hidden" class="form-control" id="id_user" name="id_user" required  value="<?php echo $p['id_user']; ?>">
                                <input type="text" class="form-control" id="username" name="username" required  value="<?php echo $p['username']; ?>">
                                <?php echo form_error('username', '<small class="text-danger">', '</small>'); ?>
                                
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
    <!-- edit data user -->
<?php endforeach ?>