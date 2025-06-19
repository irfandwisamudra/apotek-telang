<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required',
            'password1' => 'required|same:password2',
            'password2' => 'required|same:password1',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Bidang username harus diisi.',
            'email.required' => 'Bidang email harus diisi.',
            'password1.required' => 'Bidang password harus diisi.',
            'password1.same' => 'Bidang password harus sama dengan konfirmasi password.',
            'password2.required' => 'Bidang konfirmasi password harus diisi.',
            'password2.same' => 'Bidang konfirmasi password harus sama dengan password.',
        ];
    }
}
