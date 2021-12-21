<table class="table datatable-basic">
	<thead>
	<tr>
		<th style="width: 120px;">No</th>
		<th>Nama File</th>
		<th>Keterangan</th>
		<th>Ukuran</th>
		<th>Nama File</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
	@php $no=0; @endphp
	@foreach ($data_arsip_inactive_file as $r)
	@php $no++; @endphp
	<tr>
		<td class="tCenter" style="width: 1%"><?php echo $no; ?></td>
		<td class="tLeft">
			{{$r->nama_file}}
		</td>
		<td class="tLeft">
			{{$r->keterangan}}
		</td> 
		<td class="tLeft">
			{{$r->ukuran}}
		</td>
		<td class="tLeft">
			<?php
			$pathView = explode("/", $r['path']);
			echo $pathView[count($pathView) - 1];
			?>
			{{$r->path}}
		</td>
		<td class="tLeft">
			<a href="{{asset('file_upload/'.$r->path)}}" target="_blank">link</a>
		</td>
		<td class="tCenter">
			<?php
			if ($r['status'] == 0) {
				?>
				<button title="hapus" type="button" class="btn btn-danger btn-icon btn-rounded btn-xs" onclick="hapus_upload_data_arsip_inactive('{{csrf_token()}}', '{{$r->id}}', '{{$id}}', '#listupload{{$id}}');"><i
							class="icon-trash"></i></button>
			<?php } else {
				echo "&nbsp;";
			} ?>
		</td>
	</tr>
	@endforeach
	</tbody>
</table> 
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