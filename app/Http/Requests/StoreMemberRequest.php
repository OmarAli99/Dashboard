<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'name' => 'required|string',
            'position' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook' => 'url|required|string',
            'twitter' => 'url|required|string',
            'linkedin' => 'url|required|string',

                      

            
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
