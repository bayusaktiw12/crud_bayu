<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    //nama tabel
    protected $table='clases';

    //fillabel
    protected $guarded= [];

    //relasi
    public function clases()
    {
    return $this->hasMany(User::class, 'class_id');
    }
}