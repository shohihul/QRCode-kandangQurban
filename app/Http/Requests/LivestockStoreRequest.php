<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivestockStoreRequest extends FormRequest
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
            'cattleman_id' => 'required',
            'livestock_type_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'weight' => 'required',
            'decription' => 'required',
            'image' => 'required'
        ];
    }
}
