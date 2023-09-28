<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiclesRequest extends FormRequest
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
            'name'=>'required|unique:vehicles|max:255',
            'make'=>'required:vehicles|max:255',
            'model'=>'required:vehicles|max:255',
            'description'=>'required:vehicles|max:255',
            'year_of_manufacture'=>'required:vehicles|max:255'
        ];
    }
}
