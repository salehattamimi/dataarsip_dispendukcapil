<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Tambah User
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_user') }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama User <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="nama" id="nama" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="username" style="text-align: right;" class="col-lg-3 control-label">
                                    Username <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="username" id="username" >  
                                </div>
                            </div> 
                            <div class="form-group status_lengkap">
                                <label for="password" style="text-align: right;" class="col-lg-3 control-label">
                                    Password <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="password" class="form-control" value="" name="password" id="password" >  
                                </div>
                            </div> 
                            <div class="form-group status_lengkap">
                                <label for="re_password" style="text-align: right;" class="col-lg-3 control-label">
                                    Re-type Password <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="password" class="form-control" value="" name="re_password" id="re_password" >  
                                </div>
                            </div> 
                            <div class="form-group status_lengkap">
                                <label for="email" style="text-align: right;" class="col-lg-3 control-label">
                                    Email <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="email" class="form-control" value="" name="email" id="email" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="email" style="text-align: right;" class="col-lg-3 control-label">
                                    Role <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <select class="form-control select22" id="role_id" name="role_id">
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                    </select>  
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