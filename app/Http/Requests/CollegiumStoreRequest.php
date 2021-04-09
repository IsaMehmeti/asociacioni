<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollegiumStoreRequest extends FormRequest
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
            'en_title' => 'required',
            'en_description' => 'required',
            'sq_title' => 'required',
            'sq_description' => 'required',
            'sr_title' => 'required',
            'sr_description' => 'required',
        ];
    }
}
