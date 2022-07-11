<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsCollection;
use App\Models\Item;

class ProductsController extends Controller
{
    public function index(): ProductsCollection
    {
        $length = request('length', 10);
        $products = Item::query()
            ->paginate($length)->withQueryString();
        return new ProductsCollection($products);
    }
}
