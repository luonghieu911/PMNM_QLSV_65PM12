<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLopMHRequest extends FormRequest
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
            //
            'malop'=>'required',
            'tenlop'=>'required',
            'mota'=>'required',
            'soluongsv'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'malop.required' => 'Không được để trống Mã lớp',
            'tenlop.required' => 'Không được để trống Tên lớp',
            'mota.required' => 'Không được để trống Mô tả',
            'soluongsv.required' => 'Không được để trống Số lượng sv',
        ];
    }
}
