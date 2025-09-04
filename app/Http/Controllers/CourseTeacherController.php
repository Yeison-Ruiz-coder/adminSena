<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
    public function index()
    {
        $courseTeachers = CourseTeacher::all();
        return view('course_teacher.index', compact('courseTeachers'));
    }

    public function create()
    {
        return view('course_teacher.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'curse_id' => 'required|exists:curses,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);
        CourseTeacher::create($validated);
        return redirect()->route('course_teacher.index');
    }

    public function show(CourseTeacher $courseTeacher)
    {
        return view('course_teacher.show', compact('courseTeacher'));
    }

    public function edit(CourseTeacher $courseTeacher)
    {
        return view('course_teacher.edit', compact('courseTeacher'));
    }

    public function update(Request $request, CourseTeacher $courseTeacher)
    {
        $validated = $request->validate([
            'curse_id' => 'required|exists:curses,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);
        $courseTeacher->update($validated);
        return redirect()->route('course_teacher.index');
    }

    public function destroy(CourseTeacher $courseTeacher)
    {
        $courseTeacher->delete();
        return redirect()->route('course_teacher.index');
    }
}
