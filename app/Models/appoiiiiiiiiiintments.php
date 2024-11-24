<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoiiiiiiiiiintments extends Model
{
    protected $table = 'appoiiiiiiiiiintments';
    protected $primaryKey = 'id'; // تحديد المفتاح الرئيسي

    protected $fillable = [
        'user_id',
        'dddr_id',
        'date',
        'time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }


}
