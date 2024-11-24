<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlImageUserpro extends Model
{
    protected $table = 'control_image_userpro';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image_userpro'
    ];
}
