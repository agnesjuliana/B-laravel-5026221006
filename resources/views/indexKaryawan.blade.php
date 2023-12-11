@extends('master')
@section('title', 'Karyawan')

@section('konten')
    <h3>Data Karyawan</h3>


    <br />
    <br />

		@if (session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
		@endif
		
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID Karyawan</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
            @foreach ($karyawan as $p)
        <tr>
            <td>{{ $p->kodepegawai }}</td>
            <td>{{ Str::upper($p->namalengkap) }}</td>
            <td>{{ $p->divisi }}</td>
            <td>{{ Str::lower($p->departemen) }}</td>
            <td>
                <a class="btn btn-danger" href="/karyawan/hapus/{{ $p->kodepegawai }}">Hapus Data</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br />
    <br />
    <a class="btn btn-primary" href="/karyawan/tambah">+ Tambah karyawan Baru</a>
@endsection
