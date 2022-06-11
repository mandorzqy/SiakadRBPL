<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function score(){
        return $this->hasMany(Score::class);
    }

    public function user(){
        return $this->belongsToMany(User::class,'classroom_user','classroom_id','user_id');
    }

    public function lecturers(){
        return $this->belongsTo(Lecturer::class,'lecturer_id');
    }
    
    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
    // public function users(){
    //     return $this->belongsToMany(User::class,'schedule)','schedule_id','user_id');
    // }
}
