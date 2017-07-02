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
    public $timestamps = ['created_at', 'updated_at'];
}
