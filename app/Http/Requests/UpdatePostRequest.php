<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cover_image' => ['sometimes', 'mimes:png,jpg,svg,gif', 'max:2048'],
            'title' => ['sometimes', 'max:200', 'min:5'],
            'category_id' => ['sometimes'],
            'excerpt' =>['sometimes', 'max:400', 'min:10'],
            'body' => ['sometimes', 'min:5'],
            'published_at' => ['sometimes'],
            'tags' => ['sometimes'],
            'meta_description' => ['sometimes', 'min:5', 'max:250']
        ];
    }
}
