@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('supplier/tambah_proses') }}" method="POST">
@csrf
nama supplier<input type="text" name="nama_supplier"><br>
alamat supplier <input type="text" name="alamat_supplier"><br>
hp<input type="text" name="hp"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection