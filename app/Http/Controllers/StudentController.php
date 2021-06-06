<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\CheckStudentRequest;

class StudentController extends Controller
{
    //コントローラー
    public function getIndex()
    {
        // $query = Student::query();
        $query = Student::query();
        // 全件取得 +ページネーション
        $students = $query->orderBy('id', 'asc')->paginate(20); //【変更】desc → asc
        // $students = $query->sortBy();
        return view('student.list')->with('students', $students);
    }

    //入力
    public function new_index()
    {
        return view('student.new_index');
    }

    //確認
    public function new_confirm(CheckStudentRequest $req)
    {
        $data = $req->all();
        return view('student.new_confirm')->with($data);
    }

    //完了
    //21.06.06
    //[Requestクラス → CheckStudentRequestクラス]に変更
    public function new_finish(CheckStudentRequest $request)
    {
        // Studentオブジェクト生成
        $student = new Student;

        // 値の登録
        $student->name = $request->name;
        $student->email = $request->email;
        $student->tel = $request->tel;
        // $student->message = $request->message;
        // $student->updated_at = $request->updated_at;
        // $student->created_at = $request->created_at;

        // 保存
        $student->save();

        // 一覧にリダイレクト
        return redirect()->to('student/list');
    }
}
