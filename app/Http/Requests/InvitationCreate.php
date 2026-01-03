<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvitationCreate extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'phone' => 'required|digits:10|',
            'name' => 'string|min:3|max:30',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Email address is required.',
            'email.email'    => 'Please enter a valid email address.',
            'email.unique'   => 'This email has already been used to submit the form.',

            'phone.required' => 'Mobile number is required.',
            'phone.digits'   => 'Mobile number must be exactly 10 digits.',
            'phone.unique'   => 'This mobile number has already been used to submit the form.',
        ];
    }
}
