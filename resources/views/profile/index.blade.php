@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-xl-4 col-lg-5">
		<!-- Area Chart -->
		<div class="card shadow mb-4">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Avatar</h6>
			</div>
			<div class="card-body">
				<div class="chart-area">
					<img src="{{asset(Auth::user()->avatar)}}" width="320" height="320" class="img-profile rounded-circle">
				</div>
			</div>
		</div>

	</div>

	<!-- Donut Chart -->
	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header">
				<h6 class="float-left m-0 font-weight-bold text-primary">My Profile</h6>
				<a href="{{route('profile.edit', $users->id)}}"><h6 class="float-right m-0 font-weight-bold text-danger"><i class="fas fa-edit"></i> Edit Info Profile</h6></a>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<table class="table table-sm">
                  <tbody>
                    <tr>
                      <td class="table-info" width="100px">Nama</td>
                      <td>{{ $users->name }}</td>
                    </tr>
                    <tr>
                      <td class="table-info">Nik</td>
                      <td>{{ $users->nik }}</td>
                    </tr>
                    <tr>
                      <td class="table-info">Email</td>
                      <td>{{ $users->email }}</td>
                    </tr>            
                  </tbody>
                </table>
			</div>
		</div>
	</div>
</div>
@endsection