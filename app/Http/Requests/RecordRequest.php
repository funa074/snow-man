<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
            'date'            => 'required | date | before:tomorrow',
            'ski_resort'      => 'required | max:30',
            'body'            => 'nullable | max:21845',
            'image_file_name' => 'nullable | image'
        ];
    }
    
    public function attributes()
    {
        return [
            'date'       => '滑走日',
            'ski_resort' => 'スキー場名',
            'body'       => '本文'  
        ];
    }
}