<?php $no = 0;
    foreach ($tbl_periode as $p) : $no++; ?>
        <div id="Deleteperiode<?php echo $p['id_periode']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Delete Data Periode</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <p>Anda yakin ingin menghapus data periode <b><?php echo $p['nama_periode']; ?></b> </p> 
                    </div>
                </div>
                <div class="modal-footer">
                   <a type="button" class="btn btn-default active" data-dismiss="modal"	aria-hidden="true"><i class="ion-arrow-return-left"></i> &nbsp;Cancel</a>					
                    <a href="<?php echo site_url('periode/delete/'.$p['id_periode']); ?>" name="save" value="save" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> &nbsp;Delete</a>&nbsp;
                </div>
            </div>
        </div>
    </div>
    <!-- edit data periode -->
<?php endforeach ?>