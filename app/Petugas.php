<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $guarded = ['id'];
    public $timestamps = false;
    public function tim()
    {
        return $this->belongsTo(Tim::class, 'tim_id');
    }
}
