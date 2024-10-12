<?php

namespace App\Http\Requests\cars;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'brand' => 'required|string',
            'color' => 'required|string|in:blue,red',
            'engine' => 'required|numeric|max:20|min:10',
            'battery_capacity' => 'required|numeric'
        ];
    }
}
