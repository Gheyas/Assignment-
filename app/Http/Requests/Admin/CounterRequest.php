<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CounterRequest extends FormRequest
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
            'c1' => 'required',
            'c2' => 'required',
            'c3' => 'required',
            'c4' => 'required',
            'v1' => 'required',
            'v2' => 'required',
            'v3' => 'required',
            'v4' => 'required',
            'image' => 'image'
        ];
    }
}
