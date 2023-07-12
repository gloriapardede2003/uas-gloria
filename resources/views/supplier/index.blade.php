@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('supplier/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>HP</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($supplier as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->nama_supplier }}</td>
    <td>{{ $rows->alamat_supplier }}</td>
    <td>{{ $rows->hp }}</td>
   

    
    <td>
        <a href="{{ asset('supplier/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('supplier/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection