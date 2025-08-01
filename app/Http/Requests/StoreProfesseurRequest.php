<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfesseurRequest extends FormRequest
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
            "lastname" => ['string', 'required', 'max:255'],
            "firstname" => ['string', 'required', 'max:255'],
            "email" => ['email', 'required'],
            "phone" => ["starts_with:+22901, +229 01", 'max:21'],
            "specialite" => ['string', 'nullable']
        ];
    }
}
