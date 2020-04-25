<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create($cafe_id)
    {
        return view('review/create', ['cafe_id' => $cafe_id]);
    }

    public function store($cafe_id, Request $request)
    {
        $request->validate(
            [
            'title' => 'required|unique:reviews|max:255',
            'review' => 'required|unique:reviews',
        ],
            [
            'title.required' => 'タイトルは必須です。',
            'review.required' => 'レビュー内容は必須です。',
        ]
        );

        $review = new Review();
        $review->cafe_id = $cafe_id;
        $review->user_id = Auth::id();
        $review->title = $request->get('title');
        $review->review = $request->get('review');
        $review->food_evaluation = $request->get('food_evaluation');
        $review->access_evaluation = $request->get('access_evaluation');
        $review->feeling_evaluation = $request->get('feeling_evaluation');
        $review->save();
        return redirect(route('cafe.show', ['id' => $cafe_id]));
    }
}
