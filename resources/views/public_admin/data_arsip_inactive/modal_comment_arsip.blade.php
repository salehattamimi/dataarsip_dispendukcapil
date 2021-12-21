<div class="row">
    <div class="col-lg-12">

        <div class="tab-content">
            <div class="tab-pane active" id="tab_verifikasi">
                <form id="formTambahMasterRS" method="post" action="{{ route('simpan_komentar',$id) }}"
                    class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            {{ csrf_field() }}
                        </div>
                        <div class="form-group status_lengkap">
                            <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                Komentar <span style="color:red"><b>*</b></span> :
                            </label>
                            <div class="col-lg-8">
                                <textarea required="required" type="text" class="form-control summernote"
                                    name="komentar" id="komentar">{{$data_komentar->komentar}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i>
                            Batal</button>
                        <button type="submit" class="btn bg-teal-400"><i class="icon-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
$(function() {
    //CKEditor
    // CKEDITOR.replace('ckeditors');
    // CKEDITOR.config.height = 300;  
    $('.summernote').each(function(e) {
        var toolbarGroups = [{
                name: 'basicstyles',
                groups: ['basicstyles', 'cleanup']
            },
            {
                name: 'paragraph',
                groups: ['align', 'list', 'indent', 'blocks', 'bidi', 'paragraph']
            },
            {
                name: 'forms',
                groups: ['forms']
            },
            {
                name: 'document',
                groups: ['document', 'mode', 'doctools']
            },
            {
                name: 'clipboard',
                groups: ['clipboard', 'undo']
            },
            {
                name: 'editing',
                groups: ['find', 'selection', 'spellchecker', 'editing']
            },
            {
                name: 'links',
                groups: ['links']
            },
            {
                name: 'styles',
                groups: ['styles']
            },
            {
                name: 'insert',
                groups: ['insert']
            },
            {
                name: 'colors',
                groups: ['colors']
            },
        ];
        CKEDITOR.replace(this.id, {
            uiColor: '#b2cefe ',
            toolbarGroups,
            removeButtons: 'Link,Unlink,Anchor,Image,Flash,HorizontalRule,Iframe,About'

        });
    });
});
$('.select22').select2();
</script>