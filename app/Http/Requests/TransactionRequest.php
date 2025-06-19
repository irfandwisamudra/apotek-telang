<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'tanggal' => 'required',
            'user_id' => 'required|numeric',
            'nama_customer' => 'required',
            'kode_obat' => 'required',
            'qty' => 'required|numeric',
            'total' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'tanggal.required' => 'Bidang tanggal harus diisi.',
            'user_id.required' => 'Bidang user ID harus diisi.',
            'user_id.numeric' => 'Bidang user ID harus berupa angka.',
            'nama_customer.required' => 'Bidang nama customer harus diisi.',
            'kode_obat.required' => 'Bidang kode obat harus diisi.',
            'qty.required' => 'Bidang jumlah harus diisi.',
            'qty.numeric' => 'Bidang jumlah harus berupa angka.',
            'total.required' => 'Bidang total harus diisi.',
            'total.numeric' => 'Bidang total harus berupa angka.',
        ];
    }
}
