<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Request;

class EventCreateRequest extends FormRequest
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
        $eventId = $this->route('event');
        return [
            'name' => ['required', 'string', Rule::unique('events')->ignore($eventId)],
            'description' => ['nullable', 'string', 'max:50'],
            'icon' => ['nullable', 'string'],
            'date' => ['required', 'string', 'date'],
            'time' => ['required', 'string', 'date_format:H:i'],
            'status' => ['required', 'integer', 'in:0,1'],
        ];
    }
    protected function prepareForValidation()
    {
        // dd($this->all());
        
    }
}
