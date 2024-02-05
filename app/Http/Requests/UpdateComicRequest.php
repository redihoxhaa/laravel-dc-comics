<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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

            // Diciamo al validatore di escludere il titolo se corrisponde allo stesso id, perché si tratta dello stesso elemento
            // Il this fa riferimento alla richiesta, che ha una proprietà comic in questo caso con campo id
            'title' => 'required|unique:comics,title,' . $this->comic->id . '|max:50',
            'thumb' => 'required|url',
            'description' => 'nullable|string',
            'sale_date' => 'nullable|date',
            'writers' => 'required|string|max:255',
            'artists' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:30',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel']),
            ],
            'series' => 'nullable|string',
            'price' => 'nullable|numeric|between:0,999999.99',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo "Title" è obbligatorio.',
            'title.unique' => 'Il titolo è già presente nell\'archivio.',
            'title.max' => 'Il campo "Title" non può superare i 50 caratteri.',
            'thumb.required' => 'Il campo "Thumb" è obbligatorio.',
            'thumb.url' => 'Il campo "Thumb" deve essere un URL valido.',
            'description.string' => 'Il campo "Description" deve essere una stringa.',
            'sale_date.date' => 'Il campo "Sale Date" deve essere una data valida.',
            'writers.required' => 'Il campo "Writers" è obbligatorio.',
            'writers.string' => 'Il campo "Writers" deve essere una stringa.',
            'writers.max' => 'Il campo "Writers" non può superare i 255 caratteri.',
            'artists.string' => 'Il campo "Artists" deve essere una stringa.',
            'artists.max' => 'Il campo "Artists" non può superare i 255 caratteri.',
            'publisher.string' => 'Il campo "Publisher" deve essere una stringa.',
            'publisher.max' => 'Il campo "Publisher" non può superare i 30 caratteri.',
            'type.required' => 'Il campo "Type" è obbligatorio.',
            'type.in' => 'Il campo "Type" deve essere "comic book" o "graphic novel".',
            'series.string' => 'Il campo "Series" deve essere una stringa.',
            'price.numeric' => 'Il campo "Price" deve essere un valore numerico.',
            'price.between' => 'Il campo "Price" deve essere compreso tra 0 e 999999.99.',
        ];
    }
}
