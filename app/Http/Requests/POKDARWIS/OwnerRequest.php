<?php

namespace App\Http\Requests\POKDARWIS;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            "travel_packages_id" =>
                "required|integer|exists:travel_packages,id",
            "nama" => "required|max:255",
            "account_number" => "required|max:255",
            "bank" => "required|max:255",
            "whatsapp_number" => "required|max:255",
        ];
    }
}
