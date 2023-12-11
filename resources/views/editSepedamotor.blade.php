@extends('master')
@section('title', 'Edit Data Sepedamotor')

@section('konten')
	<h3>Edit Sepedamotor</h3>
	<a href="/sepedamotor"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($sepedamotor as $p)
	<form action="/sepedamotor/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodesepedamotor" value="{{ $p->kodesepedamotor }}"> <br/>
		<div class="form-group">
            <label class="control-label" for="merk">Merk Sepeda Motor</label>
            <input type="text" class="form-control" id="merk" name="merksepedamotor" value="{{ $p->merksepedamotor }}">
        </div>
		<div class="form-group">
			<label class="control-label" for="stock">Stock</label>
			<input type="number" class="form-control" id="stock" name="stocksepedamotor" value="{{ $p->stocksepedamotor }}">
		</div>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection