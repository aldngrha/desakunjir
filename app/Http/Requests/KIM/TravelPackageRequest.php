<?php

namespace App\Http\Requests\KIM;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
            "title" => "required|max:255",
            "location" => "required|max:255",
            "about" => "required",
            "hiburan" => "required|max:255",
            "language" => "required|max:255",
            "foods" => "required|max:255",
            "duration" => "required|max:255",
            "price" => "required|integer",
            "map" => "required",
        ];
    }
}
