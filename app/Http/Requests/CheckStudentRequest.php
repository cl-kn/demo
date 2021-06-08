<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneRule;

class CheckStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * authorize()は権限に関する判定を行うメソッド
     * 使わない場合は、true
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * バリデーションのルールを記述
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            // 'tel' => 'required|numeric',   //|digits_between:10,11',
            'tel' => ['required', new PhoneRule()],   //|digits_between:10,11',

            // 'email' => ['required','email'],
            // 'tel' => ['required','numeric'],
            // 'message' => 'required|max:500'
        ];
    }

    //デフォルトで表示されるエラーメッセージをカスタマイズ
    public function messages()
    {
        return [
            'name.required' => '必須項目です。', //name. 無くても通る
            'email.email' => 'メールアドレスの形式で入力して下さい',
            'tel.phone' => '数値で入力して下さい。',
            // 'message.max' => '500文字以内で入力して下さい。',
        ];
    }
}
