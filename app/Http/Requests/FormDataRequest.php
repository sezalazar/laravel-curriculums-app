<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $applicantID = $this->route('applicants');
        // dd($this->route()->id);
        return [
            'tipo' => 'required',
            'dni' => 'required|integer|min:0|max:99999999|unique:applicants,dni,' . $this->route()->id,
            'name' => 'required',
            'email' => 'required|unique:applicants,email,' . $this->route()->id,
            'dateOfBirth' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required',
            'cp' => 'required',
            'street' => 'required',
            'streetNbr' => 'required',
            'phone.*' => 'required|min:9|regex:/^([0-9\s\-\+\(\)]*)$/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio'
            , 'dateOfBirth.required' => 'La fecha de nacimiento es obligatoria'
            , 'cp.required' => 'El campo Código Postal es obligatorio'
            , 'street.required' => 'El campo Calle es obligatorio'
            , 'streetNbr.required' => 'El campo Número de Calle es obligatorio'
            , 'phone.*.required' => 'El teléfono es obligatorio'
            , 'phone.*.min' => 'El teléfono debe tener al menos 9 caracteres'
        ];
    }
}
