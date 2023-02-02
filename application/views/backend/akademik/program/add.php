  <div id="Addprogram" class="modal fade" style="display: none;">
        <div class="modal-dialog">
        <form action="<?php echo site_url('program/simpan') ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
              <div class="modal-header bg-silver">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Add Data Program</h4>
                </div>
                <div class="modal-body">
                    <div>
                    <!-- <div class="alert alert-info">
                        <p>Daftar Periode yang aktif akan muncul pada list ! <b></b> </p> 
                    </div> -->
                         <div class="form-group">
                                <label class="control-label">Periode</label>
                                <div>
                                    <select class="default-select2 form-control" name="id_periode">
                                        <?php foreach ($periode as $periode): ?>
                                            <?php if ($periode['status'] ==  'aktif') { ?>
                                                <option value="<?php echo $periode['id_periode']; ?>"><?php echo $periode['nama_periode']; ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>   
                                    </select>
                                </div>
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
								<div>
                                <input type="text" class="form-control" id="nama_program" name="nama_program" required placeholder="Nama program" value="<?php echo set_value('nama_program'); ?>">
                                <?php echo form_error('nama_program', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>

                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <div>
                                    <select name="status" class="select2 form-control" style="width:100%" required tabindex="-1" aria-hidden="true">
                                        <option value="aktif">Aktif</option>
                                        <option value="non aktif">Non Aktif</option>
                                    </select>
                                </div>
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