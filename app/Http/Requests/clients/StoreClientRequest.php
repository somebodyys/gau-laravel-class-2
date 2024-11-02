<?php

namespace App\Http\Requests\clients;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
            'roles' => 'sometimes|array',
            'roles.*' => 'required|string|in:Basic,Premium,Manager,AdFree,Creator'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'email' => strtolower($this->first_name) . '.' . strtolower($this->last_name) . '@' . strtolower($this->company) . '.com',
            'roles' => array_merge($this->roles ?? [], ['Basic'])
        ]);
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'სახელი აუცილებელია!',
            'email.email' => 'ელ. ფოსტა არასწორია!',
            'roles.*.in' => 'როლი არასწორია!'
        ];
    }
}
