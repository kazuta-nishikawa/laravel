<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_sei' => 'required|string|max:20',
            'name_mei' => 'required|string|max:20',
            'nickname' => 'required|string|max:10',
            'gender' => 'required|numeric',
            'password' => 'required|string|between:8,20',
            'password_confirm' => 'required|string|between:8,20|same:password',
            'email' => 'required|email|unique:members|max:200|'
        ];
    }
}
