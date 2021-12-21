<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Tambah Divisi / Bidang
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_pemilik') }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama Divisi / Bidang <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="nama" id="nama" >  
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
                                <label for="no_telp" style="text-align: right;" class="col-lg-3 control-label">
                                    No Telp <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="number" class="form-control" value="" name="no_telp" id="no_telp" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="alamat" style="text-align: right;" class="col-lg-3 control-label">
                                    Alamat <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="alamat" id="alamat" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="jabatan" style="text-align: right;" class="col-lg-3 control-label">
                                    Jabatan : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" class="form-control" value="" name="jabatan" id="jabatan" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="golongan" style="text-align: right;" class="col-lg-3 control-label">
                                    Golongan : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" class="form-control" value="" name="golongan" id="golongan" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="wilayah" style="text-align: right;" class="col-lg-3 control-label">
                                    Wilayah : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" class="form-control" value="" name="wilayah" id="wilayah" >  
                                </div>
                            </div>   

                            <div class="form-group status_lengkap">
                                <label for="pekerjaan" style="text-align: right;" class="col-lg-3 control-label">
                                    Pekerjaan : 
                                </label>
                                <div class="col-lg-8"> 
                                     <input type="text" class="form-control" value="" name="pekerjaan" id="pekerjaan" >  
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="jenis_pemilik" style="text-align: right;" class="control-label col-lg-3">Jenis Divisi / Bidang</label>
                                <div class="col-sm-8">
                                    <select class="select22" style="width: 100%" 
                                    id="jenis_pemilik_id" name="jenis_pemilik_id">
                                    @foreach ($data_jenis_pemilik as $r_jenis_pemilik)
                                    <option value="{{$r_jenis_pemilik->id}}">{{$r_jenis_pemilik->nama_jenis}}</option>
                                    @endforeach
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
    $('.select22').select2();
</script>