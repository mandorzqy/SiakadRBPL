<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function classrooms(){
        return $this->hasMany(Classroom::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
