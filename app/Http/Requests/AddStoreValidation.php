<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStoreValidation extends FormRequest
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
            'name' => 'required|unique:stores',
            'description' => 'required:max:500',
            'contact' => 'required|numeric|unique:stores',
            'user_id' => 'unique:stores'
        ];
    }
}
