<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{

    public function jurusan(){
        return $this->hasMany(jurusan::class, 'id_jurusan');
    }
    use HasFactory;
}
