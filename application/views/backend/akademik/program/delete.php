<?php $no = 0;
    foreach ($tbl_program as $p) : $no++; ?>
        <div id="Deleteprogram<?php echo $p['id_program']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Delete Data program</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <p>Anda yakin ingin menghapus data program <b><?php echo $p['nama_program']; ?></b> </p> 
                    </div>
                </div>
                <div class="modal-footer">
                   <a type="button" class="btn btn-default active" data-dismiss="modal"	aria-hidden="true"><i class="ion-arrow-return-left"></i> &nbsp;Cancel</a>					
                    <a href="<?php echo site_url('program/delete/'.$p['id_program']); ?>" name="save" value="save" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> &nbsp;Delete</a>&nbsp;
                </div>
            </div>
        </div>
    </div>
    <!-- edit data program -->
<?php endforeach ?>