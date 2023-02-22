<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpolyeeFormRequest extends FormRequest
{
    /**
    * @return bool
    */
    public function authorize()
    {
        return true;
    }

    /**
    * @return array<string, mixed>
    */
    public function rules(): array
    {
        return [
            'password' => 'required|min:8',
            'name' => 'required',
            'sex' => 'required',
            'age' => 'required|numeric|between:0,150',
            'address' => 'required',
            'department' => 'required',
            'division' => 'required',
            'hire_date' => 'required|date',
            ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードは8文字以上入力してください。',
            'name.required' => '氏名を入力してください。',
            'sex.required' => '性別を入力してください。',
            'age.required' => '年齢を入力してください。',
            'age.numeric' => '年齢は半角数字で入力してください。',
            'age.between' => '年齢は0~150の間で入力してください。',
            'address.required' => '住所を入力してください。',
            'department.required' => '所属部署を入力してください。',
            'division.required' => '所属課を入力してください。',
            'hire_date.required' => '入社日を入力してください。',
            'hire_date.date' => '日付を入力してください。',
        ];
    }
}