<!-- #modal-dialog -->
<div id="Gantilogo1" class="modal fade" role="dialog">
<div class="modal-dialog">
<form action="index.php?page=ganti-logo&amp;id_setup=1" class="form-horizontal" method="POST" enctype="multipart/form-data">               
    <div class="modal-content">
        <div class="modal-header bg-silver">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><i class="ion-ios-gear text-danger"></i> Ganti Logo Aplikasi
            </h4>
        </div>
        <div class="col-sm-12">
            <div class="modal-body">
                  <div class="form-group col-sm-12">
                        <label class="col-md-3 control-label">Pilih File</label>
                        <div class="col-md-8">
                            <input type="file" name="logo" maxlength="255" class="form-control"
                                required="">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <p>* PNG/JPG. Max size 500 KB</p>
                        </div>
                    </div>
             </div>
        </div>
        <div class="modal-footer no-margin-top">
           <button type="submit" name="edit" value="edit" class="btn btn-danger"><i class="fa fa-edit"></i>&nbsp;Ganti</button>&nbsp;
           <a type="button" class="btn btn-default active" data-dismiss="modal" aria-hidden="true"><i class="ion-arrow-return-left"></i>&nbsp;Cancel</a>               
        </div>
    </div>
</form>
</div>
</div>