<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table ='pembeli';
    protected $guarded =[];

    protected function pembeli(){
        return $this->belongsToMany(pembeli::class);
    }
}
