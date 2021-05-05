@extends('admin.layouts.index')

@section('content')
<div class="row">
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($guests as $guest)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $guest->name }}</td>
                <td>
                    <form action="" method="post">
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
                    Tidak ada data tamu
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
