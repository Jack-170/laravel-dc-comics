<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
            'release_date' => 'required|date',
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.string' => 'Il titolo deve essere una stringa.',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'release_date.required' => 'La data di uscita è obbligatoria.',
            'release_date.date' => 'La data di uscita non è valida.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
        ];
    }
}
