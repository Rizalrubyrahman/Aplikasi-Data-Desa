<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDokumenRequest extends FormRequest
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
            'nama_dokumen' => 'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'nama_dokumen.required' => 'Nama Dokumen Tidak Boleh Kosong',
            'nama_dokumen.min' => 'Nama Dokumen Minimal 3 Karakter',
        ];
    }

}
