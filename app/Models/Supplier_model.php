<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_model extends Model
{
    use HasFactory;
    protected $table ="supplier";
    protected $primaryKey ="id";

    public function tampil_supplier(){
        $query = \DB::table('supplier')->get();
        return $query;
    }
}
