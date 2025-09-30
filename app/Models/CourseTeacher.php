<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    protected $fillable = ['curse_id', 'teacher_id'];

    public function curse(){
        return $this->belongsTO(Curse::class);
    }

    public function teacher(){
        return $this->belongsTO(Teacher::class);
    }
    protected $table = 'course_teacher';
}
