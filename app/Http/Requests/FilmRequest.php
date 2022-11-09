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
        ];
    }
}
