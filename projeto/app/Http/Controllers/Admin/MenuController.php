<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('admin.menus.index', ['menus' => $menus]);
    }

    public function new()
    {
        return view('admin.menus.store');
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
    public function store(MenuRequest $MenuRequest)
    {
        $menuData = $MenuRequest->all();

        //Returns an array with the fields in wich has been validated
        $validated = $MenuRequest->validated();

        $menu = new Menu();
        $menu->create($menuData);

        flash("Menu has been successfuly registered!")->success();
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
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $menuRequest, $id)
    {
        $menuData = $menuRequest->all();

        //Returns an array with the fields in wich has been validated
        $validated = $menuRequest->validated();

        $menu = Menu::findOrFail($id);
        $menu->update($menuData);

        flash("Menu has been successfuly changed!")->success();
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
        $menu = Menu::findOrFail($id);
        $menu->delete();

        flash("Menu has been successfuly removed!")->success();
        return $this->redirectToIndex();
    }

    private function redirectToIndex()
    {
        return redirect()->route('menu.index');
    }
}
