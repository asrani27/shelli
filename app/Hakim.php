<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hakim extends Model
{
    protected $table = 'hakim';
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
