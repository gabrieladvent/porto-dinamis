@extends('Admin.pages.partials.main')

@section('adminKonten')
    <div class="card">

        <div class="card-header clearfix">
            <h4 class="card-title float-start">Pengalaman</h4>
            <a href="{{ route('pengalaman.create') }}" class="btn btn-primary float-end">+ Pengalaman</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Posisi</th>
                            <th>Perusahaan</th>
                            <th>Tempat</th>
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
                                    <a href="{{ route('pengalaman.edit', $index->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('pengalaman.destroy', $index->id) }}" method="post"
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
