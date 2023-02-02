<?php $no = 0;
    foreach ($tbl_program as $p) : $no++; ?>
        <div id="Editprogram<?php echo $p['id_program']; ?>" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('program/update/'.$p['id_program']) ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Edit Data Program</h4>
                </div>
                <div class="modal-body">
                    <div>
                            <div class="form-group">
                                <label class="control-label">Periode</label>  
                                <?php $no;
									foreach ($periode as $pri) { ?>
										<?php if ($pri['id_periode'] ==  $p['id_periode']) { ?>											
                                            <input type="text" readonly  class="form-control" value="<?php echo $pri['nama_periode']; ?>">
										<?php } ?>
								<?php } ?>                             
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kategori Program</label>
                                <div>
                                    <select class="default-select2 form-control" name="id_kategori">
                                        <?php foreach ($program_kategori as $kategori): ?>
                                                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></option>                                          
                                        <?php endforeach; ?>   
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama Program</label>                             
                                <input type="hidden" class="form-control" id="id_program" name="id_program" required  value="<?php echo $p['id_program']; ?>">
                                <input type="text" class="form-control" id="nama_program" name="nama_program" required  value="<?php echo $p['nama_program']; ?>">
                                <?php echo form_error('nama_program', '<small class="text-danger">', '</small>'); ?>                               
                            </div>

                            <div class="form-group">
                                <label class="control-label">Status</label>                              
                                    <select name="status" class="select2 form-control" style="width:100%" required value="<?php echo $p['status']; ?>">
                                        <option value="aktif">Aktif</option>
                                        <option value="non aktif">Non ktif</option>
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
    <!-- edit data program -->
<?php endforeach ?>