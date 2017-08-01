<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['thesis_id', 'filename', 'default_img'];

    public function thesis() {
        //return $this->belongsTo('App\Models\Thesis');
        return $this->belongsTo(Thesis::class);
    }
}
