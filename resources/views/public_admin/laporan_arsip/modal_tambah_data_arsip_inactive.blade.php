 <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('simpan_tambah_data_arsip_inactive') }}">
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

    <div class="col-lg-6">
        
            <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-make-group position-left"></i>Tambah Data Arsip Inactive</legend>

                <div class="form-group">
                        {{ csrf_field() }}
                    <label class="control-label col-lg-3">Kode Klasifikasi<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group"> 
                            <input type="number"  class="form-control" id="kode_klasifikasi" name="kode_klasifikasi" value="" min=0 placeholder="Nomor Klasifikasi">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Kode Index<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-5">
                            <select class="form-control select2" name="data_indeks" id="data_indeks" required="" style="width: 100%"> 
                                <option value="0">-- Tampilkan Semua --</option>
                                @foreach($data_indeks as $r)
                                <option value="{{$r->id}}">{{$r->nama_indeks}}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Nama Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text"  class="form-control" id="nama_arsip" name="nama_arsip" placeholder="Nama Arsip" 
                            value="" 
                            >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Kondisi Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <select class="form-control select2" name="data_kondisi" id="data_kondisi" required="" style="width: 100%"> 
                                <option value="0">-- Tampilkan Semua --</option>
                                @foreach($data_kondisi as $r)
                                <option value="{{$r->id}}">{{$r->nama_kondisi}}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Uraian Masalah<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text"  class="form-control" id="uraian_masalah" name="uraian_masalah" placeholder="Uraian Masalah" 
                            value="" 
                            >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Kategori Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <select class="form-control select2" name="data_kategori" id="data_kategori" required="" style="width: 100%"> 
                                <option value="0">-- Tampilkan Semua --</option>
                                @foreach($data_kategori as $r)
                                <option value="{{$r->id}}">{{$r->nama_kategori}}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Tahun Aktif</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="number"  class="form-control" id="tahun_aktif" name="tahun_aktif" placeholder="Tahun Aktif" 
                            value="" 
                            >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Tahun In Aktif</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="number"  class="form-control" id="tahun_inactive" name="tahun_inactive" placeholder="Tahun In Aktif" 
                            value="" 
                            >
                        </div>
                    </div>
                </div>
                <div class="form-group surat_masuk">
                    <label class="control-label col-lg-3">Jangka Simpan ( Thn )<span style="color:red"><b>*</b></span></label> 
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="number" min="0" required="" class="form-control" name="jangka_simpan" id="jangka_simpan" placeholder="Jangka Simpan" value="" 
                            >
                        </div>
                    </div>
                </div>

                <div class="form-group surat_masuk">
                    <label class="control-label col-lg-3">Tingkat Perkembangan<span style="color:red"><b>*</b></span></label> 
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" required="" class="form-control" name="tingkat_perkembangan" id="tingkat_perkembangan" placeholder="Tingkat Perkembangan" 
                            value="" 
                            >
                        </div>
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="control-label col-lg-3">Keterangan</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <textarea style="resize: none" class="form-control" name="keterangan" placeholder="Keterangan" id="keterangan"> 
                            </textarea>
                        </div>
                    </div>
                </div>

            </fieldset>
    </div>
    <div class="col-lg-6">
        <form class="form-horizontal" enctype="multipart/form-data" action="#">
            <fieldset class="content-group">
                <legend></legend>

                <div class="form-group">
                    <label class="control-label col-lg-3">Nomor Sementara</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" value="" id="nomor_sementara" name="nomor_sementara" placeholder="nomor_sementara">
                        </div>
                    </div>
                </div>  

                 <div class="form-group">
                    <label class="control-label col-lg-3">Nomor Berkas</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <input type="text"  class="form-control" value="" id="nomor_berkas" name="nomor_berkas" placeholder="Nomor Berkas">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Nomor Box</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" value="" class="form-control" id="nomor_box" name="nomor_box" placeholder="Nomor Box" >
                        </div>
                    </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Nomor Rak</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" value="" name ="nomor_rak" class="form-control" id="nomor_rak" placeholder="Nomor Rak" >
                        </div>
                    </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Nomor BKU</label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <input type="number" class="form-control" value="" id="nomor_bku" name="nomor_bku" placeholder="Nomor BKU">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Tahun Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <input type="number" class="form-control" value="" id="tahun_arsip" name="tahun_arsip" placeholder="Tahun Arsip">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Bulan Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <input type="number" class="form-control" value="" id="bulan_arsip" name="bulan_arsip" placeholder="Bulan Arsip">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Lokasi Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <select class="form-control select2" name="data_lokasi" id="data_lokasi" required="" style="width: 100%"> 
                                <option value="0">-- Tampilkan Semua --</option>
                                @foreach($data_lokasi as $r)
                                <option value="{{$r->id}}">{{$r->nama_lokasi}}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group surat_masuk">
                    <label class="control-label col-lg-3">Nasib Akhir<span style="color:red"><b>*</b></span></label> 
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" required="" class="form-control" name="nasib_akhir" id="nasib_akhir" placeholder="Nasib Akhir">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Jumlah Unit<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="number"  class="form-control" id="jumlah_unit"  name="jumlah_unit" placeholder="Jumlah Unit"value="">
                        </div>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="nama_role" class="control-label col-lg-3">Satuan Jumlah<span style="color:red"><b>*</b></span></label>
                        <div class="col-lg-5"> 
                            <select class="form-control select2" style="width: 100%" 
                                onchange="
                                    $('#satuan_jumlah').val(this.value);
                                    $('#satuan_jumlah').hide(500);
                                    if(this.value == 'buat_baru'){
                                        $('#satuan_jumlah').val('');
                                        $('#satuan_jumlah').show(500);
                                    }
                                ">
                                @foreach ($satuan as $r)
                                <option value="{{$r->nama_satuan}}">{{$r->nama_satuan}}</option>
                                @endforeach
                                <option value="buat_baru">-- Buat Baru --</option>
                            </select>
                            <br><br>
                            <input style="display: none" type="text" id="satuan_jumlah" name="satuan_jumlah" value="%" class="form-control" placeholder="Isi Satuan Jumlah">
                        </div>
                    </div> 

                <div class="form-group">
                    <label class="control-label col-lg-3">Bidang / Divisi Arsip<span style="color:red"><b>*</b></span></label>
                    <div class="col-lg-9">
                        <div class="input-group col-md-8">
                            <select class="form-control select2" name="data_pemilik" id="data_pemilik" required="" style="width: 100%"> 
                                <option value="0">-- Tampilkan Semua --</option>
                                @foreach($data_pemilik as $r)
                                <option value="{{$r->id}}">{{$r->nama_pemilik}}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>

 
    </div>

<div class="modal-footer">
    <button type="button" class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
    <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Ubah</button>
</div>
</div>
    </form>
<script type="text/javascript">
            $('.select2').select2();
        </script>