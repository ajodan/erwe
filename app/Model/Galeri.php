<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    public function Kategori()
    {
        return $this->belongsTo('App\Model\KategoriGaleri', 'kategori_galeri_id');
    }


    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }
}
