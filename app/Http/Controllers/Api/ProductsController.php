<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(): ProductsCollection
    {
        $json = Storage::disk('public')->get('shopify.json');

        dd($json);



        $page = request('page', 1);
        $length = request('length', 10);
        $products = Product::with([
                    'tags:tag',
                    'options:id,name,position',
                    'options.values:option_id,value',
                    'images',
                    'variants'
                ])
            ->paginate($length)->withQueryString();
        return new ProductsCollection($products);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Product $product)
    {
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
