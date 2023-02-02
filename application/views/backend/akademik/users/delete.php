<?php $no = 0;
    foreach ($tbl_user as $p) : $no++; ?>
        <div id="Deleteuser<?php echo $p['id_user']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Delete Data user</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <p>Anda yakin ingin menghapus data user <b><?php echo $p['username']; ?></b> </p> 
                    </div>
                </div>
                <div class="modal-footer">
                   <a type="button" class="btn btn-default active" data-dismiss="modal"	aria-hidden="true"><i class="ion-arrow-return-left"></i> &nbsp;Cancel</a>					
                    <a href="<?php echo site_url('users/delete/'.$p['id_user']); ?>" name="save" value="save" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> &nbsp;Delete</a>&nbsp;
                </div>
            </div>
        </div>
    </div>
    <!-- Delete data user -->
<?php endforeach ?>