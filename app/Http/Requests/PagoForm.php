<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 02-07-2016
 * Time: 09:34 PM
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
class PagoForm extends Request
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
            'transferencia'=>'required',
            'fecha_pago'=>'required|date',
            'tipo_pago'=>'required',
            'banco'=>'required',
        ];
    }
}