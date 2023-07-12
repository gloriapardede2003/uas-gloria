@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('supplier/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $supplier->id ?>">
nama supplier <input type="text" name="nama_supplier" value="<?php echo $supplier->nama_supplier ?>"><br>
alamat supplier <input type="text" name="alamat_supplier" value="<?php echo $supplier->alamat_supplier ?>"><br>
hp <input type="text" name="hp" value="<?php echo $supplier->hp ?>"><br>
<input type="submit" value="Simpan">
</form>     
@endsection