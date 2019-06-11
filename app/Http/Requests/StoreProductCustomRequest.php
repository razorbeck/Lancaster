<?php

namespace App\Http\Requests;

use App\ProductCustom;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductCustomRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('product_custom_create');
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
