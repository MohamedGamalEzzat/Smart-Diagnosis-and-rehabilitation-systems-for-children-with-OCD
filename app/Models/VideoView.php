<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoView extends Model
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



    protected $table = 'video_views';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'admin_video_id',
        'views_count',
        'watch_duration',
        'video_status',
    ];
}
