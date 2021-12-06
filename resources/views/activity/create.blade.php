@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div>
      <h6 class="m-0 font-weight-bold text-primary">Input Daily Activity</h6>
    </div>
  </div>
  <div class="card-body">
    <form action="{{ route('activity.store') }}" method="post" accept-charset="utf-8">
      @csrf
      <div class="form-group">
        <label>NIK :</label>
        <input type="text" class="form-control"value="{{ Auth::user()->id }}">
      </div>
      <div class="form-group">
        <label>Nama :</label>
        <input type="text" class="form-control" value="{{ Auth::user()->name }}">
      </div>
      <div class="form-group">
        <label>Tanggal :</label>
        <input type="text" class="form-control" name="day_date" value="{{strftime("%A, %d %B %Y")}}" readonly >
      </div>
      <div class="form-group">
        <label>Bekerja di :</label>
        <select class="form-control" name="location" required>
          <option value="">-pilih-</option>
          <option value="Office">Office</option>
          <option value="WFH">WFH</option>
          <option value="Site">Site</option>
        </select>
      </div>
      <div class="form-group">
        <label>Customer :</label>
        <select class="form-control" name="ot" id="fcustomer" required>
          <option value="">-pilih-</option>
          <option value="PT.Jasa Marga">PT.Jasa Marga</option>
          <option value="PT.Telkom">PT.Telkom</option>
          <option value="PT.Waskita">PT.Waskita</option>
          <option value="PT.Pos Indonesia">PT.Pos Indonesia</option>
          <option value="PT.Unilever">PT.Unilever</option>
        </select>
      </div>
      <div class="form-group">
        <label>Project :</label>
        <input type="text" name="project_no" id="fproject_manual" class="form-control" />
        <small id="klikmanual">Klik <a href="#" onclick="proj_manual()">manual</a>, apabila tdk ada pilihan</small>
        <small id="klikpilih" style="display:none">Klik <a href="#" onclick="proj_pilih()">pilihan</a> kembali</small>
      </div>
      <div class="form-group">
        <label>Aktifitas :</label>
        <textarea class="form-control" name="activity"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form> 
  </div>
</div>
@endsection