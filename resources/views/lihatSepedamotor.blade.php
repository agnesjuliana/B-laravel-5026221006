@extends('master')
@section('title', 'View Data Sepedamotor')

@section('konten')
@foreach($sepedamotor as $p)
<div class="container-fluid">
    <div class="row">
      <div class="col border-right">
        Box kosong
      </div>
      <div class="col">
        {{-- <ul> --}}
            <h3>Data Sepedamotor</h3>
            <h5>Merk Sepeda Motor : {{ $p->merksepedamotor }} </h5>
            <h5>Stock : {{ $p->stocksepedamotor }} </h5>
            <h5>Tersedia : {{ $p->tersedia }} </h5>
        {{-- </ul> --}}
		<a class="btn btn-primary" href="/sepedamotor">OK</a>
      </div>
    </div>
  </div>

@endforeach

@endsection