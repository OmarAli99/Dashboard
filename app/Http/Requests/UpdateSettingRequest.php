<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
           'facebook' => 'required|url|string',
           'twitter' => 'required|url|string',
           'youtube' => 'required|url|string',
           'linkedin' =>'required|url|string',
           'instagram' => 'required|url|string',

            
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
