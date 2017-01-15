<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddArticleRequest extends FormRequest
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
            'text' => 'required',
            'title' => 'required|max:255'
        ];
    }

    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
        $redUrl=$this->getRedirectUrl();
        if(substr($redUrl,-1)=='/') $redUrl.='#art';
        else $redUrl.='/#art';

        return $this->redirector->to($redUrl)
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors,$this->errorBag);
    }
}
