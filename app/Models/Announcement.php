<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Announcement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'announcements';

    protected $fillable = ['subject', 'description'];
    public $timestamps = ['created_at', 'updated_at'];
}
