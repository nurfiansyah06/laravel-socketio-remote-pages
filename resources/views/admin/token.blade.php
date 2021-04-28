@extends('admin.layouts.index')

@section('content')
<h1>Pembuatan Token Halaman</h1>
<form action="{{ url('admin/token/createtoken') }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Halaman</label>
    <select class="form-control" name="page" id="exampleFormControlSelect1">
      <option value="/admin/page1">Jumlah Admin</option>
      <option value="/admin/page2">Jumlah Pengguna</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
