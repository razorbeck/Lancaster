@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sale.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sales.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('item_nbr') ? 'has-error' : '' }}">
                <label for="item_nbr">{{ trans('cruds.sale.fields.item_nbr') }}*</label>
                <input type="number" id="item_nbr" name="item_nbr" class="form-control" value="{{ old('item_nbr', isset($sale) ? $sale->item_nbr : '') }}" step="1" required>
                @if($errors->has('item_nbr'))
                    <em class="invalid-feedback">
                        {{ $errors->first('item_nbr') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sale.fields.item_nbr_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('wm_week') ? 'has-error' : '' }}">
                <label for="wm_week">{{ trans('cruds.sale.fields.wm_week') }}*</label>
                <input type="number" id="wm_week" name="wm_week" class="form-control" value="{{ old('wm_week', isset($sale) ? $sale->wm_week : '') }}" step="1" required>
                @if($errors->has('wm_week'))
                    <em class="invalid-feedback">
                        {{ $errors->first('wm_week') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sale.fields.wm_week_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('pos_qty') ? 'has-error' : '' }}">
                <label for="pos_qty">{{ trans('cruds.sale.fields.pos_qty') }}</label>
                <input type="number" id="pos_qty" name="pos_qty" class="form-control" value="{{ old('pos_qty', isset($sale) ? $sale->pos_qty : '') }}" step="1">
                @if($errors->has('pos_qty'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pos_qty') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sale.fields.pos_qty_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('pos_sales') ? 'has-error' : '' }}">
                <label for="pos_sales">{{ trans('cruds.sale.fields.pos_sales') }}</label>
                <input type="number" id="pos_sales" name="pos_sales" class="form-control" value="{{ old('pos_sales', isset($sale) ? $sale->pos_sales : '') }}" step="0.01">
                @if($errors->has('pos_sales'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pos_sales') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sale.fields.pos_sales_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection