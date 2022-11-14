<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'nom'=> 'required|min:2|max:2000',
            'duree' => 'required|min:1',
            'cote' => 'required|min:0.1|max:10',
            'realisateur' =>'required|min:2|max:200',
            'genre' => 'required|min:2|max:200',
            'image' => 'required',
        ];
    }

    public function messages(){
        return[
            'nom.required' => 'Le titre du film est obligatoire.',
            'nom.min' => 'le titre doit avoir 2 caractères.',
            'nom.max' => 'Le titre ne doit pas avoir plus de 2000 caractères',
            'duree.required' => 'Le film doit avoir une durée.',
            'duree.min' => 'Le film doit avoir une durée de plus que 1 minute.',
            'cote.required' => 'La film doit avoir une cote',
            'cote.min' => 'Le film ne peut pas etre coté moins que 0.1/10',
            'cote.max' => 'Le film ne peut pas être coté plus de 10',
            'realisateur.required' => 'Le film doit avoir un realisateur',
            'realisateur.min' => 'Le realisateur ne peut pas avoir un nom de moins de 2 lettres.',
            'realisateur.max' => 'Le realisateur ne peut pas avoir un nom qui excede 200 lettres.',
            'genre.required' => 'Le film doit avoir un genre',
            'genre.min' => 'Le genre doit contenir plus de 2 caractères',
            'genre.max' => 'Le genre ne peut pas contenir plus de 200 caractères',
            'image.required' => 'Une image est nécessaire',
        ];
    }
}
