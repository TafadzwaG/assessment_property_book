<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Price;
use App\Models\Service;
use App\Models\HomeBanner;
use App\Models\OurStory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer_content = Footer::get();

        $prices = Price::get();

        $services = Service::inRandomOrder()->limit(8)->get();
        //Getting 1 Story in random order
        $story = OurStory::inRandomOrder()->limit(1)->get();

        $home_banner = HomeBanner::inRandomOrder()->limit(1)->get();

        return view('home.home', [
            'footer_content' =>  $footer_content,
            'prices' => $prices,
            'services' =>  $services,
            'story' => $story,
            'home_banner' => $home_banner
        ]);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }
}
