<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

//    public function company()
//    {
//        return $this->hasMany(Company::class);
//    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}