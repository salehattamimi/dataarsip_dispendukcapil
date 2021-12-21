<div class="panel-body">
    <table class="table table-bordered table-hover datatable-basic">
    <thead>
        <tr>
            <th style="width: 0.5%">No</th>
            <th>Kode Klasifikasi</th> 
            <th>Indeks</th> 
            <th style="width: 30%">Hal</th>
            <th style="width: 30%">Tahun</th>  
            <th width="20px">Tingkat Perkembangan</th>  
            <th>Keterangan</th>
            <th style="width: 20%">Lokasi dan Jumlah Simpan</th>  
            <th>Act</th> 
        </tr>
    </thead>
    <tbody>

        <?php $count = 0; 
        $bulan = '';
        ?>
        @foreach ($data_arsip_inactive as $r)
        <?php $count++;  
        ?> 

        <tr>
            <td align="center" style="width: 0.5%">{{ $count }}</td>
            <td>{{ $r->kode_klasifikasi }}</td>
            <td>{{ $r->indeks }}</td>
            <td>{{ $r->hal}}</td> 
            <td>{{$r->tahun_arsip}}</td> 
            <td>{{ $r->tingkat_perkembangan}}</td>   
            <td>
                {{$r->keterangan_inaktif}}
            </td>
            <td width="50%">  
                  Nomor : <b>{{ $r->nomor}}</b><br>
                  Nomor Arsip    : <b>{{$r->nomor_arsip}}</b><br>
                  Nomor Box       : <b>{{$r->nomor_box}}</b><br>
                  Nomor Rak       : <b>{{$r->nomor_rak}}</b><br> 
                  Jumlah          : <b> {{$r->jumlah_unit}} <b>
            </td> 
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
                        <button type="button" onclick="hapus_data_arsip_inactive('{{csrf_token()}}','{{ $r->id_inaktif }}')"
                          data-toggle="modal" class="btn btn-danger btn-xs btn-block">
                          <i class="glyphicon glyphicon-remove"> </i>Hapus
                      </button> 
                  </li> 
                @endif
                  <li>
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
                </button>
                  </li>
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
    $.extend( $.fn.dataTable.defaults, {
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
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    }); 
    $('.datatable-basic').DataTable();
    // END SCRIPT TABEL
</script>