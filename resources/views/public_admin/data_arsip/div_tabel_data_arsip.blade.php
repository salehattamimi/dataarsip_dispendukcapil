<div class="panel-body">
 <table class="table table-bordered table-hover datatable-basic">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Arsip</th> 
            <th>Pemilik</th> 
            <th>Lokasi</th> 
            <th>Tanggal Arsip</th> 
            <th style="width: 20%">Nomor Berkas</th>  
            <th style="width: 4%">Jumlah Unit</th> 
            <th>Kondisi</th> 
            <th>Act</th>
        </tr>
    </thead>
    <tbody>

        <?php $count = 0; 
        $bulan = '';
        ?>
        @foreach ($data_arsip as $r)
        <?php $count++; 
        if($r->bulan_arsip == 1)
            $bulan = 'Januari';
        else if($r->bulan_arsip == 2)
            $bulan = 'Februari';
        else if($r->bulan_arsip == 3)
            $bulan = 'Maret';
        else if($r->bulan_arsip == 4)
            $bulan = 'April';
        else if($r->bulan_arsip==5)
            $bulan='Mei';
        else if($r->bulan_arsip==6)
            $bulan = 'Juni';
        else if($r->bulan_arsip==7)
            $bulan = 'Juli';
        else if($r->bulan_arsip==8)
            $bulan = 'Agustus';
        else if($r->bulan_arsip==9)
            $bulan = 'September';
        else if($r->bulan_arsip==10)
            $bulan = 'Oktober';
        else if($r->bulan_arsip==11)
            $bulan = 'November';
        else if($r->bulan_arsip==12)
            $bulan = 'Desember';

        ?> 

        <tr>
            <td align="center">{{ $count }}</td>
            <td width="14%">{{ $r->nama_arsip }}</td>
            <td>{{ $r->nama_pemilik}}</td> 
            <td>{{ $r->nama_lokasi}}</td> 
            <td>{{ $bulan}} {{$r->tahun_arsip}}</td>  
            <td>  
                  Nomor Berkas    : <b>{{$r->nomor_berkas}}</b><br>
                  Nomor Sementara : <b>{{ $r->nomor_sementara}}</b><br>
                  Nomor Box       : <b>{{$r->nomor_box}}</b><br>
                  Nomor Rak       : <b>{{$r->nomor_rak}}</b><br>
                  Nomor BKU       : <b>{{$r->nomor_bku}}</b>
            </td> 
            <td>
                {{$r->jumlah_unit}} {{$r->nama_satuan}}
            </td>
            <td>
                {{$r->nama_kondisi}}
            </td>
            <td align="center"> 
                <div class="btn-group btn-block btn-group-velocity">
                    <button type="button" class="btn bg-blue btn-sm btn-block dropdown-toggle"
                    data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Act
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" onclick="
                            update_modal_artikel('{{csrf_token()}}', '{{ $r->id }}', '#ModalTealSm')
                            " id="modal_update_artikel" class="btn bg-teal-400 btn-block">
                            <i class="glyphicon glyphicon-edit"> </i>Edit
                        </button>
                    </li>
                    <li>  
                        <button type="button" onclick="hapus_data_artikel('{{csrf_token()}}','{{ $r->id }}')"
                          data-toggle="modal" class="btn btn-danger btn-xs btn-block">
                          <i class="glyphicon glyphicon-remove"> </i>Hapus
                      </button> 
                  </li> 
                  <li>
                    <button type="button" onclick=" 
                    modal_upload_portofolio('{{csrf_token()}}', '{{ $r->id }}', '#ModalKuning'); 
                    " class="btn btn-warning btn-xs btn-block">
                    <i class="glyphicon glyphicon-upload"></i> Upload
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