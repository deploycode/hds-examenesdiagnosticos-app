<?php

namespace examenesApp\Http\Requests;

use examenesApp\Http\Requests\Request;

class CitasRequest extends Request
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
          'examen'=>'required',
          'name'=>'required',
          'number'=>'required',
      ];
    }
}
