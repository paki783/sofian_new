<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Attachment;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    function getCategory(){
        return $this->hasOne(Category::class, "id", "category_id");
    }
    function getPictures(){
        return $this->hasMany(Attachment::class, "type_id", "id")->where("type", "course");
    }
    function getVideos(){
        return $this->hasMany(Attachment::class, "type_id", "id")->where("type", "course_videos");
    }
}
