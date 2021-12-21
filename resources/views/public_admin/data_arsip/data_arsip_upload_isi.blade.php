<table class="table datatable-basic">
	<thead>
	<tr>
		<th style="width: 120px;">No</th>
		<th>Judul Foto</th>
		<th>Deskripsi Foto</th>
		<th>Nama File</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
	@php $no=0; @endphp
	@foreach ($data_artikel_file as $r)
	@php $no++; @endphp
	<tr>
		<td class="tCenter" style="width: 1%"><?php echo $no; ?></td>
		<td class="tLeft">
			{{$r->judul_foto}}
		</td>
		<td class="tLeft">
			{{$r->deskripsi}}
		</td>
		<td class="tLeft">
			<?php
			$pathView = explode("/", $r['path_file']);
			echo $pathView[count($pathView) - 1];
			?>
			{{$r->path_file}}
		</td>
		<td class="tLeft">
			<a href="{{asset('file_upload/'.$r->path_file)}}" target="_blank">link</a>
		</td>
		<td class="tCenter">
			<?php
			if ($r['status'] == 0) {
				?>
				<button title="hapus" type="button" class="btn btn-danger btn-icon btn-rounded btn-xs" onclick="hapus_upload_artikel('{{csrf_token()}}', '{{$r->id}}', '{{$id}}', '#listupload{{$id}}');"><i
							class="icon-trash"></i></button>
			<?php } else {
				echo "&nbsp;";
			} ?>
		</td>
	</tr>
	@endforeach
	</tbody>
</table> 