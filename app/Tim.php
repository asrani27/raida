<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $table = 'tim';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function anggota()
    {
        return $this->hasMany(Petugas::class, 'tim_id');
    }
}
