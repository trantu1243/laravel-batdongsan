<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'email' => ['required', 'email','unique:users', 'string', 'max:255'],
            'name' => ['required', 'min:4', 'max:32', 'string'],
            'password' => ['required', 'confirmed', 'min:8', 'max:32', 'string'],
            'phone' => ['required', 'regex:/^[0-9]{10}$/', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã tồn tại',
            'name.required' => 'Vui lòng nhập tên',
            'name.min' => 'Vui lòng nhập tên từ 4 kí tự trở lên',
            'name.max' => 'Vui lòng nhập tên không quá 32 kí tự',
            'password.required' => 'Vui lòng nhập password',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp',
            'password.min' => 'Vui lòng nhập mật khẩu từ 8 kí tự trở lên',
            'password.max' => 'Vui lòng nhập mật khẩu không quá 32 kí tự',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.required' => 'Vui lòng nhập đúng định dạng số điện thoại',
        ];
    }
}
