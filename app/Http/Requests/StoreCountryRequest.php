<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('create'); 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'          =>  ['required'],
            'population'    =>  ['required'],
            'capitalCity'   =>  ['required'],
            'continent'     =>  ['required'],
            'ranking'       =>  ['required'],
            'group_id'     =>   ['required',Rule::in([1,2,3,4,5,6,7,8])]
        ];
    }
    protected function prepareForValidation() {
        $this->merge([ // The merge method will replace any item in the original collection's items if a string key with the same value exists
            'capital_city'   =>  $this->capitalCity
        ]);
    }
}
