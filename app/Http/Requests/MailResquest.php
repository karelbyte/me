<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailResquest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'msj' => 'required|min:10|max:350'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Su nombre es requerido!',
            'email.required'  => 'Una dirección de correo es requerida!',
            'email.email'  => 'Correo no válido!',
            'msj.required' => 'Mensaje requerido!',
            'msj.min' => 'Mensaje mínimo de 10 caracteres!.',
            'msj.max' => 'Mensaje máximo de 350 caracteres!.'
        ];
    }
}
