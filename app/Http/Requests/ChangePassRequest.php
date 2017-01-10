<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'passwordOld' => 'required|user_old_pass_validator',
            'password' => 'required|min:6|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'passwordOld.*' => 'Niepoprawne dotychczasowe hasło!',
            'password.*' =>'Hasło musi mieć przynajmniej sześć znaków i zgadzać się z potwierdzeniem.'
        ];
    }
}
