<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MulherHomemRequest extends FormRequest
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
            'homem_input' => 'required_if:genero,Homem',
            'mulher_input' => 'required_if:genero,Mulher'
        ];
    }
}
