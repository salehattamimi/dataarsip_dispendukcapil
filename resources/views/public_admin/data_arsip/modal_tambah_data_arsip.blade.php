<form method="post" action="{{ route('simpan_tambah_portofolio') }}" class="form-horizontal">
    <div class="modal-body">
        <div class="form-group">
            {{ csrf_field() }}
        </div>

        <div class="form-group">
            <label for="judul" class="control-label col-sm-3">Judul</label>
            <div class="col-sm-9">
                <input type="text" placeholder="Masukkan Nama Kategori" class="form-control" name="judul" id="judul" required="">
            </div>
        </div>  

        <div class="form-group">
            <label for="atasan_nama" class="control-label col-sm-3">Deskripsi</label>
            <div class="col-sm-9">
                <textarea style="font-weight: bold; font-family: Arial;" name="deskripsi" id="deskripsi" rows="4"class="form-control summernote"></textarea>
            </div>
        </div>     
 
        <div class="form-group">
            <label for="tanggal" class="control-label col-sm-3">Waktu</label>
            <div class="col-sm-6">
                <input type="date" placeholder="Masukkan Tanggal" class="form-control" name="tanggal" id="tanggal" required="">
            </div>
            <div class="col-sm-3">
                <input type="time" placeholder="Masukkan Waktu" class="form-control" name="waktu" id="waktu" required="">
            </div>
        </div>  
 
        <div class="form-group">
            <label for="klien" class="control-label col-sm-3">Klien</label>
            <div class="col-sm-9">
                <input type="text" placeholder="Masukkan Nama Klien" class="form-control" name="klien" id="klien" required="">
            </div>
        </div>   

        <div class="form-group">
            <label for="link_klien" class="control-label col-sm-3">Link Klien</label>
            <div class="col-sm-9">
                <input type="text" placeholder="http://www.iam-arsip.co.id/" class="form-control" name="link_klien" id="link_klien" required="">
            </div>
        </div>  

        <div class="form-group">
            <label for="link_klien" class="control-label col-sm-3">Kategori</label>
            <div class="col-sm-9"> 
                <select  class="form-control" name="kategori_id" id="kategori_id" required="" style="width: 100%"> 
                    @foreach($data_kategori as $r)
                    <option value="{{$r->id}}">{{$r->nama_kategori}}</option>  
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-9">
                <input type="hidden" value="{{Auth::user()->id}}" placeholder="http://www.iam-arsip.co.id/" class="form-control" name="user_id" id="user_id" required="">
            </div>
        </div>  
 
    </div>

    <div class="modal-footer"> 
        <button type="button" class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Tambah</button>
    </div>

</form>

<script type="text/javascript">  
    $(function () {
        //CKEditor
        // CKEDITOR.replace('ckeditors');
        // CKEDITOR.config.height = 300;  
        $('.summernote').each(function(e){ 
            var toolbarGroups = [
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'align', 'list', 'indent', 'blocks', 'bidi', 'paragraph' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'document', groups: [ 'document', 'mode', 'doctools' ] },
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'colors', groups: [ 'colors' ] }, 
            ];
            CKEDITOR.replace(this.id,{  
                uiColor : '#b2cefe ',
                toolbarGroups,
                removeButtons : 'Link,Unlink,Anchor,Image,Flash,HorizontalRule,Iframe,About'  

            }); 
        }); 
    });
</script>