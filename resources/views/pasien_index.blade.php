@extends('layouts.app_modern', ['title' => 'Data Pasien'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pasien</div>
                    <div class="card-body">
                        <div class="row mb-3 mt-3">
                            <div class="col-md-4 h3">
                                Data Pasien
                            </div>
                            <div class="col-md-5">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="text" name="q" placeholder="Cari Nama, No Pasien" value="{{ request('q') }}" aria-label="Search">
                                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <a href="/pasien/create" class="btn btn-primary btn-md float-end">Tambah Pasien</a>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Pasien</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Usia</th>
                                    <th>Foto</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_pasien }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->umur }}</td>
                                        <?php $foto=$item->foto ? $item->foto : '0.png' ?>
                                        <td><img src="/storage/images/{{ $foto }}" alt="foto" height="30px"></td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="/pasien/{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </a>&nbsp;
                                            <form action="/pasien/{{ $item->id }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm ml-2"
                                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $pasien->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection