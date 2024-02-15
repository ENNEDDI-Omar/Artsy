<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssigneArtisteStoreRequest extends FormRequest
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
            'project_id' => ['required', 'exists:projects,id'],
            'artist_id' => ['required', 'array'],
            'artist_id.*' => ['exists:users,id'],

        ];
    }
}
