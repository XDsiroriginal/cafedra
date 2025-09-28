<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $products = Product::all();

            return response()->json($products);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to get products',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
