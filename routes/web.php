<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\akuntansitransaksiController@index');
    Route::get('akuntansitransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');
    
    Route::get('akuntansitransaksi/tambah', 'App\Http\Controllers\akuntansitransaksiController@tambah');
    Route::post('akuntansitransaksi/tambah_proses', 'App\Http\Controllers\akuntansitransaksiController@tambah_proses');
    Route::get('akuntansitransaksi/edit/{id}', 'App\Http\Controllers\akuntansitransaksiController@edit');
    Route::post('akuntansitransaksi/edit_proses', 'App\Http\Controllers\akuntansitransaksiController@edit_proses');
    Route::get('akuntansitransaksi/delete/{id}', 'App\Http\Controllers\akuntansitransaksiController@delete');
    
    Route::get('supplier', 'App\Http\Controllers\SupplierController@index');
    Route::get('supplier/tambah', 'App\Http\Controllers\SupplierController@tambah');
    Route::post('supplier/tambah_proses', 'App\Http\Controllers\SupplierController@tambah_proses');
    Route::get('supplier/edit/{id}', 'App\Http\Controllers\SupplierController@edit');
    Route::post('supplier/edit_proses', 'App\Http\Controllers\SupplierController@edit_proses');
    Route::get('supplier/delete/{id}', 'App\Http\Controllers\SupplierController@delete');
    

