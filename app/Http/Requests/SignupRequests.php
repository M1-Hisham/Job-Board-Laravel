<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequests extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'email' => 'bail|required|string|email|max:255|unique:users',
            'password' => 'bail|required|string|min:8|confirmed',
            'password_confirmation' => 'bail|required|string|min:8|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.max' => 'Name cannot exceed 50 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.confirmed' => 'Password confirmation does not match.',
            'password_confirmation.required' => 'Please confirm your password.',
            'password_confirmation.same' => 'Password confirmation does not match the password.',
        ];
    }
}
