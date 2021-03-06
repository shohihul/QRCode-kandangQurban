<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CattlemanUpdateRequest extends FormRequest
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
            'email' => 'required',
            'name' => 'required',
            'gender' => 'required', 'in:male,female',
            'address' => 'required',
            'regencie_id' => 'required'
        ];
    }
}
