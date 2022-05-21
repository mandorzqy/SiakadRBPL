<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    public function department(){
        return $this->hasMany(Department::class);
    }
}
