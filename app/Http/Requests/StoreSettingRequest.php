<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

      public function rules(): array
    {
       return [
           'address' => 'required|string',
           'phone' => 'required|string|min:10|max:20',
           'email' => 'required|email|string',
           'facebook' => 'nullable|url|string',
           'twitter' => 'nullable|url|string',
           'youtube' => 'nullable|url|string',
           'linkedin' =>'nullable|url|string',
           'instagram' => 'nullable|url|string',
            
        ];
    }

    public function attributes()
    {
        return [
          //  'title' => __('keywords.title'),
          //  'icon' =>__('keywords.icon'),
          //  'description' =>__('keywords.description'),

            
        ];
    }
}
