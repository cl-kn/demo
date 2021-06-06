<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckStudentRequest extends Controller
{
    //
    public function getIndex()
    {
        return view(view: 'student.new_index');
    }

    // public function confirm(Request $request)
    // {
    //     $validateRules =
    //         [
    //             'username' => 'required',
    //             'mail' => 'required|email',
    //             'age' => 'required|numeric',
    //             'opinion' => 'required|max:500'
    //         ];

    //     $validateMessage = [
    //         "required" => "必須項目です。",
    //         "email" => "メールアドレスの形式で入力して下さい",
    //         "numeric" => "数値で入力して下さい。",
    //         "opinion.max" => "500文字以内で入力して下さい。",
    //     ];

    //     //バリデーションをインスタンス化
    //     $this->validate($request, $validateRules, $validateMessage);

    //     $data = $request->all();

    //     return view(view: 'student.new_confirm')->with($data);
    // }

    //https://laraweb.net/knowledge/2156/
    // DIのフォームリクエストはuseでパスを省略してもOK
    public function confirm(\App\Http\Requests\CheckStudentRequest $request)
    {
        $data = $request->all();
        return view('student.new_confirm')->with($data);
    }
}
