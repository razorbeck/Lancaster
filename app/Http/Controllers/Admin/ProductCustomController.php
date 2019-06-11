<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductCustomRequest;
use App\Http\Requests\StoreProductCustomRequest;
use App\Http\Requests\UpdateProductCustomRequest;
use App\ProductCustom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductCustomController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('product_custom_access'), 403);

        $productCustoms = ProductCustom::all();

        return view('admin.productCustoms.index', compact('productCustoms'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('product_custom_create'), 403);

        return view('admin.productCustoms.create');
    }

    public function store(StoreProductCustomRequest $request)
    {
        abort_unless(\Gate::allows('product_custom_create'), 403);

        $productCustom = ProductCustom::create($request->all());

        return redirect()->route('admin.product-customs.index');
    }

    public function edit(ProductCustom $productCustom)
    {
        abort_unless(\Gate::allows('product_custom_edit'), 403);

        return view('admin.productCustoms.edit', compact('productCustom'));
    }

    public function update(UpdateProductCustomRequest $request, ProductCustom $productCustom)
    {
        abort_unless(\Gate::allows('product_custom_edit'), 403);

        $productCustom->update($request->all());

        return redirect()->route('admin.product-customs.index');
    }

    public function show(ProductCustom $productCustom)
    {
        abort_unless(\Gate::allows('product_custom_show'), 403);

        return view('admin.productCustoms.show', compact('productCustom'));
    }

    public function destroy(ProductCustom $productCustom)
    {
        abort_unless(\Gate::allows('product_custom_delete'), 403);

        $productCustom->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductCustomRequest $request)
    {
        ProductCustom::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
