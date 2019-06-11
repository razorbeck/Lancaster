<?php

namespace App\Http\Requests;

use App\ProductCustom;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductCustomRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('product_custom_edit');
    }

    public function rules()
    {
        return [
            'upc'   => [
                'required',
                'max:13',
            ],
            'brand' => [
                'max:50',
            ],
        ];
    }
}
