<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('update'); 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method(); // checking if hte method is put or patch
        if($method == 'PUT'){
            return [
                'name'          =>  ['required'],
                'population'    =>  ['required'],
                'capitalCity'   =>  ['required'],
                'continent'     =>  ['required'],
                'ranking'       =>  ['required'],
                'group_id'     =>   ['required',Rule::in([1,2,3,4,5,6,7,8])]
            ];
        }
        else{
            return [
                'name'          =>  ['sometimes','required'],
                'population'    =>  ['sometimes','required'],
                'capitalCity'   =>  ['sometimes','required'],
                'continent'     =>  ['sometimes','required'],
                'ranking'       =>  ['sometimes','required'],
                'group_id'     =>   ['sometimes','required',Rule::in([1,2,3,4,5,6,7,8])]
            ];
        }
    }
    protected function preparedForValidation() {
        if($this->capitalCity) {
            $this->merge([
                'capital_city'  =>  $this->capitalCity
            ]);
        }
    }
}
