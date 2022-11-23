<?php

namespace App\Http\Requests\Buyer;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'phone' => ['numeric', 'max:10'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'terms_conditions' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter Name.',
            'surname.required' =>'Please Enter Surname.',
            'address1.required' =>'Please Enter Address line 1.',
            'address2.required' =>'Please Enter Addres Line 2.',
            'city.required' =>'Please Enter City Name.',
            'region.required' =>'Please Enter Region.',
            'phone.required' =>'Please Enter Phone Number.',
            'terms_conditions.required' =>'Please accept term and conditions.',
        ];
    }
}
