@extends('master')
@section('title', 'Data Pegawai')

@section('konten')
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	{{-- create search field --}}
	<form action="/pegawai/cari" method="GET" class="form-inline">
		<input class="form-control mr-2" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="btn btn-primary my-2 my-sm-0" type="submit" value="CARI">
	</form>
	<br/>

 
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $pegawai->links()}}
@endsection
