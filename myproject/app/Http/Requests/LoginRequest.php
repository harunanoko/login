<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
            if ($this->path() == 'register')
            {
                return true;
            } else {
                return false;
            }
        }
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
          return[
            'name' => 'required',
            'email' => 'email',
            'password' => 'required|min:7',
            'confilm' => 'required|same:password',
          ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力して下さい!!!',
            'email.email'  => 'メールアドレスが必要です。',
            'password.required' => 'PWは必ず入力してください',
            'password.min' => '7文字以上で入力してください',
            'confilm.required' => '確認用のPWを入力してください',
            'confilm.same' => 'パスワードが一致しません。',
          ];
    }

}



