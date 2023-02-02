<?php $no = 0;
    foreach ($tbl_mahasiswa as $p) : $no++; ?>
        <div id="Aktifmahasiswa<?php echo $p['id_mahasiswa']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('mahasiswa/aktif_user' );?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Aktif Mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" align="center">
                        <p>Aktifkan  <b><?php echo $p['nama']; ?></b> sebagai User </p> 
                        <p> <b>Username $ Password Default</b> </p>
                        <p>Username : <?php echo $p['nim']; ?> </p>
                        <p>Password : <?php echo $p['nim']; ?> </p>
                    </div>
                    <div>
                          <div class="form-group">                             
                                <input type="hidden" class="form-control" id="nim" name="nim" required  value="<?php echo $p['nim']; ?>">
                                <input type="hidden" class="form-control" id="email" name="email" required  value="<?php echo $p['email']; ?>">            
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
    <!-- edit data mahasiswa -->
<?php endforeach ?>