<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateBinaryOptionRequest extends FormRequest
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
        $userMoney=Auth::user()->money;
        return [
            'value' => "required|numeric|min:1|max:$userMoney",
            'finish_date' => "required|special_date_validator: d-m-Y H",
            'speculation' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'value.*' => 'Niepoprawna kwota inwestycji!',
            'finish_date.required' =>'Podaj datę końcową spekulacji!',
            'finish_date.*' =>'Nieprawidłowa data!',
            'speculation.*' => 'Określ swoje przewidywanie dotyczące kursu waluty!',
        ];
    }
}
