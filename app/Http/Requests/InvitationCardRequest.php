<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InvitationCardRequest extends FormRequest
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
        $invitationCardId = $this->route('invitationCard');
        return [
            'name' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'string', 'max:30', Rule::unique('invitation_cards', 'email')->ignore($invitationCardId)],
            'phone' => ['nullable', 'digits:10', 'max:30', Rule::unique('invitation_cards', 'phone')->ignore($invitationCardId)],
            'description' => ['nullable', 'integer', 'max:30'],
            'address' => ['nullable'],
            'comments' => ['nullable'],
        ];
    }
}
