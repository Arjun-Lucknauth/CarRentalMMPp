<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/* This controller allows form validation for checkout. There is no need to create validation request on JS file
Thank you Laravel For this facility !
*/


class CheckoutRequest extends FormRequest
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
            'email' => $emailValidation,
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'phone' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'email.unique' => 'You already have an account with this email address. Please <a href="/login">login</a> to continue.',
        ];
    }
    
    
}
