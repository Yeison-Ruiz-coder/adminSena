<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function area(){
        return $this->belongsTO(Area::class);
    }

    public function trainingCenter(){
        return $this->belongsTO(TrainingCenter::class);
    }

    public function CourseTeacher(){
        return $this->hasMany(CourseTeacher::class);
    }

    protected $table = 'teachers';
}
