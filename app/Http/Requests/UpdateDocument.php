<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateDocument extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required|min:1|max:100',
            'description' => 'required|min:1|max:1000',
            'image_path'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file_path'   => 'nullable|max:10000'
        ];
    }
}
