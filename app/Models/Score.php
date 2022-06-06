<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $with=['user','course'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    // public function forms(){
    //     return $this->belongsToMany(Form::class,'form_score','score_id','form_id');
    // }

    public function forms(){
        return $this->belongsTo(Form::class,'form_id');
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id');
    }
}
