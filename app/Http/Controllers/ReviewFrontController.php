<?php

namespace App\Http\Controllers;


use App\Models\Review;
use Illuminate\Http\Request;

class ReviewFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ListReview = Review::all();

      return view('review.reviewFront',compact("ListReview"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
        'Subject' => 'required',
        'Commentaire' => 'required',
        'image' => 'required'
      ]);
      $name = $request->file('image')->hashName();
      request()->file('image')->move(public_path() . '/images/' , $name);
      $post=new \App\Models\Post();
      $post->Subject=$request->Subject;
      $post->Commentaire=$request->Commentaire;
      $post->image=$name;
      $post->user_id=$request->user;
      $post->review_id=$request->review;
      $post->save();
      return redirect()->route('clientreview.show',$request->review)->with('success','successsssssssssssss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function show(int $reviews)

  {
    $review=Review::find($reviews);

    $posts = $review->posts;
    $wordCount = count($posts);
    return view('review.showfront',compact('review','posts',"wordCount"));  }


  /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
