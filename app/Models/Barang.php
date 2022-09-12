<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suplier;
use App\Models\kategori;

class Barang extends Model
{
    use HasFactory;
    protected $table ='barang';
    protected $guarded =[];

    protected function suplier(){
        return $this->belongsTo(Suplier::class);
    }
    protected function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
