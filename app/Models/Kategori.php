<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Kategori extends Model
{
    use HasFactory;

    //ini ditambahkan jika nama tabel kita tidak jamak (dalam b.inggris)
    protected $table = 'kategori'; 

    // ini jika kita menggunakan 
    protected $guarded = [];

    protected function barang(){
        return $this->belongsToMany(Barang::class);
    }
}
