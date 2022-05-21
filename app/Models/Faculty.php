<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faculty extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    public function department(){
        return $this->hasMany(Department::class);
    }
}
