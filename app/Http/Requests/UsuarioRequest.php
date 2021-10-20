<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            //
            'rut' => 'required|regex:/^\d{7,8}[0-9K]{1}$/',
            'nombre' => 'required|min:2|max:100',
            'apellido'=> 'required|min:2|max:100',
            'correo' => 'required|min:4|max:100|email|unique:usuario,correo',
            'region' => 'required',
        ];
    }
}
