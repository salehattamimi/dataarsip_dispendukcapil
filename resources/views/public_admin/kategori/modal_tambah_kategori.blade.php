<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Tambah Kategori
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_kategori') }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama Kategori <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="nama" id="nama" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Keterangan <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8">  
                                    <textarea required="required" class="form-control" name="keterangan" id="keterangan">
                                        
                                    </textarea> 
                                </div>
                            </div>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Simpan</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    if($('.select22').length){
        $('.select22').select2();
    } 
    $( document ).ready(function() { 

        //CKEditor
        // CKEDITOR.replace('ckeditors');
        // CKEDITOR.config.height = 300;  
        // $('.summernote').each(function(e){  
        //     CKEDITOR.replace(this.id,{  
        //         uiColor : '#b2cefe ' 
        //     }); 

        // }); 
    }); 
</script>