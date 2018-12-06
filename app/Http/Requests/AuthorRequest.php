<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
             'first_name' => 'required',
             'last_name' => 'required',
             'ocupation' => 'required',
         ];
     }
     public function messages()
     {
         return [
             'first_name.required' => 'El campo Nombre no puede quedar vacío',
             'last_name.required'  => 'El campo Apellido no puede quedar vacío',
             'ocupation.required'  => 'El campo Ocupación no puede quedar vacío',
         ];
     }
}
