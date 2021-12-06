@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<table width="100%">
			<tr>
				<td><h6 class="m-0 font-weight-bold text-primary">List Activity</h6></td>
				<td align="right"><a href="{{route('activity.create')}}" class="btn btn-primary">Input Activity</a></td>
			</tr>
		</table>
	</div>
	<div class="card-body">    
		<div class="table-responsive">
			<strong>Filter berdasarkan :</strong>
			<form action="" method="get">
				<div class="row">
					<div class="col-md-7">
						<table width="100%">
							<tr>
								<td width="20%">Tanggal</td>
								<td>:</td>
								<td>
									<input type="text" id="datepicker" name="fdatefrom" placeholder="Date From : ..." class="form-control" value="2021-07-14" />
								</td>
								<td align="center">
									-
								</td>
								<td>	
									<input type="text" id="datepicker2" name="fdateto" placeholder="Date To : ..." class="form-control" value="2021-07-14" />
								</td>
							</tr>
						</table>
					</div>
					<div class="col-md-3">
						<table width="100%">
							<td>Dept :</td>
							<td>
								<select name="fdept" class="form-control">
									<option value="">-Semua Dept-</option>
									<option value="SW" >Software</option>
								</select>
							</td>
						</table>
					</div>
					<div class="col-md-2">
						<input type="submit" name="submit" value="Cari" class="btn btn-primary btn-block" />
					</div>
				</div>
			</form>
			<br>
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
				@foreach($activities->overtime as $act)
					<tr class="data">
						<td>{{$loop->iteration}}</td>
						<td>{{strftime("%A, %d %B %Y",strtotime($act->day_date))}}</td>
						<td>{{$act->user_id}}</td>
						<td>{{$activities->name}}</td>
						<td>{{$act->ot}}</td>
						<td>{{$act->location}}</td>
						<td>{{$act->ot}}</td>
						<td>{{$act->project_no}}</td>
						<td>{{$act->activity}}</td>
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
