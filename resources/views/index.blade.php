@extends('master.master')
@section('title', 'Data Pegawai')

@section('content')

	<table class="table">
	  <thead>
	    <tr>
	      <!-- <th scope="col">No.</th> -->
	      <th scope="col">Nama</th>
	      <th scope="col">Jabatan</th>
	      <th scope="col">Umur</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($pegawai as $peg)
		    <tr>
		      <td>{{ $peg->pegawai_nama }}</td>
		      <td>{{ $peg->pegawai_jabatan }}</td>
		      <td>{{ $peg->pegawai_umur }}</td>
		      <td>{{ $peg->pegawai_alamat }}</td>
		      <td>
		      	<a href="pegawai/edit/{{ $peg->pegawai_id }}">Edit</a>
		      	|
		      	<a href="pegawai/hapus/{{ $peg->pegawai_id }}">Hapus</a>
		      </td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection