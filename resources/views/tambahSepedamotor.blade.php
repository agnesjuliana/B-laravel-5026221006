@extends('master')
@section('title', 'Tambah Data Keranjang Belanja')

@section('konten')

    <a href="/sepdamotor"> Kembali</a>

    <br />
    <br />

    <form action="/sepedamotor/store" class="form-horizontal" method="post">
        {{ csrf_field() }}
        {{-- <div class="form-group">
            <label class="control-label col-sm-2" for="email">ID:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="ID" placeholder="Enter ID" name="ID">
            </div>
        </div> --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="merk">Merk Sepeda Motor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merk" placeholder="Enter Jumlah" name="merksepedamotor">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="stock">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stock" placeholder="Enter Stock" name="stocksepedamotor">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>


@endsection
