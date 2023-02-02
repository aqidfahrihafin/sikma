<?php $no = 0;
    foreach ($tbl_mahasiswa as $p) : $no++; ?>
        <div id="Deletemahasiswa<?php echo $p['id_mahasiswa']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Delete Data mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <p>Anda yakin ingin menghapus data mahasiswa <b><?php echo $p['nama']; ?></b> </p> 
                    </div>
                </div>
                <div class="modal-footer">
                   <a type="button" class="btn btn-default active" data-dismiss="modal"	aria-hidden="true"><i class="ion-arrow-return-left"></i> &nbsp;Cancel</a>					
                    <a href="<?php echo site_url('mahasiswa/delete/'.$p['id_mahasiswa']); ?>" name="save" value="save" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> &nbsp;Delete</a>&nbsp;
                </div>
            </div>
        </div>
    </div>
    <!-- edit data mahasiswa -->
<?php endforeach ?>