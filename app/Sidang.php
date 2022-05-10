<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidang extends Model
{
    protected $table = 'sidang';
    protected $guarded = ['id'];

    public function perkara()
    {
        return $this->belongsTo(Perkara::class, 'perkara_id');
    }
}
