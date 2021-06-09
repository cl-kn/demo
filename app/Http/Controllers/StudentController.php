<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\CheckStudentRequest;
use App\Http\Controllers\Session;

class StudentController extends Controller
{
    //コントローラー
    //0609 「検索」ように改修
    public function getIndex(Request $rq)
    {
        //キーワード受け取り
        $keyword = $rq->input('keyword');
        //クエリ生成
        $query = Student::query();

        //キーワードがあったら
        if (!empty($keyword)) {
            $query->where('email', 'like', '%' . $keyword . '%');
            $query->orWhere('name', 'like', '%' . $keyword . '%');
            $query->orWhere('tel', 'like', '%' . $keyword . '%');
        }

        //ページネーション
        $students = $query->orderBy('id', 'asc')->paginate(10);
        return view('student.list')->with('students', $students)->with('keyword', $keyword);

        // 全件取得 +ページネーション
        // $students = $query->orderBy('id', 'asc')->paginate(20); //【変更】desc → asc
        // $students = $query->sortBy();
        // return view('student.list')->with('students', $students);
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
    //21.0609 「フラッシュメッセージ」Requestクラスに変更？
    public function new_finish(Request $request)
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
        //0609 追記「フラッシュメッセージ」機能用
        return redirect()->to('student/list')->with('flashmessage', '新規登録が完了しました！');

        // session()->flash('flashmessage', '登録が完了しました！');
        // return redirect()->to('student/list');

        // session()->flash('message', '新規投稿に成功しました。');
        // $request->session()->flash('flashmessage', '登録が完了しました！');
        // return redirect()->to('student/list');
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
        //0609 追記「フラッシュメッセージ」機能用
        return redirect()->to('student/list')->with('flashmessage', '編集が完了しました。');
        // return redirect('student/list')->with('flashmessage', '登録が完了しました！');
    }

    //0609 追記 「削除」機能用***************************************************
    public function us_delete($id)
    {
        //削除対象レコードを検索
        $user = Student::find($id);
        //削除
        $user->delete();
        //リダイレクト
        //0609 追記「フラッシュメッセージ」機能用
        return redirect()->to('student/list')->with('flashmessage', '削除が完了しました。');
    }
}
