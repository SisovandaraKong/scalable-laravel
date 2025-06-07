<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return response()->json([
            'success' => true,
            'data' => $jobs,
            'message' => 'Jobs retrieved successfully.'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'queue' => 'required|string',
            'payload' => 'required|string',
            'attempts' => 'required|integer',
            'reserved_at' => 'nullable|integer',
            'available_at' => 'required|integer',
            'created_at' => 'required|integer',
        ]);

        $job = Job::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Job created successfully.',
            'data' => $job,
        ], 201);
    }

    public function show($id)
    {
        $job = Job::find($id);

        if (!$job) {
            return response()->json([
                'success' => false,
                'message' => 'Job not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $job,
            'message' => 'Job retrieved successfully.'
        ]);
    }

    public function update(Request $request, $id)
    {
        $job = Job::find($id);

        if (!$job) {
            return response()->json([
                'success' => false,
                'message' => 'Job not found.'
            ], 404);
        }

        $validated = $request->validate([
            'queue' => 'sometimes|string',
            'payload' => 'sometimes|string',
            'attempts' => 'sometimes|integer',
            'reserved_at' => 'nullable|integer',
            'available_at' => 'sometimes|integer',
            'created_at' => 'sometimes|integer',
        ]);

        $job->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Job updated successfully.',
            'data' => $job,
        ]);
    }

    public function destroy($id)
    {
        $job = Job::find($id);

        if (!$job) {
            return response()->json([
                'success' => false,
                'message' => 'Job not found.'
            ], 404);
        }

        $job->delete();

        return response()->json([
            'success' => true,
            'message' => 'Job deleted successfully.'
        ]);
    }
}
