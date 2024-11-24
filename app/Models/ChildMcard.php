<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildMcard extends Model
{


    protected $table = 'child_mcards';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'mood_card_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moodCard()
    {
        return $this->belongsTo(MoodCard::class);
    }

    // public function results()
    // {
    //     return $this->hasMany(Result::class);
    // }
}
