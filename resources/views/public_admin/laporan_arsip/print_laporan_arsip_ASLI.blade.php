<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laporan Data Arsip Inaktif</title> 
    <style>
        body {
            background: white;
            font-size:11;
            text-align: center;
        }
        th{
        	text-align: center;
        }
        td{
        	text-align: center;
        }
        @page {
                margin: 100px 25px;
            }

            #header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: left;
                line-height: 35px;
                padding-left:50px;
            }

            #footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
    </style> 
    
</head>

<body>
    <div id="header">
        <div class="col-md-1">
            <img src="https://iakmataram.com/images/dataarsip.png" alt="" style="width: 50px; height: 50px">
        </div>
    </div>
        <div class="col-md-10">
            DAFTAR ARSIP INAKTIF
        </div>
    <div style="align-content: center;text-align:center; "> 
        <div style="text-align: center;align-content: center;background-color:   "> KOP SURAT
        </div> 
    </div>
    <hr style="border:1px solid black;margin-top:0;line-height: 0%;">
    <div class="container">
        <div class="row">
            <div class=" table-responsive" id="konten" align="center"> 
                <table id="myTable" style="font-size:11pt; border: 1px solid black;border-collapse: collapse;" border="1px" class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10%">Nomor Berkas</th>
                            <th style="width: 10%">
                                Nomor Klasifikasi  
                            </th>  
                            <th style="width: 10%">
                                Nomor Boks
                            </th> 
                            <th style="width: 10%">
                                RAK
                            </th style="width: 10%"> 
                            <th style="width: 10%">
                                Index
                            </th>
                            <th style="width: 10%">
                                Nomor BKU
                            </th> 
                            <th style="width: 10%%">
                                Bulan
                            </th> 
                            <th style="width: 15%">
                                Uraian Masalah
                            </th> 
                            <th style="width: 10%">
                                Pencipta Arsip / Seksi
                            </th> 
                            <th style="width: 10%">
                                Tahun
                            </th> 
                            <th style="width: 10%">
                                Jumlah
                            </th> 
                            <th style="width: 10%">
                                Keterangan
                            </th> 
                        </tr>
                    </thead>
                    <tbody> 
                        <?php $no=0; 
        				$bulan = '';?>
                        @foreach ($data_laporan_arsip as $r)
                        <?php $no++; 
                        $keterangan=str_ireplace('<p>','',$r->keterangan);
        				$keterangan2=str_ireplace('</p>','',$keterangan); 

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
                            <td align="center" style="width: 1%">
                                <?php echo $no; ?>
                            </td> 
                            <td>
                                {{ $r->kode_klasifikasi }}
                            </td>
                            <td>
                                {{ $r->nomor_box }}
                            </td>
                            <td>
                                {{ $r->nomor_rak }}
                            </td>
                            <td>
                                {{ $r->indeks }}
                            </td>
                            <td>
                                {{ $r->nomor_bku }}
                            </td>
                            <td>
                                {{ $bulan }}
                            </td> 
                            <td>
                                {{ $r->uraian_masalah }}
                            </td> 
                            <td>
                                {{ $r->nama_pemilik }}
                            </td>
                            <td>
                                {{ $r->tahun_arsip }}
                            </td>
                            <td>
                                {{ $r->jumlah_unit }}
                            </td>
                            <td>
                                {{ $keterangan2}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <div id="footer">
        Copyright &copy;PT Indoraj Arsip Multiguna
    </div>
</body>

</html>