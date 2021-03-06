<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    protected $fillable = ['klasifikasi','status'];
    protected $table = 'klasifikasi';
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
