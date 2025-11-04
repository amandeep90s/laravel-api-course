<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['message' => 'All posts will be listed here'];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['message' => 'Post created successfully'];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ['message' => "Showing post with ID: $id"];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ['message' => "Post with ID: $id updated successfully"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ['message' => "Post with ID: $id deleted successfully"];
    }
}
