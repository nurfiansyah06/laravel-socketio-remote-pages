@extends('admin.layouts.index')

@section('content')
    <h1>Remote Halaman</h1>
    <table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Halaman</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($tokens as $token)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $token->name }}</td>
        <td>
            <a href="{{ url('/page-tamu/'. $token->token) }}" class="btn btn-xs btn-primary d-inline">
                Jumlah Tamu
            </a>
            <a href="{{ url('/page-admin/'. $token->token) }}" class="btn btn-xs btn-primary d-inline">
                Jumlah Admin
            </a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="4" class="text-center">
            Tidak ada data token
        </td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
