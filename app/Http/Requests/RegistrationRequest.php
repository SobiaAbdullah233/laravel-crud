<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fname' => 'required|string|max:13',
            'lname' => 'required|string|max:30',
            'address1'=>'required|string|max:250',
            'address2'=>'required|string|max:250',
            'state'=>'required|string|max:15',
            'zip'=>'required|string|max:18',
            'city'=>'required|string|max:15',
            'email'=>'required|string|',
            'phone'=>'required|string|max:18',
            'category'=>'required',
            'contectway'=>'required'

        ];
    }
}
