<?php

namespace App\Http\Requests\Buyer;

use Illuminate\Foundation\Http\FormRequest;

class BedebeShopCheckoutRequest extends FormRequest
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
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'apartment' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'postcode' => ['numeric'],
            'phone' => ['numeric'],
            'email' => 'required|string|email|max:255|',
            'payment_method' => 'required', 
            'terms_conditions' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'Please Enter First Name.',
            'lname.required' =>'Please Enter Last Name.',
            'country.required' =>'Please Enter Country Name.',
            'address.required' =>'Please Enter Street Address.',
            'apartment.required' =>'Please Enter Apartment Address.',
            'city.required' =>'Please Enter City Name.',
            'postcode.required' =>'Please Enter Region.',
            'phone.required' =>'Please Enter Phone Number.',
            'payment_method.required' =>'Please Choose One Payment Method.',
            'terms_conditions.required' =>'Please accept term and conditions.',
        ];
    }
}
