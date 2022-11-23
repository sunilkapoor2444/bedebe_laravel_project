<?php

namespace App\Http\Requests\Buyer;

use Illuminate\Foundation\Http\FormRequest;

class InvoicingAddressRequest extends FormRequest
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
            'post_code' => ['required', 'string', 'max:255'],
            'mobile' => ['numeric'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter Name.',
            'surname.required' =>'Please Enter Surname.',
            'address1.required' =>'Please Enter Address line 1.',
            'address2.required' =>'Please Enter Addres Line 2.',
            'post_code.required' =>'Please Enter Post Code.',
            'mobile.required' =>'Please Enter Phone Number.',
        ];
    }
}
