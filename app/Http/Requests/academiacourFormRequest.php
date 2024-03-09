<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class academiacourFormRequest extends FormRequest
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
            'mail' => ['required', 'email'],
            'teacher' => ['required'],
            'cours' => ['required'],
            'promotion' => ['required'],
            'academia' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'mail.required' => 'Le champ e-mail est obligatoire.',
            'mail.email' => 'Veuillez fournir une adresse e-mail valide.',
            'teacher.required' => 'Le champ enseignant est obligatoire.',
            'cours.required' => 'Le champ cours est obligatoire.',
            'promotion.required' => 'Le champ promotion est obligatoire.',
            'academia.required' => 'Le champ academia est obligatoire.',
        ];
    }
}
