<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_en'=>'required | max:200 | min:5 | string',
            'title_ar'=>'required | max:200 | min:5 | string',
            'description_en'=>'required | max:200 | min:10 | string',
            'description_ar'=>'required | max:200 | min:10 | string',
            'status'=>'required'
        ];
    }
    public function messages(){
        return[
        'title_en.required' => 'A title is required',
        'title_en.max' => 'A title max length is 255',

        'title_ar.required' => 'يرجى ادخال الاسم'
        ];

    }
}
