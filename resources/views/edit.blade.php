@extends('master.master')
@section('title', 'Edit Data')

@section('content')
	
	<br>
	<br>
	@foreach($pegawai as $peg)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $peg->pegawai_id }}"> <br/>
		Nama <input type="text" name="nama" value="{{ $peg->pegawai_nama }}" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" value="{{ $peg->pegawai_jabatan }}" required="required"> <br/>
		Umur <input type="number" name="umur" value="{{ $peg->pegawai_umur }}" required="required"> <br/>
		Alamat <textarea name="alamat" required="required">{{ $peg->pegawai_alamat }}</textarea><br/>
		<br>
		<input type="submit" value="Update Data">
	</form>
	@endforeach

@endsection