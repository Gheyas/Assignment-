<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fname' => 'required|min:2',
            'lname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:22',
            'message' => 'required|min:10'
        ];
    }
}
