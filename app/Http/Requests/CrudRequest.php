<?php

namespace Crud\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CrudRequest extends FormRequest
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
            'nome' => 'required|max:50',
            'sobrenome' => 'required|max:50',
            //'email' => 'required|email|max:50|unique:crud,email',
            'email' => 'required|email|max:50',
            //Rule::unique('crud')->ignore($this->id),
            'emp_cnpj' => 'required|cnpj',
            'tipo' => 'required',
        ];
    }
}
