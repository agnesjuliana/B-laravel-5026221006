@extends('master')
@section('title', 'Sepeda Motor')

@section('konten')
    <h3>Data Sepeda Motor</h3>

    <a href="/sepedamotor/tambah"> + Tambah Sepeda Motor Baru</a>

    <br />
    <br />

    {{-- create search field --}}
    <form action="/sepedamotor/cari" method="GET" class="form-inline">
        <input class="form-control mr-2" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input class="btn btn-primary my-2 my-sm-0" type="submit" value="CARI">
    </form>
    <br />


    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Sepeda Motor</th>
            <th>Merk Sepeda Motor</th>
            <th>Stock Sepeda Motor</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepedamotor as $p)
            <tr>
                <td>{{ $p->kodesepedamotor }}</td>
                <td>{{ $p->merksepedamotor }}</td>
                <td>{{ $p->stocksepedamotor }}</td>
				<td>
					<input class="form-check-input" type="checkbox" disabled value="" {{ $p->tersedia === 'Y' ? 'checked' : '' }} id="flexCheckDefault">
				</td>
                {{-- <td>
                    @if ($p->tersedia == 'Y')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-ban" viewBox="0 0 16 16">
                            <path
                                d="M15 8a6.973 6.973 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
                        </svg>
                    @endif
                </td> --}}
                <td>
                    <a class="btn btn-info" href="/sepedamotor/lihat/{{ $p->kodesepedamotor }}">View</a>
                    <a class="btn btn-warning" href="/sepedamotor/edit/{{ $p->kodesepedamotor }}">Edit</a>
                    <a class="btn btn-danger" href="/sepedamotor/hapus/{{ $p->kodesepedamotor }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sepedamotor->links() }}
@endsection
