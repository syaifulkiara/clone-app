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
				<h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
			</div>
			<!-- Card Body -->
			<div class="card-body">
			  <form action="{{route('profile.update', $users->id)}}" method="POST" enctype="multipart/form-data">
				 @csrf
				<div class="row g-2 mb-3">
					<div class="col-md">
						<div class="form-floating">
							<label for="floatingInputGrid">Nama</label>
							<input type="text" class="form-control" name="name" id="floatingInputGrid" value="{{$users->name}}">
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
							<label for="floatingInputGrid">Email address</label>
							<input type="email" class="form-control" id="floatingInputGrid" value="{{$users->email}}" readonly>
						</div>
					</div>
				</div>
				<div class="row g-2 mb-2">
					<div class="col-md">
						<div class="form-floating">
							<label for="floatingInputGrid">NIK</label>
							<input type="text" name="nik" class="form-control" id="floatingInputGrid" value="{{$users->nik}}">
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
							<label for="floatingInputGrid">Avatar</label>
							<input type="file" name="avatar" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">Update</button>
                <button type="button" class="btn btn-secondary btn-sm">Small button</button>
            </div>
        </form>
			</div>
		</div>
	</div>
</div>
@endsection