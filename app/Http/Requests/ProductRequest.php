<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price'=>'required|max:20',
            'name'=>'required|max:20',
            'description'=>'required|max:100'

        ];
    }

    public function messages(){
        return [
            'price.max' => 'price should not be greater than 20 char'
            ];
    }
}
