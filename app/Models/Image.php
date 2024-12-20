<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
    protected $primaryKey = 'id'; // تحديد المفتاح الرئيسي
    protected $fillable = ['user_id', 'image_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
