<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    protected $redirectRoute = 'productos.index';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|string',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }
}
