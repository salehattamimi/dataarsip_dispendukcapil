<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Edit Divisi / Bidang
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_pemilik_ubah', $data_pemilik->id) }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama Divisi / Bidang <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="{{$data_pemilik['nama_pemilik']}}" name="nama" id="nama" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="email" style="text-align: right;" class="col-lg-3 control-label">
                                    Email <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="email" class="form-control" value="{{$data_pemilik['email']}}" name="email" id="email" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="no_telp" style="text-align: right;" class="col-lg-3 control-label">
                                    No Telp <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="{{$data_pemilik['no_telp']}}" name="no_telp" id="no_telp" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="alamat" style="text-align: right;" class="col-lg-3 control-label">
                                    Alamat <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="{{$data_pemilik['alamat']}}" name="alamat" id="alamat" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="jabatan" style="text-align: right;" class="col-lg-3 control-label">
                                    Jabatan : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" class="form-control" value="{{$data_pemilik['jabatan']}}" name="jabatan" id="jabatan" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="golongan" style="text-align: right;" class="col-lg-3 control-label">
                                    Golongan : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" class="form-control" value="{{$data_pemilik['golongan']}}" name="golongan" id="golongan" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="wilayah" style="text-align: right;" class="col-lg-3 control-label">
                                    Wilayah : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" class="form-control" value="{{$data_pemilik['wilayah']}}" name="wilayah" id="wilayah" >  
                                </div>
                            </div>   

                            <div class="form-group status_lengkap">
                                <label for="pekerjaan" style="text-align: right;" class="col-lg-3 control-label">
                                    Pekerjaan : 
                                </label>
                                <div class="col-lg-8"> 
                                     <input type="text" class="form-control" value="{{$data_pemilik['pekerjaan']}}" name="pekerjaan" id="pekerjaan" >  
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="jenis_pemilik" style="text-align: right;" class="control-label col-lg-3">Jenis Divisi / Bidang</label>
                                <div class="col-sm-8"> 
                                    <select class="select22" style="width: 100%" 
                                    id="jenis_pemilik_id" name="jenis_pemilik_id">
                                    @foreach ($data_jenis_pemilik as $r_jenis_pemilik)

                                    @if ($r_jenis_pemilik['id'] == $data_pemilik['pemilik_jenis_id'])
                                    <option value="{{$r_jenis_pemilik['id']}}" selected="">{{$r_jenis_pemilik->nama_jenis}}</option>

                                    @else 
                                    <option value="{{$r_jenis_pemilik['id']}}">{{$r_jenis_pemilik['nama_jenis']}}</option>
                                    @endif

                                    @endforeach
 
                                </select>
                                </div>
                            </div>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Ubah</button>
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