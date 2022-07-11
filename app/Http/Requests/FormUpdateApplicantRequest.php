<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUpdateApplicantRequest extends FormRequest
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
        return [
            'file' => 'mimes:pdf,doc,docx,odt|max:5048'
        ];
    }

    public function messages()
    {
        return [
            'file.mimes' => 'Solo se admiten archivos de tipo .doc, .docx y .pdf'
            , 'file.max' => 'Se permiten archivos de hasta 5mb de tamaño'
        ];
    }
}
