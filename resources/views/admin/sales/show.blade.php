@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sale.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.id') }}
                        </th>
                        <td>
                            {{ $sale->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.item_nbr') }}
                        </th>
                        <td>
                            {{ $sale->item_nbr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.wm_week') }}
                        </th>
                        <td>
                            {{ $sale->wm_week }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.pos_qty') }}
                        </th>
                        <td>
                            {{ $sale->pos_qty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.pos_sales') }}
                        </th>
                        <td>
                            ${{ $sale->pos_sales }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection