<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        
        return [
            'name' =>[
                'required',
                'string',
                'max:225',
                'min:2',
            ],
            'email'=>[
                'required',
                'email',
                'unique:users',
            ],
            'password' => [
                'required',
                'min:6',
                'max:20',
                'confirmed'
            ],
            'password_confirmation' => [
            'required',
            'min:6',
            'max:20'
            ],
            
        ];

    }
    public function messages()
    {
        return [
            'name.min'=>'O nome deve conter no minimo 2 caracteres',
            'name.max'=>'O nome deve conter no minimo 255 caracteres',
            'email.unique'=>'E-mail já cadastrado',
            'email.email'=>'Insira um e-mail valido',
            'required'=>'Este campo é obrigatorio',
            'password.min'=>'A senha deve conter no minimo 6 caracteres',
            'password.max'=>'A senha deve conter no maximo 20 caracteres',
            'password.confirmed'=>'A confirmação do campo de senha não corresponde.',
            'password_confirmation.min'=>'A senha deve conter no minimo 6 caracteres',
            'password_confirmation.max'=>'A senha deve conter no maximo 20 caracteres',
            'password_confirmation.confirmed'=>'A confirmação do campo de senha não corresponde.'
        ];
    }
}
