<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorEditRequest extends FormRequest
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
        $authorId = $this->route('id') ?? $this->route('author');
        
        return [
            'name' => 'required|regex:/^[\pL0-9\s]*$/u|max:255|unique:table_authors,name,' . $authorId,
            'age' => 'nullable|integer|min:1|max:150',
            'information' => 'nullable|string',
            'photo_path' => 'nullable|mimes:jpg,png,jpeg|max:20480',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên không được phép trùng',
            'name.regex' => 'Tên chỉ được bao gồm các ký tự chữ cái (bao gồm tiếng Việt có dấu), số và khoảng trắng',
            'name.max' => 'Tên không vượt quá 255 ký tự',
            'age.integer' => 'Tuổi phải là số nguyên',
            'age.min' => 'Tuổi phải lớn hơn 0',
            'age.max' => 'Tuổi không hợp lệ',
            'photo_path.mimes' => 'Ảnh phải có định dạng JPG, JPEG hoặc PNG',
            'photo_path.max' => 'Ảnh không được quá 20MB',
        ];
    }
}

