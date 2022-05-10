<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    protected $table = 'perkara';
    protected $guarded = ['id'];

    public function sidang()
    {
        return $this->hasOne(Sidang::class, 'perkara_id');
    }

    public function hakim()
    {
        return $this->belongsTo(Hakim::class, 'hakim_id');
    }

    public function jaksa()
    {
        return $this->belongsTo(Jaksa::class, 'jaksa_id');
    }

    public function panitera()
    {
        return $this->belongsTo(Panitera::class, 'panitera_id');
    }
}
