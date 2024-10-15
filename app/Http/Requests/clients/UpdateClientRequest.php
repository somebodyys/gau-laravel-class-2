<?php

namespace App\Http\Requests\clients;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'first_name' => 'sometimes|string',
            'last_name' => 'sometimes|string',
            'company' => 'sometimes|string',
            'roles' => 'sometimes|array',
            'roles.*' => 'required|string|in:Basic,Premium,Manager,AdFree,Creator'
        ];
    }
}
