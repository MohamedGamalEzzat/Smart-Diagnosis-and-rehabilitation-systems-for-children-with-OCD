<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminVideo extends Model
{
    use HasFactory;

    public function Video()
    {
        return $this->hasMany(Video::class);
    }

    public function VideoView()
    {
        return $this->hasMany(VideoView::class);
    }


    protected $table = 'admin_videos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'video_name',
        'video_file',
        'description',

    ];
}
