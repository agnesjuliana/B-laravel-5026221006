@extends('master')
@section('title', 'Tambah Data Pegawai')

@section('konten')

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label" for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
        </div>
        <div class="form-group">
            <label class="control-label" for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan">
        </div>
        <div class="form-group">
            <label class="control-label" for="umur">Umur</label>
            <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur" name="umur">
        </div>
        <div class="form-group">
            <label class="control-label" for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat"></textarea>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
    </form>
@endsection
