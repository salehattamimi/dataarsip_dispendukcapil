<div class="panel-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tb-legenda" class="table" style="margin-top: 1em">
                    <thead>
                        <tr>
                            <th colspan="4">
                                <a data-toggle="tooltip" onclick="$('.div_keterangan').toggle(500);" title="Klik untuk menampilkan keterangan / legenda!" data-placement="right" class="text-danger text-uppercase btn_legenda">
                                    Keterangan / Legenda <i class="icon-chevron-down"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody style="display: table-row-group" class="div_keterangan">
                        <tr>
                            <td style="border-right: 1px solid #eee">
                                <div class="media-left media-middle">
                                    <a style="background-color: #ffb6b9; " href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs legitRipple">
                                        <span class="letter-icon">&nbsp;</span>
                                    </a>
                                </div>
    
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#" class="letter-icon-title">Belum ada Alih Media (Blok Tabel Merah)</a>
                                    </div>
     
                                </div>
                            </td>
    
                            <td style="border-right: 1px solid #eee">
                                <div class="media-left media-middle">
                                    <a href="javascript:void(0)" class="btn bg-green btn-rounded btn-icon btn-xs legitRipple">
                                        <span class="letter-icon"><i class="icon-comment"></i></span>
                                    </a>
                                </div>
    
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="javascript:void(0)" class="letter-icon-pencil">Tombol Komentar</a>
                                    </div> 
                                </div>
                            </td>
                            <td style="border-right: 1px solid #eee">
                                <div class="media-left media-middle">
                                    <a href="javascript:void(0)" class="btn bg-green-600 btn-rounded btn-icon btn-xs legitRipple">
                                        <span class="letter-icon"><i class="glyphicon glyphicon-file"></i></span>
                                    </a>
                                </div>
    
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="javascript:void(0)" class="letter-icon-title">Tombol Import</a>
                                    </div>
    
                                    <div class="text-muted text-size-small">
    
                                        Untuk Import Data Arsip
                                    </div>
                                </div>
                            </td> 
                        </tr>
                        <tr style="border-bottom: 1px solid #eee">
                            <td style="border-right: 1px solid #eee">
                                <div class="media-left media-middle">
                                    <a href="javascript:void(0)" class="btn bg-warning btn-rounded btn-icon btn-xs legitRipple">
                                        <span class="letter-icon"><i class="glyphicon glyphicon-upload"></i></span>
                                    </a>
                                </div>
    
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="javascript:void(0)" class="letter-icon-upload">Tombol Upload</a>
                                    </div>
    
                                    <div class="text-muted text-size-small">
    
                                        Untuk meneruskan surat
                                    </div>
                                </div>
                            </td>
                            <td style="border-right: 1px solid #eee">
                                <div class="media-left media-middle">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-rounded btn-icon btn-xs legitRipple">
                                        <span class="letter-icon"><i class="glyphicon glyphicon-remove"></i></span>
                                    </a>
                                </div>
    
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="javascript:void(0)" class="letter-icon-title">Tombol Hapus</a>
                                    </div> 
                                </div>
                            </td>
                            <td style="border-right: 1px solid #eee">
                                <div class="media-left media-middle">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-rounded btn-icon btn-xs legitRipple">
                                        <span class="letter-icon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    </a>
                                </div>
    
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="javascript:void(0)" class="letter-icon-title">Tombol Tambah</a>
                                    </div>
    
                                    <div class="text-muted text-size-small">
    
                                        Untuk Tambah Data Manual
                                    </div>
                                </div>
                            </td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
    <table class="table table-bordered table-hover datatable-basic" id="example">
        <thead>
            <tr>
                <th style="width: 0.5%">No</th>
                <th>Nomor Register / Akte</th>
                <th>Nama Bayi</th>
                <th>Tempat / Tanggal Lahir</th>
                <th style="width: 30%">Alamat</th>
                <th style="width: 30%">Nama Ibu</th>
                <th width="20px">Nama Ayah</th>
                <th width="20px">Tanggal Terbit</th>
                <th>Komentar</th>
                <th>Link Akta</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>

            <?php $count = 0; 
        $bulan = '';
        $hitung_alih_media = '-';
        ?>
            @foreach ($data_arsip_inactive as $r)
            @php $style=''; @endphp

            @php
                $count_alih_media = App\Model\Media::count_alih_media($r->id);
            @endphp
            <?php $count++;  
        ?> @if($count_alih_media->count === 0)
            @php $style = 'style="background-color:#ffb6b9"'; @endphp
        @endif
            <tr {!! $style !!}>
                <td align="center" style="width: 0.5%">{{ $count }}</td>
                <td>{{ $r->nomor_akta }}</td>
                <td>{{ $r->nama_bayi }}</td>
                <td>{{ $r->tempat_lahir}} , {{ $r->tanggal_lahir}}</td>
                <td>{{$r->alamat}}<br> RT : {{$r->rt}}<br> RW : {{$r->rw}} </td>
                <td>{{ $r->nama_ibu}}</td>
                <td>{{ $r->nama_ayah}}</td>
                <td>{{ $r->tanggal_terbit}}</td>
                <td>{!! $r->komentar !!}</td>
                <td> 
                        <?php
            $upload = 'Upload'; 
            ?>
                        @if(Auth::user()->role==1)
                        <?php
            $upload = 'File Alih Media'; 
            ?>
                        @endif
                        <button type="button" onclick=" 
            modal_upload_data_arsip_inactive('{{csrf_token()}}', '{{ $r->id_inaktif }}', '#ModalKuning'); 
            " class="btn btn-warning btn-xs btn-block">
                            <i class="glyphicon glyphicon-upload"></i> {{$upload}}
                        </button> </td>
                <td align="center">
                    <div class="btn-group btn-block btn-group-velocity">
                        <button type="button" class="btn bg-blue btn-sm btn-block dropdown-toggle"
                            data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Act
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">

                            @if(Auth::User()->role==2)
                            <li>
                                <button type="button" onclick="
                            edit_modal_data_arsip_inactive('{{csrf_token()}}', '{{ $r->id_inaktif }}', '#ModalTeal')
                            " id="modal_update_artikel" class="btn bg-teal-400 btn-block">
                                    <i class="glyphicon glyphicon-edit"> </i>Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" onclick="
                            comment_modal_data_arsip_inactive('{{csrf_token()}}', '{{ $r->id_inaktif }}', '#ModalHijau')
                            " id="modal_komentar" class="btn bg-green btn-block">
                                    <i class="glyphicon glyphicon-comment"> </i>Komentar
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    onclick="hapus_data_arsip_inactive('{{csrf_token()}}','{{ $r->id_inaktif }}')"
                                    data-toggle="modal" class="btn btn-danger btn-xs btn-block">
                                    <i class="glyphicon glyphicon-remove"> </i>Hapus
                                </button>
                            </li>
                            @endif
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">
// START SCRIPT TABEL
$.extend($.fn.dataTable.defaults, {
    autoWidth: false,
    columnDefs: [{
        orderable: false,
        width: '100px'
    }],
    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        // searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Menampilkan :</span> _MENU_',
        paginate: {
            'first': 'First',
            'last': 'Last',
            'next': '&rarr;',
            'previous': '&larr;'
        }
    },
    drawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
    },
    preDrawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
    }
});
$('#example').DataTable( {
        "scrollX": true
    } );
$('.datatable-basic').DataTable();
// END SCRIPT TABEL
</script>