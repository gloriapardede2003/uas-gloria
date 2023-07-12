<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier_model;

class SupplierController extends Controller
{
    //
    public function index(){
        $mysupplier = new Supplier_model();
        $supplier = $mysupplier->tampil_supplier();
        
        $data = array('supplier' => $supplier);
        return view('supplier/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('supplier/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('supplier')
         ->insert([
             'nama_supplier'  =>  $request->nama_supplier,
             'alamat_supplier'  =>  $request->alamat_supplier,
             'hp'  =>  $request->hp

             
         ]);
         return redirect('supplier');
     }
 
     public function edit($id){
         // return ('Testing');
         $supplier = \DB::table('supplier')->where('id', $id)->first();
         //dd($akun);
         $data = array('supplier' => $supplier);
         return view('supplier/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('supplier')->where('id',$request->id)
         ->update([
            'nama_supplier'  =>  $request->nama_supplier,
            'alamat_supplier'  =>  $request->alamat_supplier,
            'hp'  =>  $request->hp
            
            
         ]);
         return redirect('supplier');
     }
 
     public function delete ($id){
         $query = \DB::table('supplier')->where('id',$id)->delete();
         return redirect('supplier');
     }
}
