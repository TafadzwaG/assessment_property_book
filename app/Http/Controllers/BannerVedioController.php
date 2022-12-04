<?php

namespace App\Http\Controllers;

use App\Models\BannerVedio;
use Illuminate\Http\Request;

class BannerVedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerVedio = BannerVedio::get();

        return  $bannerVedio;
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
     * @param  \App\Models\BannerVedio  $bannerVedio
     * @return \Illuminate\Http\Response
     */
    public function show(BannerVedio $bannerVedio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerVedio  $bannerVedio
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerVedio $bannerVedio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerVedio  $bannerVedio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BannerVedio $bannerVedio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerVedio  $bannerVedio
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerVedio $bannerVedio)
    {
        //
    }
}
