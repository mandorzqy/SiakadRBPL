<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    // protected $primaryKey = 'info_id';
    protected $guarded=['id'];
    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
