<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGame extends Model
{
    use HasFactory;
    public function Game()
    {
        return $this->hasMany(Game::class);
    }
    public function Gametwooo()
    {
        return $this->hasMany(Gametwooo::class);
    }
}
