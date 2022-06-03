<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiciiRequest extends FormRequest
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
            'title' => 'required',
            'nav_title' => 'required',
            'meta_description' => ['required | nullable'],
            'tagline' => 'required',
            'cover_image' =>'sometimes',
            'video_id' => ['sometimes | nullable']
        ];
    }
}
