<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table ='suplier';
    protected $guarded =[];

    protected function barang(){
        return $this->belongsToMany(Barang::class);
    }
}
