<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'Electric cars retrieved successfully',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'status' => true,
            'message' => 'Electric car saved successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'status' => true,
            'message' => 'Electric car retrieved successfully',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'status' => true,
            'message' => 'Electric cars updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'status' => true,
            'message' => 'Electric cars deleted successfully',
        ]);
    }

    public function test(Request $request, $car): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => "Electric ID: $car test successfully",
        ]);
    }
}
