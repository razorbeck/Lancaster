<?php

namespace App\Http\Requests;

use App\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyContactContactRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('contact_contact_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:contact_contacts,id',
        ];
    }
}
