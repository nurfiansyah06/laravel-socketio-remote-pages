@extends('admin.layouts.index')

@section('content')
<h1>List Token Halaman</h1>
<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Token</th>
      <th scope="col">Halaman Awal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($tokens as $token)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $token->name }}</td>
        <td>{{ $token->token }}</td>
        <td>{{ $token->pages->url_page }}</td>
        <td>
           <form action="{{ url('admin/token/deletetoken',$token->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-xs">
                    Hapus
                </button>
            </form>
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
