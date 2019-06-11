@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productCustom.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productCustom.fields.upc') }}
                        </th>
                        <td>
                            {{ $productCustom->upc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCustom.fields.brand') }}
                        </th>
                        <td>
                            {{ $productCustom->brand }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Back
            </a>
        </div>
    </div>
</div>
@endsection