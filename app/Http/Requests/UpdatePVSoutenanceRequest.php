<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePVSoutenanceRequest extends FormRequest
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
            "nom_etu" => ['required', 'string', 'max:255'],
            "soutenance_date" => ['date', 'required'],
            "note" => ['required', 'decimal:0,2'],
            "pv_file" => ['file', 'mimes:pdf', 'max:8192', 'nullable'],
            "id_filiere" => ['required', 'integer']
        ];
    }
}
