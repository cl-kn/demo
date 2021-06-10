<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\CheckStudentRequest; //流用
use App\Http\Controllers\Session;

class TeacherController extends Controller
{
    //コントローラー
    public function getIndex(Request $rq)
    {
        //キーワード受け取り
        $keyword = $rq->input('keyword');
        //クエリ生成
        $query = Teacher::query();

        //キーワードがあったら
        if (!empty($keyword)) {
            $query->where('email', 'like', '%' . $keyword . '%');
            $query->orWhere('name', 'like', '%' . $keyword . '%');
            $query->orWhere('tel', 'like', '%' . $keyword . '%');
        }

        $sum = $query->count();

        if ($sum == 0) {
            $msg = "該当データはありませんでした。";
        } else {
            $msg = $sum . "件ヒットしました。";
        }

        //ページネーション
        $teachers = $query->orderBy('id', 'asc')->paginate(10);
        return view('teacher.list')->with('teachers', $teachers)->with('keyword', $keyword)->with('msg', $msg);
    }

    //入力
    public function new_index()
    {
        return view('teacher.new_index');
    }

    //確認
    public function new_confirm(CheckStudentRequest $req)
    {
        $data = $req->all();
        return view('teacher.new_confirm')->with($data);
    }

    public function new_finish(Request $request)
    {
        // Teacherオブジェクト生成
        $teacher = new Teacher;

        // 値の登録
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->tel = $request->tel;

        // 保存
        $teacher->save();

        // 一覧にリダイレクト
        //0609 追記「フラッシュメッセージ」機能用
        return redirect()->to('teacher/list')->with('flashmessage', '新規登録が完了しました！');
    }

    //0608 追記 「編集」機能用***************************************************
    public function edit_index($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit_index')->with('teacher', $teacher);
    }

    public function edit_confirm(CheckStudentRequest $req)
    {
        $data = $req->all();

        return view('teacher.edit_confirm')->with($data);
    }

    public function edit_finish(Request $request, $id)
    {
        //レコードを検索
        $teacher = Teacher::findOrFail($id);
        //値を代入
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->tel = $request->tel;

        //保存（更新）
        $teacher->save();

        //リダイレクト
        //0609 追記「フラッシュメッセージ」機能用
        return redirect()->to('teacher/list')->with('flashmessage', '編集が完了しました。');
    }

    //0609 追記 「削除」機能用***************************************************
    public function us_delete($id)
    {
        //削除対象レコードを検索
        $user = Teacher::find($id);
        //削除
        $user->delete();
        //リダイレクト
        //0609 追記「フラッシュメッセージ」機能用
        return redirect()->to('teacher/list')->with('flashmessage', '削除が完了しました。');
    }

    //0609 追記 「詳細」機能用***************************************************
    public function detail_index($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.detail_index')->with('teacher', $teacher);
    }
}
