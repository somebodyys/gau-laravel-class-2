<?php

namespace App\Http\Requests\cars;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => 'sometimes|string',
            'color' => 'sometimes|string|in:blue,red',
            'engine' => 'sometimes|numeric|max:20|min:10',
            'battery_capacity' => 'sometimes|numeric'
        ];
    }
}
