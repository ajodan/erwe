<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Kategori()
    {
        return $this->belongsTo('App\Model\KategoriArtikel', 'kategori_id');
    }


    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }
}
