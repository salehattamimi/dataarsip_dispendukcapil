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
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/ 
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
    <script type="text/javascript">
    function cetak() { 
        document.getElementById("btnCetak1").style.display = "none";  
        window.print(); 
        document.getElementById("btnCetak1").style.display = "";  
    }
    </script>    
</head> 
<body>

    <a id="btnCetak1" href='#' onclick="cetak()"><h3>[ PRINT ]<hr></h3></a> 
    <div id="header">
        <div class="col-md-1"> 
        </div>
    </div>
        <div class="col-md-10">
            DAFTAR ARSIP INAKTIF
        </div>
    <div style="align-content: center;text-align:center; "> 
        <div style="text-align: center;align-content: center;background-color:   "> {!! (env("APP_NAME")) !!}
        </div> 
    </div>
    <hr style="border:1px solid black;margin-top:0;line-height: 0%;">
    <div class="container">
        <div class="row">
            <div class=" table-responsive" id="konten" align="center"> 
                <table id="myTable" style="font-size:11pt; border: 1px solid black;border-collapse: collapse;" border="1px" class="table table-bordered">
                    <thead>
                        <tr> 
                            <th style="width: 0.5%">No</th>
                            <th>Nama Bayi</th> 
                            <th>Tempat / Tanggal Lahir</th> 
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
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
                            <td>{{ $r->nama_bayi }}</td>
                            <td>{{ $r->tempat_lahir}} , {{ $r->tanggal_lahir}}</td> 
                            <td>{{$r->alamat}}<br> RT : {{$r->rt}}<br> RW : {{$r->rw}}  </td> 
                            <td>{{$r->kecamatan}}</td>
                            <td>{{$r->kelurahan}}</td>
                            <td>{{ $r->nama_ibu}}</td>   
                            <td>{{ $r->nama_ayah}}</td> 
                            <td>{{ $r->tanggal_terbit}}</td> 
                            <td>{!! $r->komentar !!}</td> 
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