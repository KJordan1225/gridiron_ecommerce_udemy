<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubcategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:subcategories,name,'.$this->subcategory->id,
            'category_id' => 'required|integer|exists:categories,id'
        ];
    }

    public function messages() : array
    {
        return [
            'category_id.required' => 'Please choose a category'
        ];
    }
}