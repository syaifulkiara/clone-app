@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<table width="100%">
			<tr>
				<td><h6 class="m-0 font-weight-bold text-primary">Project Activity Updated</h6></td>
				<td align="right"></td>
			</tr>
		</table>
	</div>
	<div class="card-body">    
		<div class="table-responsive">
			<table width="100%" id="example" class="table table-striped">
				<thead>
					<tr class="data">
						<th>No</th>
						<th>Tanggal</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Dept</th>
						<th>Bekerja di</th>
						<th>Customer</th>
						<th>Project</th>
						<th>Aktifitas</th>
					</tr>
				</thead>
				<tbody>
				@foreach($activities as $row)
					<tr class="data">
						<td>{{$loop->iteration}}</td>
						<td>{{$row->day_date}}</td>
						<td>{{$row->id_user}}</td>
						<td>{{$row->start}}</td>
						<td>{{$row->ot}}</td>
						<td>{{$row->location}}</td>
						<td>{{$row->ot}}</td>
						<td>{{$row->project_no}}</td>
						<td>{{$row->activity}}</td>
					</tr>
				@endforeach	
			</tbody>				
		</table>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<script src="{{asset('assets/vendor/datatables/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/buttons.print.min.js')}}"></script> 
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- datepicker -->
<link rel="stylesheet" href="{{ asset('assets/vendor/datepicker/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/datepicker/jquery-ui-1.8.21.custom.css')}}" type="text/css"></link>   
<script src="{{ asset('assets/vendor/datepicker/jquery-ui.js')}}"></script>
<script>
	$( function() {
		$( "#datepicker").datepicker({ dateFormat: 'yy-mm-dd' }).val();
		$( "#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' }).val();
	} );
</script>
<script>
	$(document).ready(function() {

		$('#example').DataTable({
			dom: 'Bfrtip',
			ordering: true,
			paging: true,
			searching: true,
			pageLength: 10,
			buttons: [
			'excel'
			],
		});

	} );
</script>
@endpush