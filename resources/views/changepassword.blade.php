@extends('layouts.master')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <div>
    <h6 class="m-0 font-weight-bold text-primary">Form Ubah Password</h6>
    </div>
    </div>
    <div class="card-body">
    <form>
    <div class="form-group">
        <label>NIK :</label>
        <input type="text" name="fnik" class="form-control" name="fnik" value="C58" readonly>
    </div>
    <div class="form-group">
        <label>Password Lama :</label>
        <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="password" value=""  >
        @error('current_password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label>Password Baru :</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value=""  >
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label>Konfirmasi Password :</label>
        <input type="password" class="form-control" name="password_confirmation" value=""  >
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Simpan</button>
    </form> 
    </div>
    </div>
@endsection