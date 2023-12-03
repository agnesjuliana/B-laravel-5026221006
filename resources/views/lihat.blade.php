@extends('master')
@section('title', 'View Data Pegawai')

@section('konten')
@foreach($pegawai as $p)
<div class="container-fluid">
    <div class="row">
      <div class="col border-right">
        Box kosong
      </div>
      <div class="col">
        {{-- <ul> --}}
            <h3>Data Pegawai</h3>
            <h5>Nama : {{ $p->pegawai_nama }} </h5>
            <h5>Jabatan : {{ $p->pegawai_jabatan }} </h5>
            <h5>Umur : {{ $p->pegawai_umur }} </h5>
            <h5>Alamat : {{ $p->pegawai_alamat }} </h5>
        {{-- </ul> --}}
		<a class="btn btn-primary" href="/pegawai">OK</a>
      </div>
    </div>
  </div>

@endforeach

@endsection