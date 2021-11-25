<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourmComment extends Model
{
    use HasFactory;
    protected $guarded = [];
    function getUser(){
        return $this->hasOne(User::class, "id", "user_id");
    }
}
