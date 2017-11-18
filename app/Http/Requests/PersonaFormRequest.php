<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonaFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //cambiar valor de falso a verdadero
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
            

            'tipo_persona'=>'required|max:25',
            'nombre'=>'required|max:45',
            'tipo_documento'=>'max:15',
            'num_documento'=>'numeric',
            'dirrecion'=>'max:40',
            'telefono'=>'numeric',
            'email'=>'max:60'
            //
        ];
    }
}
