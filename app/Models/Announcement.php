<?php

namespace App\Models;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Model;


class Announcement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'announcements';

    protected $fillable = ['subject', 'description', 'active'];
    public $timestamps = ['created_at', 'updated_at'];

    public function attachments() {
        return $this->hasMany(Attachment::class);
    }
}
