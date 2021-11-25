<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\User;

class PurchaseHistory extends Model
{
    use HasFactory;
    protected $guarded = [];
    function getCourse(){
        return $this->hasOne(Course::class, "id", "course_id");
    }
    function getUser(){
        return $this->hasOne(User::class, "id", "user_id");
    }
}
