<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddGuestRequest extends FormRequest
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
        $guestId = $this->route('wedding');

        return [
            'name' =>  ['string', 'max:30'],
            'email' => ['required', 'email', 'max:50', Rule::unique('weddings')->ignore($guestId)],
            'phone' => ['required', 'digits:10', Rule::unique('weddings')->ignore($guestId)]
        ];
    }
}
