<?php

namespace App\Models;

use App\Models\Major;
use App\Models\Score;
use App\Models\Schedule;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $guarded=['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function score(){
        return $this->hasMany(Score::class);
    }

    public function major(){
        return $this->hasOne(Major::class,'id','major_id');
    }

    public function schedules(){
        return $this->belongsToMany(Schedule::class,'schedule_user','user_id','schedule_id');
        // 'schedule_user','user_id','schedule_id'
    }

    public function lecturers(){
        return $this->belongsTo(Lecturer::class,'id','lecturer_id');
    }

    public function classrooms(){
        return $this->belongsToMany(Classroom::class,'classroom_user','user_id','classroom_id');
    }


    protected function type(): Attribute
    {
        return new Attribute(
        get: fn ($value) =>  ["mahasiswa", "dosen","admin"][$value],
        );
    }
}
