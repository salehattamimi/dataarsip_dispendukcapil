@extends('index')
@section('tempat_content')
<div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel bg-success">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <!-- <span class="heading-text badge bg-teal-800">+53,6%</span> -->
                                </div>

                                <h3 class="no-margin">
                                    {{$total_inaktif}}
                                </h3>
                                Jumlah Total Arsip Inaktif
                                <div class="text-muted text-size-small">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel bg-info">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <!-- <span class="heading-text badge bg-teal-800">+53,6%</span> -->
                                </div> 
                                <h3 class="no-margin">
                                    {{$data_inaktif}}
                                </h3>
                                Jumlah File Alih Media
                                <div class="text-muted text-size-small">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- Form horizontal -->
                <div class="panel panel-flat">
                    <div class="panel-heading"> 
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div id="div_grafik_barang_masuk">

                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div id="div_grafik_media">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
<script type="text/javascript"> 
$(document ).ready(function() { 
    div_grafik_barang_masuk('{{csrf_token()}}', '#div_grafik_barang_masuk'); 
    div_grafik_media('{{csrf_token()}}', '#div_grafik_media');  
});
</script>
@endsection