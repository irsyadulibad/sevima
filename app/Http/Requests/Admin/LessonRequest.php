<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = request()->getMethod();
        $validations = [
            'name' => 'required|string',
            'description' => 'required|string'
        ];

        if($this->thumbnail || $method == 'POST') {
            $validations['thumbnail'] = 'required|file|image';
        }

        return $validations;
    }
}
