<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

use function Laravel\Prompts\password;

class UserUpdateRequest extends FormRequest
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
           'nom' =>['required', 'string', 'max:20'],
           'prenom' =>['required', 'string', 'max:20'],
           'email' =>['required', 'string', 'email', Rule::unique('users', 'email')->ignore($this->user)],
           'password' =>['nullable', 'string', 'confirmed', Password::defaults()],
           'tel' =>['nullable', 'string', 'max:30'],
        ];
    }
}
