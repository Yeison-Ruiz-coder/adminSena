<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\TrainingCenter;
use App\Models\Area;
use App\Models\Curse;
use App\Models\CourseTeacher;
use App\Models\Apprentice;
use App\Models\Computer;

use Illuminate\Http\Request;

class Ormcontroller extends Controller
{
    public function consulta(){

        $curses = CourseTeacher::all();
        return ($curses);

    }
}
