<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            'affiche' => ['required', 'image', 'max:4096'],
            'titre' =>['required', 'string', 'max:100'],
            'description' =>['required', 'string'],
            'budget' =>['required', 'alpha_num', 'min:0'],
        ];
    }
}
