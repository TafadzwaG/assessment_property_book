<?php

namespace App\Http\Controllers;

use App\Models\StoryPhoto;
use Illuminate\Http\Request;

class StoryPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storyPhotos = StoryPhoto::all();

        return view('one-ui-admin.layouts.storyphoto')->with(
            'storyphotos', $storyPhotos
        );
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoryPhoto  $storyPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(StoryPhoto $storyPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoryPhoto  $storyPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(StoryPhoto $storyPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoryPhoto  $storyPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoryPhoto $storyPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoryPhoto  $storyPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoryPhoto $storyPhoto)
    {
        //
    }
}
