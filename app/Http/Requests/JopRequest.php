<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JopRequest extends FormRequest
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
               'jop_name'=>'required',
                'salary'=>'required|integer',
                'salary'=>'',
                'location'=>'required',
                'company_name'=>'required',
                'jop_description'=>'required'
        ];
    }

    public function messages(){
        return[
            'jop_name.required'=>\trans('validation.required'),
                'salary.required'=>\trans('validation.required'),
                'location.required'=>\trans('validation.required'),
                'company_name.required'=>\trans('validation.required'),
                'jop_description.required'=>\trans('validation.required'),
                'salary.integer'=>\trans('validation.integer'),
        ];

    }
}
