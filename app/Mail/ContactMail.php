<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

//Mailableクラス
//Mailファサードの補佐役
//メール本文を指定可能
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // 引数で受け取ったデータ用の変数
    protected $contact;

    public function __construct($contact)
    {
        // 引数で受け取ったデータ（メール本文中で表示したいデータ）を疑似変数にセット
        // クラス定義内部であればアクセスできる
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('テスト送信')         // メールのタイトル
            ->from('laravel_demo@example.com')             // 送信元
            ->cc('fuga@example.com')               // BCCやCCはここで設定
            ->text('contact.mail')                 // テンプレートの呼び出し(平文テキスト)
            ->with(['contact' => $this->contact]); // withオプションでセットしたデータをテンプレートへ受け渡す
    }
}
