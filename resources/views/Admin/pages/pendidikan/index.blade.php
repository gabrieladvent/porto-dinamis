@extends('Admin.pages.partials.main')

@section('adminKonten')
    <div class="card">
        <div class="card-header clearfix">
            <h4 class="card-title float-start">Pendidikan</h4>
            <a href="{{ route('pendidikan.create') }}" class="btn btn-primary float-end">+ Pendidikan</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Universitas</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th class="col-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item => $index)
                            <tr>
                                <td>{{ $item + 1 }}</td>
                                <td>{{ $index->judul }}</td>
                                <td>{{ $index->info1 }}</td>
                                <td>{{ $index->info2 }}</td>
                                <td>{{ $index->tgl_mulai_indo }}</td>
                                <td>{{ $index->tgl_akhir_indo }}</td>
                                <td>
                                    <a
                                        href="{{ route('pendidikan.edit', $index->id) }}"class="btn btn-warning btn-sm">Edit
                                    </a>
                                    <form action="{{ route('pendidikan.destroy', $index->id) }}" method="post"
                                        class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
