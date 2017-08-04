<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //
    protected $fillable = ['filename', 'origname', 'announcement_id'];

    public function announcement() {
        return $this->belongsTo(Announcement::class);
    }
}
