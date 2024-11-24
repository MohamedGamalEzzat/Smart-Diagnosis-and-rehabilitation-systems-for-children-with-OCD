<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function adminGame()
    {
        return $this->belongsTo(AdminGame::class, 'admin_game_id');
    }

    // علاقة اللعبة مع جدول المستخدمين
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $fillable = [
         'score',
          'levels',
           'start_time',
            'user_id',
             'admin_game_id'
            ];

}
