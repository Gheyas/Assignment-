<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'fb' => 'required',
            'tw' => 'required',
            'ig' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'wwa' => 'required',
        ];
    }
}
