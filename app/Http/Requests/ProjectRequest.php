<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required|max:500',
            'overview' => "required",
            'activities' => "required",
            'donor_partners' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'status' => 'required',
            'final_outcomes' => 'required_if:status,==,completed'
        ];
    }
}
