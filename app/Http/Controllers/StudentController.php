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

        // 保存
        $student->save();

        // 一覧にリダイレクト
        return redirect()->to('student/list');
    }

    //0608 追記 「編集」機能用***************************************************
    public function edit_index($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit_index')->with('student', $student);
    }

    public function edit_confirm(CheckStudentRequest $req)
    {
        $data = $req->all();

        return view('student.edit_confirm')->with($data);
    }

    public function edit_finish(Request $request, $id)
    // public function edit_finish(Request $request)
    {
        //レコードを検索
        $student = Student::findOrFail($id);
        // $student = new Student;
        // $student = Student::findOrFail($request->id);
        //値を代入
        $student->name = $request->name;
        $student->email = $request->email;
        $student->tel = $request->tel;

        //保存（更新）
        $student->save();

        //リダイレクト
        return redirect()->to('student/list');
    }

    //0609 追記 「削除」機能用***************************************************
    public function us_delete($id)
    {
        //削除対象レコードを検索
        $user = Student::find($id);
        //削除
        $user->delete();
        //リダイレクト
        return redirect()->to('student/list');
    }
}
