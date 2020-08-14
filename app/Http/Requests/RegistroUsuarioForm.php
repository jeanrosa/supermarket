<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistroUsuarioForm extends Request
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
            'nombre'=>'required',
            'email'=>'required|email',
            'estado'=>'required',
            'municipio'=>'required',
            'parroquia'=>'required',
            'direccion'=>'required',
            'contraseña'=>'required',
            'tlf_movil'=>'required',
            'tlf_local'=>'required',
            'facebook'=>'required|url',
            'cedula'=>'required',
            'sexo'=>'required',
            'f_nacimiento'=>'required|date',
            'g-recaptcha-response' => 'required|captcha',
            'terminos'=>'required'
        ];
    }

}
