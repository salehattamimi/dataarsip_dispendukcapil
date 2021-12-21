
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{(asset('kabupaten_malang.png'))}}" type="image/x-icon">
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
<table id="myTable" style="font-size:11pt; border: 1px solid black;border-collapse: collapse;" border="1px" class="table table-bordered">
                    <thead>
                        <tr> 
                            <th style="width: 0.5%">No</th>
                            <th>Nomor Register / Akte</th> 
                            <th>Nama Bayi</th> 
                            <th>Tempat / Tanggal Lahir</th> 
                            <th>Alamat</th>
                            <th>Nama Ibu</th>  
                            <th>Nama Ayah</th>  
                            <th>Tanggal Terbit</th>  
                            <th>Komentar</th>  
                        </tr>
                    </thead>
                    <tbody> 
                        <?php $no=0; 
                        $bulan = '';?>
                        @foreach ($data_laporan_arsip as $r)
                        <?php $no++;  

                        
                        ?>
                        <tr>
                            <td align="center" style="width: 0.5%">{{ $no }}</td>
                            <td>{{ $r->nomor_akta }}</td>
                            <td>{{ $r->nama_bayi }}</td>
                            <td>{{ $r->tempat_lahir}} , {{ $r->tanggal_lahir}}</td> 
                            <td>{{$r->alamat}}<br> RT : {{$r->rt}}<br> RW : {{$r->rw}}  </td> 
                            <td>{{ $r->nama_ibu}}</td>   
                            <td>{{ $r->nama_ayah}}</td> 
                            <td>{{ $r->tanggal_terbit}}</td> 
                            <td>{!! $r->komentar !!}</td> 
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
</body>

</html>