<?php

namespace App\Http\Requests;

use App\Sale;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreSaleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sale_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'item_nbr' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'wm_week'  => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'pos_qty'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
