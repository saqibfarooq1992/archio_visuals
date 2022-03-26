<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ture;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'heading'    =>  'required|string',
           'slogan'     =>  'required|string',
           'picture_1'  =>  'required|string',
           'picture_2'  =>  'required|string',
           'picture_3'  =>  'required|string',
        ];
    }
}
