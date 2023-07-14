<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GantiMeterRequest extends FormRequest
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
            'user_id' => ['integer', 'max:255',],
            'ulp' => ['string', 'max:255',],
            'id_pel' => ['integer', 'max:255',],
            'nama' => ['stringr', 'max:255',],
            'alamat' => ['string', 'max:255',],
            'tarif' => ['string', 'max:255',],
            'daya' => ['integer', 'max:255',],
            'peta' => ['string', 'max:255',],
            'tipe' => ['string', 'max:255',],
            'kelainan' => ['string', 'max:255',],
            'petugas' => ['string', 'max:255',],
            'status' => ['string', 'max:255',],
        ];
    }
}
