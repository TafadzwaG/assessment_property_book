<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('one-ui-admin.layouts.services')->with('services', $services);
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
        // $service_data = $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required|string',
        //     'icon' => 'nullable|image:png:jpeg:jpg:gif'

        // ]);

        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'icon' => 'nullable|image:png:jpeg:jpg:gif'
        ]);

        $icon_path = $request->file('icon')->store('icon', 'public');

        $data = Service::create([
            'icon' =>  $icon_path,
        ]);
    
        // if ($request->has('icon')) {
        //     $imageName = time() . "update_image" . "." . $request->photo->getClientOriginalExtension();
        //     $request->image->move(public_path('images'), $imageName);
        //     $data["image"] = $imageName;
        // }

        // $service = Service::create($service_data);

        return redirect('/services')->with('status', 'Added New Service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return $service;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
