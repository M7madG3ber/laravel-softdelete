<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategory extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'active' => 'required|in:1,0',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.min' => 'Shouldn\'t less than 3 characters',
            'name.max' => 'Shouldn\'t more than 50 charcters',
            'active.required' => 'Status in required',
            'active.in' => 'Status should active or disactive',
        ];
    }
}