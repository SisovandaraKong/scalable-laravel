<?php

namespace App\Http\Controllers;

use App\Models\CacheEntry;
use Illuminate\Http\Request;

class CacheController extends Controller
{
    public function index()
    {
        $caches = CacheEntry::all();

        return response()->json([
            'success' => true,
            'data' => $caches,
            'message' => 'Cache entries retrieved successfully.',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string',
            'value' => 'required|string',
            'expiration' => 'required|integer',
        ]);

        $cache = CacheEntry::updateOrCreate(
            ['key' => $validated['key']],
            $validated
        );

        return response()->json([
            'success' => true,
            'message' => 'Cache entry saved successfully.',
            'data' => $cache,
        ], 201);
    }

    public function show($key)
    {
        $cache = CacheEntry::find($key);

        if (!$cache) {
            return response()->json([
                'success' => false,
                'message' => 'Cache entry not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $cache,
            'message' => 'Cache entry retrieved successfully.',
        ]);
    }

    public function destroy($key)
    {
        $cache = CacheEntry::find($key);

        if (!$cache) {
            return response()->json([
                'success' => false,
                'message' => 'Cache entry not found.',
            ], 404);
        }

        $cache->delete();

        return response()->json([
            'success' => true,
            'message' => 'Cache entry deleted successfully.',
        ]);
    }
}
