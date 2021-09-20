<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFirstSemDiscreteMathematicsRequest extends FormRequest
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
            'Student_name' => 'required',
            'Reg_No'=> 'required',
            'U1'=> 'required',
            'IA1' => 'required|digits_between:1,2',
            'U2' => 'required|digits_between:1,2',
            'IA2' => 'required|digits_between:1,2'
            
        ];
    }
}
