<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name'=>'required|string',
            'jop'=>'required|string',

        ];
    }

    public function message(){
        return[
            'name.required'=>\trans('validation.required'),
            'name.string'=>\trans('name.string'),
            'jop.required'=>\trans('validation.required'),
            'jop.string'=>\trans('name.string'),
        ];
       
    }
}
