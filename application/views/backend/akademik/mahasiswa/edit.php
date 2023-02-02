<?php $no = 0;
    foreach ($tbl_mahasiswa as $p) : $no++; ?>
        <div id="Editmahasiswa<?php echo $p['nim'] ; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('mahasiswa/update/'.$p['id_mahasiswa'] ) ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Edit Data mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <div>
                          <div class="form-group">
                                <label class="control-label">NIM</label>                              
                                <input type="text" class="form-control" name="nim" readonly value="<?php echo $p['nim']; ?>">           
                          </div>  
                          <div class="form-group">
                                <label class="control-label">Nama mahasiswa</label>                              
                                <input type="hidden" class="form-control" id="id_mahasiswa" name="id_mahasiswa" required  value="<?php echo $p['id_mahasiswa']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" required  value="<?php echo $p['nama']; ?>">
                                <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>             
                            </div>  
            
                        <!-- alamat id -->
                            <?php $no;
                            foreach ($tbl_alamat as $alamat) { ?>
                                <?php if ($alamat['nim_mahasiswa'] ==  $p['nim']) { ?>									
                                    <input type="text" class="form-control" id="id_alamat" name="id_alamat" required  value="<?php echo $alamat['id_alamat']; ?>">                      
                                    <div class="form-group">
                                        <label class="control-label">Desa</label>
                                        <input type="text" class="form-control" id="desa" name="desa"  value="<?php echo $alamat['desa']; ?>" required>
                                        <?php echo form_error('desa', '<small class="text-danger">', '</small>'); ?>                          
                                    </div>     
                                    <div class="form-group">
                                        <label class="control-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"  value="<?php echo $alamat['kecamatan']; ?>" required>
                                        <?php echo form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>                          
                                    </div>     
                                    <div class="form-group">
                                        <label class="control-label">Kabupaten</label>
                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten"  value="<?php echo $alamat['kabupaten']; ?>"  required>
                                        <?php echo form_error('kabupaten', '<small class="text-danger">', '</small>'); ?>                          
                                    </div>   
                                <?php } ?>
                            <?php } ?>
                        <!-- end alamat -->  
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