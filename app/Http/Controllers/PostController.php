<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * 指定された投稿のIDを表示
     *
     * @param  int  $id
     * @return String
     */
    public function show($id)
    {
        return $id . '番の投稿';
    }

    //210603 追記
    public function getIndex()
    {
        $query = \app\Models\Student::query();
        // 全件取得 +ページネーション
        $students = $query->orderBy('id', 'desc')->paginate(10);
        return view('boot_template.index')->with('students', $students);
    }
}
