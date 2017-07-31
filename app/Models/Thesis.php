<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'thesis';
    protected $fillable = ['title', 'description', 'category', 'tags', 'published_at', 'image'];

    public $timestamps = ['created_at', 'updated_at'];

    public function images() {
        return $this->hasMany(Image::class);
    }

}
