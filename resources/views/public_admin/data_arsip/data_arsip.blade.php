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

		<div class="row">
			<div class="col-md-6"> 
				<button type="button" id="modal_tambah" class="btn bg-primary btn-labeled legitRipple" onclick="tambah_data_arsip('{{csrf_token()}}','#ModalBiruSm')">Tambah Data Arsip <b><i class=" glyphicon glyphicon-pencil"></i></b></button> 
			</div> 
		</div>
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
								<div class="panel panel-primary">
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
													<div class="form-group">
														<label align="right" style="text-align: right"
														class="control-label col-lg-3">
														Indeks Arsip :
													</label>
													<div class="col-lg-9">
														<select class="form-control select3" name="data_indeks" id="data_indeks" required="" style="width: 100%"> 
															<option value="0">-- Tampilkan Semua --</option>
															@foreach($data_indeks as $r)
															<option value="{{$r->id}}">{{$r->nama_indeks}}</option>  
															@endforeach
														</select>
													</div>
												</div>
												<div class="form-group">
														<label align="right" style="text-align: right"
														class="control-label col-lg-3">
														Lokasi Arsip :
													</label>
													<div class="col-lg-9">
														<select  class="form-control select3" name="data_lokasi" id="data_lokasi" required="" style="width: 100%"> 
															<option value="0">-- Tampilkan Semua --</option>
															@foreach($data_lokasi as $r)
															<option value="{{$r->id}}">{{$r->nama_lokasi}}</option>  
															@endforeach
														</select>
													</div>
												</div>


												<div class="form-group">
														<label align="right" style="text-align: right"
														class="control-label col-lg-3">
														Kondisi Arsip :
													</label>
													<div class="col-lg-9">
														<select class="form-control select3" name="data_kondisi" id="data_kondisi" required="" style="width: 100%"> 
															<option value="0">-- Tampilkan Semua --</option>
															@foreach($data_kondisi as $r)
															<option value="{{$r->id}}">{{$r->nama_kondisi}}</option>  
															@endforeach
														</select>
													</div>
												</div>  
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">&nbsp;</div>
										<div class="col-lg-4"> 
											<button title="Tampilkan" type="button"
											class="btn btn-primary btn-sm btn-block btn_tampilkan"
											onclick="
											div_tabel_data_arsip(
												'{{csrf_token()}}'
												, '#div_tabel_data_arsip');
												">
												<i class="icon-filter3"></i>
												Tampilkan
											</button>
										</div>
										<div class="col-lg-4">&nbsp;</div>
									</div>
								</div>
							</div>
						</div>

						<div id="tabel_tim">
							<div class="panel panel-primary">
								<div class="panel-heading bg-primary"><b>Data Tim</b>
									<div class="heading-elements">
										<ul class="icons-list"> 
										</ul>
									</div>
								</div>     
								<div id="div_tabel_data_arsip">
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
    		$('.select3').select2();
			$('.btn_tampilkan').click();

		</script>
		@endsection

