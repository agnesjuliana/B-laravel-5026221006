@extends('master')
@section('title', 'Edit Data Pegawai')

@section('konten')
	<h3>Edit Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<div class="form-group">
            <label class="control-label" for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
		<div class="form-group">
			<label class="control-label" for="jabatan">Jabatan</label>
			<input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">
		</div>
		<div class="form-group">
			<label class="control-label" for="umur">Umur</label>
			<input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
		</div>
		<div class="form-group">
			<label class="control-label" for="alamat">Alamat</label>
			<textarea class="form-control" id="alamat" name="alamat">{{ $p->pegawai_alamat }}</textarea>
		</div>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection