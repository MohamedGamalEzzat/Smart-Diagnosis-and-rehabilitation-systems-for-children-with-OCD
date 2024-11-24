<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class octtyydvideos extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ControlVideo()
    {
        return $this->belongsTo(ControlVideo::class);
    }

    protected $table = 'octtyydvideos';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'control_video_id', 'oovideo_time', 'vvvideo_completed'];
    protected $hidden = ['created_at', 'updated_at'];
}
