<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCustomRequest;
use App\Http\Requests\UpdateProductCustomRequest;
use App\ProductCustom;

class ProductCustomApiController extends Controller
{
    public function index()
    {
        $productCustoms = ProductCustom::all();

        return $productCustoms;
    }

    public function store(StoreProductCustomRequest $request)
    {
        return ProductCustom::create($request->all());
    }

    public function update(UpdateProductCustomRequest $request, ProductCustom $productCustom)
    {
        return $productCustom->update($request->all());
    }

    public function show(ProductCustom $productCustom)
    {
        return $productCustom;
    }

    public function destroy(ProductCustom $productCustom)
    {
        return $productCustom->delete();
    }
}
