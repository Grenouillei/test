<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'login' => 'required|string|max:15',
            'name' => 'required|string|max:15',
            'birthday' => 'required|string',
            'email' => 'required|string|email|max:40|unique:users',
            'address' => 'required|string|min:5',
            'city' => 'required|string|min:5',
            'state' => 'required|string|min:4',
            'country' => 'required|string|min:5',
            'password' => 'required|string|min:8',
        ];
    }
}
