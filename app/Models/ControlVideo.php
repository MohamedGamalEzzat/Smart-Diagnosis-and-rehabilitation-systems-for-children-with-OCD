<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlVideo extends Model
{

    public function octtyydvideos()
    {
        return $this->hasMany(octtyydvideos::class);
    }


    protected $table = 'control_video';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cvideo_name', 'cvideo_file', 'cdescription', 'cvideo_time',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
