<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        if ($this->path() == 'hello')
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
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前は必ず入力して下さい。',
            'mail.address' => 'メールアドレスが必要ですヨヨヨよおよ',
            'age.numeric' => '年齢は整数で記入しろよ',
            'age.between' => '年齢は0~150の間でお願いします。',
        ];
    }
}
