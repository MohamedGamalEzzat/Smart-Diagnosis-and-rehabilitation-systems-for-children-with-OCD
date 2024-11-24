<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Doctor extends Authenticatable
{


    public function appoiiiiiiiiiintments()
    {
        return $this->hasMany(appoiiiiiiiiiintments::class);
    }
    protected $table = 'doctors';
    protected $primaryKey = 'd_id'; // تحديد المفتاح الرئيسي
    protected $fillable = ['d_name', 'd_email', 'd_password', 'd_phone']; // الحقول التي يمكن تعبئتها

    protected $hidden = ['created_at', 'updated_at','d_password','d_phone','d_email'];

}
