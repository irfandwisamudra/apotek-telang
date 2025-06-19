<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nama_supplier.required' => 'Bidang nama supplier harus diisi.',
            'alamat.required' => 'Bidang alamat harus diisi.',
            'kota.required' => 'Bidang kota harus diisi.',
            'no_telp.required' => 'Bidang nomor telepon harus diisi.',
        ];
    }
}
