<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
    protected $table = 'jaksa';
    protected $guarded = ['id'];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'golongan_id');
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
