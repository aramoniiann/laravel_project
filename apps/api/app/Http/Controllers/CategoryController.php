<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $category = Category::find($id);

        // if (!$category) {
        //     return response()->json([
        //         'message' => 'Categoria não encontrada',
        //     ], 404);
        // }

        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Category $category,
        Request $request
    ) {
        // $category = Category::find($id);

        // if (!$category) {
        //     return response()->json([
        //         'message' => 'Categoria não encontrada',
        //     ], 404);
        // }

        $category->name = $request->name ?? $category->name;
        $category->description = $request->description ?? $category->description;

        $category->save();

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Category $category
    ) {
        // $category = Category::find($id);

        // if (!$category) {
        //     //404 not found
        //     return response()->json([
        //         'message' => 'Categoria não encontrada',
        //     ], 404);
        // }

        $hasProduct = \App\Models\Product::where('category_id', $category->id)->exists();

        if ($hasProduct) {
            return response()->json([
                'message' => 'Categoria com produtos relacionados',
            ], 404);
        }

        $category->delete();

        return response()->json([
            'message' => 'Categoria excluída',
        ], 204);
    }
}
