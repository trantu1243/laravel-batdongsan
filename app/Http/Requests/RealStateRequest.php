<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealStateRequest extends FormRequest
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
            'property_type' => 'required|string',
            'property_category'  => 'required|string',
            'city' => 'required|string',
            'district' => 'required|string',
            'commune' => 'required|string',
            'detailAddress' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'area' => 'required|string',
            'price' => 'required|string',
            'price_unit' => 'required|string',
            'legal_documents' => 'required|string',
            'num_of_bedrooms' => 'required|string',
            'num_of_bathrooms' => 'required|string',
            'num_of_floors' => 'required|string',
            'house_direction' => 'string',
            'balcony_direction' => 'string',
            'furniture' => 'required|string',
            'video_link' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'post_days' => 'required|string',
            'start_date' => 'required|string',
            'file.*' => 'required|mimes:jpeg,png,jpg,svg,gif,pdf'
        ];
    }

    public function messages(): array
    {
        return [
            'property_type.required' => 'Không được để trống',
            'property_category.required' => 'Không được để trống',
            'city.required' => 'Không được để trống',
            'district.required' => 'Không được để trống',
            'commune.required' => 'Không được để trống',
            'detailAddress.required' => 'Không được để trống',
            'title.required' => 'Không được để trống',
            'description.required' => 'Không được để trống',
            'area.required' => 'Không được để trống',
            'price.required' => 'Không được để trống',
            'price_unit.required' => 'Không được để trống',
            'legal_documents.required' => 'Không được để trống',
            'num_of_bedrooms.required' => 'Không được để trống',
            'num_of_bathrooms.required' => 'Không được để trống',
            'num_of_floors.required' => 'Không được để trống',
            'house_direction.required' => 'Không được để trống',
            'balcony_direction.required' => 'Không được để trống',
            'furniture.required' => 'Không được để trống',
            'video_link.required' => 'Không được để trống',
            'name.required' => 'Không được để trống',
            'email.required' => 'Không được để trống',
            'phone.required' => 'Không được để trống',
            'post_days.required' => 'Không được để trống',
            'start_date.required' => 'Không được để trống',
            'file.required' => 'Không được để trống'
        ];
    }
}
