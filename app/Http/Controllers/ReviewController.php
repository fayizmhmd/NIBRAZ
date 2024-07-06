<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function viewReviews()
    {
        $reviews = Review::all();
        return view('admin.reviews.view_review', compact('reviews'));
    }

    public function addReviews()
    {
        $reviews = Review::all();
        return view('admin.reviews.add_review', compact('reviews'));
    }

    public function saveReviews(Request $request)
    {
        $review               =   new Review();
        $review->name         =   $request->name;
        $review->position = $request->position;
        $review->review = $request->review;

        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/reviews/'), $imageName);
            @unlink(public_path($review->image));
            $review->image = 'reviews/' . $imageName;
        }
        $review->save();
        return redirect()->route('admin.viewReviews')->with('message', 'Review added successfully');
    }

    public function editReviews($id)
    {
        $review = Review::find($id);
        return view('admin.reviews.edit_review', compact('review', 'id'));
    }

    public function updateReview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->name = $request->name;
        $review->position = $request->position;
        $review->review = $request->review;

        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/reviews/'), $imageName);
            @unlink(public_path($review->image));
            $review->image = 'reviews/' . $imageName;
        }

        $review->save();

        return redirect()->route('admin.viewReviews')->with('message', 'Review updated successfully');
    }


    public function toggleReview($id)
    {
        $review = Review::find($id);
        if ($review) {
            $review->toggleActive();
            $review->save();
            return redirect()->back()->with(['message' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['message' => 'Something Went Wrong']);
        }
    }


    public function deleteReview($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('admin.viewReviews')->with('message', 'Review deleted successfully');
    }
}
