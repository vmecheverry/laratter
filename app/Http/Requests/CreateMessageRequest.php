<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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
            'message'=> ['required','max:160'],
            [
                'message.required'=>'Por favor escribe tu mensaje',
                'message.max'=>'El mensaje no debe superar los 160 caracteres'
            ]
    
        ];
    }

    public function messages()
    {
        return [
            'message.required'=>'Por favor escribe tu mensaje',
            'message.max'=>'El mensaje no debe superar los 160 caracteres'
        ];
    }
}
