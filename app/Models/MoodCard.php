<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodCard extends Model
{
    public function childMcards()
    {
        return $this->hasMany(ChildMcard::class);
    }


    protected $table = 'mood_card';
    protected $primaryKey = 'id';
    protected $fillable = [
        'mood',
         'photo',
         'description',
    ];
}
