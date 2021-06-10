<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;// Mailファサードをインポート

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * 入力画面
     */
    public function input()
    {
        // Bladeで使う変数
        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '入力画面',
        );
        return view('contact.input')->with($hash);
    }

    /**
     * 確認画面
     */
    public function confirm(Request $request)
    {
        // Bladeで使う変数
        $hash = array(
            'request' => $request,
            'title' => 'お問い合わせ',
            'subtitle' => '確認画面',
        );
        return view('contact.confirm')->with($hash);
    }

    /**
     * 完了画面（メール送信設定）
     */
    public function finish(Request $request)
    {
        // 全入力データをcontact変数に代入
        // 配列として受け取りたい場合は $contact = $request->all();
        $contact = $request;

        // 引数にリクエストデータ（ContactMail.php から）を渡す
        // Mailファサードを使ってメールを送信
        //参考「Mailableクラスを使用する場合はsendメソッドでMailableクラスのインスタンスを渡す。その場合引数は１つとなる。」
        Mail::to($contact->email)->send(new ContactMail($contact));

        // Bladeで使う変数
        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '完了画面',
        );

        return view('contact.finish')->with($hash);
    }
}
