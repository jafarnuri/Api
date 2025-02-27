<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MashinRequest extends FormRequest
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
            'name'=>'required|min:3|max:250',
            'model'=>'required|min:3|max:250',
            'price'=>'required|numeric|min0'
        ];
    }
    public function messages(){
            return[
                'name.required' => 'Maşının adı tələb olunur.',
                'model.min' => 'Model adı ən az 3 simvol olmalıdır.',
                'price.min' => 'Maşının qiymeti 0 dan yuksek olmalidir .',
            ];
    }
}
