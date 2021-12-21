<?php
// print_r($_POST);
?>
<div class="row">
    <div class="form-horizontal" action="#">

        @if(Auth::User()->role==2)
        <div class="col-md-6">
            <form method="post" id="upload_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                    <input type="hidden" name="arsip_inactive_id" value="{{$id}}">
                    <legend class="text-semibold"><span class="label border-left-info label-striped"><i
                                    class="icon-upload position-left"></i><b>UPLOAD</b></span></legend>
                    <div class="form-group">
                        <label style="text-align: right;" class="col-lg-3 control-label">Nama File:</label>
                        <div class="col-lg-9">
                             <input type="text" class="form-control" name="nama_file" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="text-align: right;" class="col-lg-3 control-label">Keterangan File:</label>
                        <div class="col-lg-9">
                            <textarea style="font-weight: bold; font-family: Arial;" name="keterangan" id="keterangan" rows="4"class="form-control"></textarea>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label style="text-align: right;" class="col-lg-3 control-label">Pilih Berkas:</label>
                        <div class="col-lg-9">
                            <!-- <input type="file" name=""> --> 
                            <img id="loading" src="{{asset('assets/images/loading.gif')}}" style="display:none;">
                            <input id="select_file" type="file" size="45" name="select_file" class="input"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 tBold">
                            <code>* Ukuran berkas yang di upload tidak boleh lebih dari 10 MB.</code>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">&nbsp;</div>
                        <div class="col-lg-9">
                            <button type="submit" class="btn btn-primary" data-style="expand-left" data-spinner-color="#333" data-spinner-size="20">
                                <i class="icon-upload"></i> Upload & Simpan
                            </button>
                            <span id="message"></span>
                        </div>
                    </div>
                </fieldset>
            </form> 
        </div>
        @endif
        <div class="col-md-6">
            <div class="form-group"><br>
                <div class="col-lg-12" id="listupload{{$id}}">
                    <script type="text/javascript">
                        modal_upload_data_arsip_inactive_isi('{{csrf_token()}}', '{{$id}}', '#listupload{{$id}}');
                    </script>
                </div>
            </div>
        </div> 
    </div>
</div> 
<script>
    $(document).ready(function () {
        $('#upload_form').on('submit', function (event) {
            event.preventDefault(); 
            $.ajax({
                url: "{{ route('data_arsip_inactive_upload.action') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) { 
                    if(data.res == 'success'){ 
                        swal({
                            html: true,
                            title: "Data berhasil diupload",
                            text: "",
                            type: "success",     
                            confirmButtonColor: "#4CAF50"
                        },
                        function(isConfirm){ 
                            if(isConfirm){ 
                                $('#message').css('display', 'block');
                                $('#message').html(data.message);
                                $('#message').addClass(data.class_name);
                                $('#uploaded_image').html(data.uploaded_image);
                                modal_upload_data_arsip_inactive_isi('{{csrf_token()}}', '{{$id}}', '#listupload{{$id}}');
                            }
                        });
                    } else {
                        alertKu('warning', data.message);
                    }
                }
            })
        });

    });

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