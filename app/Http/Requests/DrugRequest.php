<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugRequest extends FormRequest
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
            'icon' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'kode' => 'required',
            'supplier_id' => 'required',
            'nama_obat' => 'required',
            'produser' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode.required' => 'Bidang kode harus diisi.',
            'supplier_id.required' => 'Bidang ID supplier harus diisi.',
            'nama_obat.required' => 'Bidang nama obat harus diisi.',
            'produser.required' => 'Bidang produsen harus diisi.',
            'stok.required' => 'Bidang stok harus diisi.',
            'harga.required' => 'Bidang harga harus diisi.',
            'icon.image' => 'Bidang ikon harus berupa gambar.',
            'icon.mimes' => 'Bidang ikon harus dalam format jpeg, png, jpg, atau svg.',
            'icon.max' => 'Ukuran file ikon tidak boleh lebih dari 2 MB.',
        ];
    }
}
