<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class UpdateQuote extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:20|regex:/^[a-zA-Z0-9 ]+$/', 
            'description' => 'required|min:10', 
            'site' => 'required|max:45|regex:/^[a-zA-Z0-9 ]+$/',  
            'dateTime' => 'required|date|date_format:Y-m-d\TH:i', 
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.min' => 'El título debe tener al menos :min caracteres.',
            'title.max' => 'El título no puede tener más de :max caracteres.',
            'title.regex' => 'El título solo puede contener letras, números y espacios.',
            'description.required' => 'La descripción es obligatorio.',
            'description.min' => 'La descripción debe tener al menos :min caracteres.',
            'site.required' => 'El lugar es obligatorio.',
            'site.max' => 'El lugar no puede tener más de :max caracteres.',
            'site.regex' => 'El lugar sólo puede contener letras, números y espacios.',
            'dateTime.required' => 'La fecha y hora es obligatorio.',
            'dateTime.date' => 'La fecha y hora no es una fecha válida.',
            'dateTime.date_format' => 'La fecha y hora no tiene el formato correcto (Y-m-d\TH:i).',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'título',
            'description' => 'descripción',
            'site' => 'lugar',
            'dateTime' => 'fecha y hora',
        ];
    }
}
