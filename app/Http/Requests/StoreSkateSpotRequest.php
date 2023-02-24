<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkateSpotRequest extends FormRequest
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
        return [
            'user_id' => 'required',
            'title' => 'string|required|max:255',
            'lat' => 'required|string',
            'lng' => 'required|string',
            'description' => 'required',
            'features' => 'required|string',
            'terrain' => 'required|string',
        ];
    }
}
