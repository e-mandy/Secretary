<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePVSoutenanceRequest extends FormRequest
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
            "heure" => ['required', 'date_format:H:i'],
            "jurys" => ['required', 'string'],
            "note" => ['required', 'regex:/^(20|1[0-9]|0[0-9])\/20$/'],
            "mention" => ['in:passable,Abien,bien,Tbien,excellent'],
            "pv_file" => ['file', 'mimes:pdf', 'max:8192', 'nullable'],
            "id_filiere" => ['required', 'integer']
        ];
    }
}
