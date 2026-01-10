<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InvitationCreate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('wedding');
        return [
            'email' => ['required', 'email', Rule::unique('weddings', 'email')->ignore($userId)],
            'phone' => ['required', 'digits:10', Rule::unique('weddings', 'phone')->ignore($userId)],
            'name' => ['nullable', 'string', 'min:3', 'max:30'],
           
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email has already been used to submit the form.',

            'phone.required' => 'Mobile number is required.',
            'phone.digits' => 'Mobile number must be exactly 10 digits.',
            'phone.unique' => 'This mobile number has already been used to submit the form.',

            'name.min' => 'Name must be at least 3 characters.',
            'name.max' => 'Name may not be greater than 30 characters.',
        ];
    }
}
