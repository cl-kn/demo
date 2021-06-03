<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function getIndex()
    {
        // $query = Student::query();
        $query = Student::query();
        // 全件取得 +ページネーション
        $students = $query->orderBy('id', 'asc')->paginate(10); //【変更】desc → asc
        // $students = $query->sortBy();
        return view('student.list')->with('students', $students);
    }
}
