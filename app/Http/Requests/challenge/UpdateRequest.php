<?php

namespace App\Http\Requests\challenge;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'reward_coins' => 'required|numeric',
            'max_users' => 'required|numeric',
            'category_id' => 'required',
            'expiration_date' => 'required|date|after_or_equal:today',
            'category_quantity' => 'required|numeric',
        ];
    }
}
