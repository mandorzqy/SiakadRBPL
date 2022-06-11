<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function score(){
        return $this->hasMany(Score::class);
    }

    // public function schedule(){
    //     return $this->hasMany(Schedule::class,'id','schedule_id');
    // }

    public function classroom(){
        return $this->hasMany(Classroom::class,'id','classroom_id');
    }
}
