<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gametwooo extends Model
{
    public function adminGame()
    {
        return $this->belongsTo(AdminGame::class, 'admin_game_id');
    }

    // علاقة اللعبة مع جدول المستخدمين
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = 'gametwooo';
    protected $primaryKey = 'id';
    protected $fillable = [
         'scoree',
           'time',
            'user_id',
             'admin_game_id'
            ];
}
