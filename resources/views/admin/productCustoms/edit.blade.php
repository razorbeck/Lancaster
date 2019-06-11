@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.productCustom.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.product-customs.update", [$productCustom->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('upc') ? 'has-error' : '' }}">
                <label for="upc">{{ trans('cruds.productCustom.fields.upc') }}*</label>
                <input type="text" id="upc" name="upc" class="form-control" value="{{ old('upc', isset($productCustom) ? $productCustom->upc : '') }}" required>
                @if($errors->has('upc'))
                    <p class="help-block">
                        {{ $errors->first('upc') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.productCustom.fields.upc_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('brand') ? 'has-error' : '' }}">
                <label for="brand">{{ trans('cruds.productCustom.fields.brand') }}</label>
                <input type="text" id="brand" name="brand" class="form-control" value="{{ old('brand', isset($productCustom) ? $productCustom->brand : '') }}">
                @if($errors->has('brand'))
                    <p class="help-block">
                        {{ $errors->first('brand') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.productCustom.fields.brand_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection