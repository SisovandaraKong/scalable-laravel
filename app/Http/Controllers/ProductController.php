<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Store a new product.
     */
    public function store(Request $request)
    {
        // Validatin
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $product = Product::create($validated);

        // Return success response with 201 Created status
        return response()->json([
            'success' => true,
            'message' => 'Product created successfully.',
            'data' => $product,
        ], 201);
    }

/**
 * List all products
 */
public function index()
{
    $products = Product::all();

    return response()->json([
        'success' => true,
        'data' => $products,
        'message' => 'Products retrieved successfully.',
    ], 200);
}

}
