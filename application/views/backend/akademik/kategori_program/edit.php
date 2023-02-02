<?php $no = 0;
    foreach ($tbl_program_kategori as $p) : $no++; ?>
        <div id="EditKategori<?php echo $p['id_kategori']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('programkategori/update/'.$p['id_kategori']) ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Edit Data Kategori</h4>
                </div>
                <div class="modal-body">
                    <div>
                          <div class="form-group">
                                <label class="control-label">Nama Kategori</label>
                                
                                <input type="hidden" class="form-control" id="id_kategori" name="id_kategori" required  value="<?php echo $p['id_kategori']; ?>">
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required  value="<?php echo $p['nama_kategori']; ?>">
                                <?php echo form_error('nama_kategori', '<small class="text-danger">', '</small>'); ?>
                                
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
    <!-- edit data Kategori -->
<?php endforeach ?>