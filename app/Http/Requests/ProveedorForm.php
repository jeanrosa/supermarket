<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class ProveedorForm extends Request
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
            'tlf_local'=>'required',
            'tlf_movil'=>'required',
            'rif'=>'required',
            'pagina_web'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'dedicacion'=>'required',
            'resena_empresa'=>'required',
            /*'estado'=>'required',
            'municipio'=>'required',
            'parroquia'=>'required:not_in:0',*/
            'direccion'=>'required',
            'contraseña'=>'required',
        ];
    }

}
