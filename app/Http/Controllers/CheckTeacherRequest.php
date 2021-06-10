<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckTeacherRequest extends Controller
{
    //
    public function getIndex()
    {
        return view(view: 'teacher.new_index');
    }

    //https://laraweb.net/knowledge/2156/
    // DIのフォームリクエストはuseでパスを省略してもOK
    public function confirm(\App\Http\Requests\CheckStudentRequest $request)
    {
        $data = $request->all();
        return view('teacher.new_confirm')->with($data);
    }
}
