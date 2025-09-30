<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curse extends Model
{
    use HasFactory;

    protected $fillable = ['curse_number', 'day'];

    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }

    public function area(){
        return $this->belongsTO(Area::class);
    }

    public function trainingCenter(){
        return $this->belongsTO(TrainingCenter::class);
    }

    public function CourseTeacher(){
        return $this->hasMany(CourseTeacher::class);
    }

    protected $table = 'courses';

}
