<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenghuniFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'id' => 'required|min:4',
                'nama' => 'required|min:5|max:20',
                'tgllahir' => 'required',
                'jk' => 'required',
                'kamar'=> 'required|numeric',
                'nrp' => 'required|numeric',
                'alamat' => 'required',
                'nomortelepon' => array('required', 'regex:/(^\d{1,15}$)/u'),
        ];
    }
}
