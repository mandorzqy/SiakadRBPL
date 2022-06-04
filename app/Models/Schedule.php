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

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function users(){
        return $this->belongsToMany(User::class,'schedule)','schedule_id','user_id');
    }
    
}
