 <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('simpan_tambah_data_arsip_inactive') }}" id="form_tambah_inactive">
<div class="row">


            <div class="col-md-12">
                @if (session()->has('status'))
                <script type="text/javascript">
                    alertKu('success', "{{ session()->get('status') }}");
                </script>
                <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                    <button type="button" class="close" data-dismiss="alert">
                        <span>×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <span class="text-semibold">Berhasil! </span> {{ session()->get('status') }}
                    {{session()->forget('status')}}
                </div>
                @endif
                @if (session()->has('statusT'))
                <div class="alert alert-warning alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert">
                        <span>×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <span class="text-semibold">Gagal!</span> {{ session()->get('statusT') }}    
                    {{session()->forget('statusT')}}
                </div>
                @endif 
            </div>

    <div class="col-lg-12">
        
            <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-make-group position-left"></i>Tambah Data Arsip Inactive</legend>

                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                        {{ csrf_field() }}
                    <label class="control-label col-lg-2">Nomor Register / No Akta</label>
                    <div class="col-lg-9">
                        <div class="input-group"> 
                            <input type="text"  class="form-control" id="nomor_akta" name="nomor_akta" value="" min=0 placeholder="Nomor Akta">
                        </div>
                    </div>
                </div>
                

                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Nama Bayi</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-5"> 
                            <input type="text" name="nama_bayi" class="form-control" id="nama_bayi" placeholder="Nama Bayi">
                        </div>
                    </div>
                </div>

                <div class="form-group"> 
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Tempat, Tanggal Lahir</label>
                    <div class="col-lg-2">
                        <div class="input-group">
                            <input type="text"  class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat" 
                            value="">
                        </div>
                    </div> 
                    <div class="col-lg-2">
                        <div class="input-group">
                            <input type="date"  class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" 
                            value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text"  class="form-control" id="alamat" name="alamat" placeholder="Alamat" 
                            value="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                <div class="form-group"> 
                    <div class="col-lg-3"> </div>
                    <div class="col-lg-2">RT
                        <div class="input-group">
                            <input type="text"  class="form-control" id="rt" name="rt" placeholder="RT" 
                            value="">
                        </div>
                    </div> 
                    <div class="col-lg-2"> RW
                        <div class="input-group">
                            <input type="text"  class="form-control" id="rw" name="rw" placeholder="RW" 
                            value="">
                        </div>
                    </div>
                </div>
                </div> 
                

                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Tanggal Terbit</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-5"> 
                            <input type="date" value="<?= date('Y-m-d') ?>" name="tanggal_terbit" class="form-control" id="tanggal_terbit" placeholder="Tanggal Terbit">
                        </div>
                    </div>
                </div> 
 

                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Kecamatan</label>
                    <div class="col-lg-9">
                        <div class="input-group col-lg-5">
                        <select class="form-control select2" onchange="div_kelurahan('{{csrf_token()}}','#id_kecamatan','#form_tambah_inactive'
                        )"id="id_kecamatan" name="id_kecamatan">
                                @foreach($data_kecamatan as $r)
                                        <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                
                <div class="form-group admin_bagian">
                    <label class="control-label col-lg-3"></label>
                    <div class="col-lg-9"> 
                        <div class="input-group col-lg-5">
                        <select name="kelurahan_id" onchange="
                            var cur_value =  $(this).find('option:selected').text();
                            $('#form_tambah_inactive').find('#nama_kelurahan').val(cur_value);  
                        " 
                        id="kelurahan_id" data-placeholder="Nama Kelurahan" class="form-control select2"> 
                            <option value="0">-- Tampilkan Semua --</option> 
                        </select>
                        </div>
                    </div>
                </div> 
 
                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Nama Ayah</label>
                    <div class="col-lg-8">
                        <div class="input-group col-md-5"> 
                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-1">
                    </div>
                    <label class="control-label col-lg-2">Nama Ibu</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-5"> 
                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
                        </div>
                    </div>
                </div> 

                <input type="hidden" id="nama_kecamatan" name="nama_kecamatan" value="">
                <input type="hidden" id="nama_kelurahan" name="nama_kelurahan" value="">

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Tambah</button>
                </div>
            </fieldset>
    </div> 
    <div class="col-md-6">
    </div>

</div>
    </form>
        <script type="text/javascript">
            $('.select2').select2();
        </script>