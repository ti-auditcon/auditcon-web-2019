<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'editordata' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            'authors' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Debe ingresar un título',
            'editordata.required'  => 'Debe ingresar un contenido',
            'authors.required'  => 'Debe seleccionar al menos un Autor',
            'tags.required'  => 'Debe seleccionar al menos un Tag',
            'category_id.required'  => 'Debe seleccionar una categoría',
        ];
    }
}
