<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function classrooms(){
        return $this->belongsTo(Classroom::class,'classroom_id','id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'schedule_user','schedule_id','user_id');
    }
    
}
