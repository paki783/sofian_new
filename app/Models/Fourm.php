<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourm extends Model
{
    use HasFactory;
    protected $guarded = [];
    function getUser(){
        return $this->hasOne(User::class, "id", "user_id");
    }
    function getComments(){
        return $this->hasMany(FourmComment::class, "forum_id", "id");
    }
}
