<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'title' => 'Sample Post Title',
        //     'author' => 'Author Name',
        //     'author2' => 'Co-Author Name',
        //     'body' => 'This is the body of the sample post.',
        //     'poblished' => true,
        'title' => 'bail|required|unique:posts,title,{$this->input("id")}',
        'author' => 'bail|required|string|max:255|',
        'author2' => 'nullable|string|max:255',
        'body' => 'required|string',
        'poblished' => 'boolean',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.unique' => 'The title has already been taken.',
            'author.required' => 'The author field is required.',
            'author.string' => 'The author must be a string.',
            'author.max' => 'The author may not be greater than 255 characters.',
            'author2.string' => 'The co-author must be a string.',
            'author2.max' => 'The co-author may not be greater than 255 characters.',
            'body.required' => 'The body field is required.',
            'body.string' => 'The body must be a string.',
            'poblished.boolean' => 'The published field must be true or false.',
        ];
    }
}
