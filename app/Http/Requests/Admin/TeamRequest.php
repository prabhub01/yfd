<?php

namespace App\Http\Requests\Admin;

use App\Helper\Helper;
use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'full_name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'photo' => 'required|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'full_name'.'required' => "Full name is required.",
            'designation'.'required' => "Designation is required.",
            'description'.'required' => "Description is required.",
            'photo'.'required' => "Photo is required.",
            'photo'.'max' => "Photo siz must be below 5 Mb.",
        ];
    }
}
