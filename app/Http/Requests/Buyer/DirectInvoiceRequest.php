<?php

namespace App\Http\Requests\Buyer;

use Illuminate\Foundation\Http\FormRequest;

class DirectInvoiceRequest extends FormRequest
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
            'invoice_no' => ['required', 'string', 'max:255'],
            'quantity' => ['numeric'],
            'amount' => ['numeric'],
            'currency' => ['required', 'string', 'max:255'],
            'payment_method' => 'required',
            'terms_conditions' => 'required', 
        ];
    }

    public function messages()
    {
    return [
            'name.required' => 'Please Enter Supplier Name.',
            'invoice_no.required' =>'Please Enter Purchase Invoice No.',
            'quantity.required' =>'Please Enter Package Quantity.',
            'amount.required' =>'Please Enter Enter Amount.',
            'currency.required' =>'Please Enter Currency.',
            'payment_method.required' =>'Please Choose One Payment Method.',
            'terms_conditions.required' =>'Please accept term and conditions.',
        ];
    }
}
