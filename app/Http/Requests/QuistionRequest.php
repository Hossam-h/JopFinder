<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuistionRequest extends FormRequest
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
            'question'=>'required|string',
                'answer'=>'required|string',
                'image'=>'required|image|mimes:jpg,png,jpeg,svg|max:2048KB',

        ];
    }



    public function message(){
        return[
            'question.required'=>\trans('validation.required'),
            'question.string'=>\trans('validation.string'),
            'answer.required'=>\trans('validation.required'),
            'answer.string'=>\trans('validation.string'),
            'image.required'=>\trans('validation.required'),
            'image.image'=>\trans('validation.image'),


        ];
        
    }
}
