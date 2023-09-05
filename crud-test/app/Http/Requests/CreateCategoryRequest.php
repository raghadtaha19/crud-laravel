<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_name'=>'required',
            'category_desc'=>'required'
        ];
    }

        public function messages(){
            return [
            'category_name.required'=>'The category name is required',
            'category_desc.required'=>'The category description is required',
                
            ];

        }
    }

