<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function adminVideo()
    {
        return $this->belongsTo(AdminVideo::class, 'admin_video_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $fillable = [

        'entry_time',
        'duration_minutes',
        'view',
        'start_time',
        'watch_duration',
        'user_id',
        'admin_video_id',
    ];
}
