@extends('master')
@section('title', 'Tambah Data Karyawan Belanja')

@section('konten')

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="kodepegawai">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kodepegawai" placeholder="Enter Kode Pegawai" name="kodepegawai">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="namalengkap">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namalengkap" placeholder="Enter Nama Lengkap" name="namalengkap">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="divisi">Divisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="divisi" placeholder="Enter Divisi" name="divisi">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="departemen">Departemen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="departemen" placeholder="Enter Departemen" name="departemen">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" value="SIMPAN">
            </div>
        </div>
    </form>


@endsection
