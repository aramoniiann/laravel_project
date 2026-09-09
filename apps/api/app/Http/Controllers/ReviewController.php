<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewStoreRequest;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Review::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewStoreRequest $request)
    {
        $data = $request->validated();

        $review = Review::create($data);

        return $review;
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return $review;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Review $review, Request $request)
    {
        $review->rating = $request->rating ?? $review->rating;
        $review->comment= $request->comment ?? $review->comment;

        $review->save();

        return $review;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(review $review)
    {
        $review->delete();

        return response()->json([
            'message' => "Avaliação excluída",
        ], 204);
    }
}
