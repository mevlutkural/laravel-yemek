<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $userId = $this->get('user_id') ?? 0;
        return [
            'name_surname' => 'required|sometimes|max:255',
            'email'        => 'required|sometimes|email|max:255|unique:App\Models\User,email,' . $userId,
            'password'     => 'required|sometimes|min:5|confirmed',
        ];
    }

    protected function passedValidation()
    {
        if ($this->request->has("password")) {
            $password = $this->request->get("password");
            $this->request->set("password", Hash::make($password));
        }
    }
}