<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Auth::user()->restaurants;
        return view('admin.restaurants.index', compact('restaurants'));
    }

    public function new()
    {
        return view('admin.restaurants.store');
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
    public function store(RestaurantRequest $request)
    {
        $restaurantData = $request->all();

        //Returns an array with the fields in wich has been validated
        $validated = $request->validated();

        $user = Auth::user();
        $user->restaurants()->create($restaurantData);

        flash("Restaurant has been successfuly registered!")->success();
        return $this->redirectToIndex();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantRequest $request, $id)
    {
        $restaurantData = $request->all();

        //Returns an array with the fields in wich has been validated
        $validated = $request->validated();

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($restaurantData);

        flash("Restaurant has been successfuly changed!")->success();
        return $this->redirectToIndex();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        flash("Restaurant has been successfuly removed!")->success();
        return $this->redirectToIndex();
    }

    private function redirectToIndex()
    {
        return redirect()->route('restaurant.index');
    }
}
