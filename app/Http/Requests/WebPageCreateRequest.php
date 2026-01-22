<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WebPageCreateRequest extends FormRequest
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
        $webPageId = $this->route('webPage');
        return [
            'title' => ['required', 'string', ],
            'name' => ['required', 'string', ],
            'icon' => ['nullable', 'string',],
            'primary_person' => ['required', 'string', 'max:50'],
            'primary_contact' => ['required', 'min:10','max:12', Rule::unique('web_pages', 'primary_contact')->ignore($webPageId)],
            'secondary_person' => ['nullable', 'string', 'max:50'],
            'secondary_contact' => ['nullable', 'min:10','max:12', Rule::unique('web_pages', 'secondary_contact')->ignore($webPageId)],
            'email' => ['required', 'email', Rule::unique('web_pages', 'email')->ignore($webPageId)],
            'copyright' => ['nullable', 'string', 'max:100'],
            'map' => ['nullable', 'string', ],
            'address' => ['nullable', 'string', ],
            'status' => ['required', 'in:0,1'],
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'   => 'Title is required.',
            'title.max'        => 'Title may not exceed 30 characters.',

            'primary_person.required' => 'Primary person name is required.',

            'primary_contact.required' => 'Primary contact number is required.',
            'primary_contact.digits'   => 'Primary contact must be 10 digits.',
            'primary_contact.unique'   => 'This primary contact number already exists.',

            'secondary_contact.digits' => 'Secondary contact must be 10 digits.',
            'secondary_contact.unique' => 'This secondary contact number already exists.',

            'email.required' => 'Email address is required.',
            'email.email'    => 'Please enter a valid email address.',
            'email.unique'   => 'This email address is already registered.',

            'status.required' => 'Status is required.',
            'status.in'       => 'Invalid status selected.',
        ];
    }
    protected function prepareForValidation()
    {
        
    }
}
