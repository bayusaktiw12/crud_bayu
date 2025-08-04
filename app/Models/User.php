<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //nama tabel
    protected $stable='users';

    //fillabel
    protected $guarded= [];

    //relasi
    public function clas()
    {
    return $this->belongsTo(Clas::class, 'class_id');
    }
}