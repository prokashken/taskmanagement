<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Category Name is Required',
            // 'max' => 'Please, give less than 255 character',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Category',
        ];
    }
}
