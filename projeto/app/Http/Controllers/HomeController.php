<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurants = Restaurant::paginate(10);

        return view('home', ['restaurants' => $restaurants]);
    }

    public function show(Restaurant $slug)
    {
        //Using a normal route
        // $restaurant = Restaurant::whereSlug($slug)->first();

        //overriding route model binding --> getRouteKeyName on model
        $restaurant = $slug;
        return view('single', compact('restaurant'));
    }
}
