@extends('index')
@section('tempat_content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<div class="heading-elements">
			<ul class="icons-list"> 
			</ul>
		</div>
	</div>

	<div class="panel-body">
 
		<br>
		<div class="row">
			
			<div class="col-md-12">
				@if (session()->has('status'))
				<script type="text/javascript">
					alertKu('success', "{{ session()->get('status') }}");
				</script>
				<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
					<button type="button" class="close" data-dismiss="alert">
						<span>×</span>
						<span class="sr-only">Close</span>
					</button>
					<span class="text-semibold">Berhasil! </span> {{ session()->get('status') }}
					{{session()->forget('status')}}
				</div>
				@endif
				@if (session()->has('statusT'))
				<div class="alert alert-warning alert-styled-left">
					<button type="button" class="close" data-dismiss="alert">
						<span>×</span>
						<span class="sr-only">Close</span>
					</button>
					<span class="text-semibold">Gagal!</span> {{ session()->get('statusT') }}    
					{{session()->forget('statusT')}}
				</div>
				@endif 
			</div>
			<div class="col-md-12">
				<div class="tab-content">
					<div class="tab-pane  animated fadeInLeftBigs active" id="tabBelumVerif">
						<div class="row">
							<div class="col-lg-12">
							<div class="panel panel-success">
									<div class="panel-heading">
										<h6 class="panel-title">
											<i class="icon-filter4"></i> Filter Data
										</h6> 
									</div>
									<div class="collapse in" id="filterBelumVerif">
										<div class="panel-body "> 

											<div class="row">
												<div class="col-md-3">&nbsp;</div>
												<div class="col-md-5">
													<div class="form-horizontal" action="#">
                                                    <form id="form_cetak_laporan_arsip"
														target="_blank"  method="post"
														action="{{ route('cetak_laporan_arsip') }}">
														{{ csrf_field() }}
														<div class="form-group">
															<label align="right" style="text-align: right"
															class="control-label col-lg-3">
															No Register / No Akta :
														</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" id="no_akta" name="nomor_akte">
														</div> 
													</div> 

													<div class="form-group">
														<label align="right" style="text-align: right"
														class="control-label col-lg-3">
														Nama Bayi :
													</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" id="nama_bayi" name="nama_bayi">
														</select>
													</div>
												</div> 
										<div class="form-group">
											<label align="right" style="text-align: right"
											class="control-label col-lg-3">
											Kecamatan :
										</label>
										<div class="col-lg-9">
										<select class="form-control select2" onchange="div_kelurahan('{{csrf_token()}}','#id_kecamatan','#form_cetak_laporan_arsip')"id="id_kecamatan" name="id_kecamatan">
													<option value ="0"> --- Tampilkan Semua --- </option>
											@foreach($data_kecamatan as $r)
													<option value="{{$r->id}}">{{$r->name}}</option>
											@endforeach
                            			</select>
										</div> 
										<input type="hidden" id="nama_kecamatan" name="nama_kecamatan" value="">
                						<input type="hidden" id="nama_kelurahan" name="nama_kelurahan" value="">

									</div>  
									<div class="form-group">
											<label align="right" style="text-align: right"
											class="control-label col-lg-3">
											Kelurahan :
										</label>
										<div class="col-lg-9">
										<select name="kelurahan_id"  id="kelurahan_id" data-placeholder="Nama Kelurahan" class="form-control select2"  onchange="
                            			var cur_value =  $(this).find('option:selected').text();
                            $('#nama_kelurahan').val(cur_value);" > 
											<option value="0">--- Tampilkan Semua ---</option> 
										</select>
										</div> 
									</div>  

									<div class="form-horizontal" action="#">
										<div class="form-group">
											<label align="right" style="text-align: right"
											class="control-label col-lg-3">
											Tahun Arsip :
										</label>
										<div class="col-lg-4">
											<input min="0" type="number" class="form-control" name="tahun_mulai" id="tahun_mulai" 
											oninput ="
											// var cur_value =  $(this).find('option:selected').text();
											$('#tahun_mulai2').val(this.value);
											// $('#indeks2').hide(500); 
											">
										</div>
										<div class="col-lg-1">
											s/d
										</div>
										<div class="col-lg-4">
											<input type="number" min="0" class="form-control" name="tahun_selesai" id="tahun_selesai"
											oninput ="
											// var cur_value =  $(this).find('option:selected').text();
											$('#tahun_selesai2').val(this.value);
											// $('#indeks2').hide(500); 
											">
										</div>
										</div> 
									</div>  
								</form>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">&nbsp;</div>
							<div class="col-lg-2"> 
								<button title="Tampilkan" type="button"
								class="btn btn-primary btn-sm btn-block btn_tampilkan"
								onclick="
								div_tabel_laporan_arsip(
									'{{csrf_token()}}'
									, '#div_tabel_laporan_arsip');
									">
									<i class="icon-filter3"></i>
									Tampilkan
								</button>
							</div>
							<div class="col-lg-2">  
								<button title="Cetak"
								class="btn bg-orange btn-sm btn-block"
								onclick="$('#form_cetak_laporan_arsip').submit()">
								<i class="glyphicon glyphicon-print"></i>
								Cetak
								</button>
							</div>
							<form id="form_export_laporan_arsip"
							target="_blank" method="post"
							action="{{ route('export_laporan_arsip') }}">
							{{ csrf_field() }}
							<div style="display: none" class="col-lg-4">
								<input min="0" type="number" class="form-control" name="tahun_mulai2" id="tahun_mulai2">
							</div>
							<div style="display: none" class="col-lg-4">
								<input type="number" min="0" class="form-control" name="tahun_selesai2" id="tahun_selesai2" >
							</div>  
							<div class="col-lg-2"> 
								<button onclick="$('#form_export_laporan_arsip').submit()" title="Export"
								class="btn bg-green btn-sm btn-block">
								<i class="glyphicon glyphicon-export"></i>
								Export Excel
								</button> 
							</div>
							</form>
							<div class="col-lg-3">&nbsp;</div>
						</div>
					</div>
				</div>
			</div>

			<div id="tabel_tim">
				<div class="panel panel-warning">
					<div class="panel-heading bg-primary"><b>Data Arsip Inactive</b>
						<div class="heading-elements">
							<ul class="icons-list"> 
							</ul>
						</div>
					</div>     
					<div id="div_tabel_laporan_arsip">
					</div>

				</div> 
			</div>
		</div>
	</div>
</div>

</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	$('.select2').select2();
	$('.btn_tampilkan').click();

</script>
@endsection

