<?php

namespace examenesApp\Http\Controllers;

use Illuminate\Http\Request;

use examenesApp\Http\Requests;
use examenesApp\Http\Requests\MenuRequest;
use examenesApp\Http\Controllers\Controller;
use examenesApp\Menu;
use Illuminate\Routing\Route;
use Redirect;

class MenuController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

    public function listing(){
      $menus = Menu::all();
      return response()->json(
        $menus->toArray()
      );
    }
    public function index()
    {
        $menus=Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(MenuRequest $request)
    {
        Menu::create($request->all());
        flash('Menu agregado correctamente','success')->important();
        return Redirect::to('/menu');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $menu=Menu::find($id);
        return view('menu.edit', compact('menu'));
    }

    public function update(MenuRequest $request, $id)
    {
        $menu=Menu::find($id);
        $menu->fill($request->all());
        $menu->save();
        flash('Menu actualizado correctamente', 'success')->important();
        return Redirect::to('/menu');
    }

    public function destroy($id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        flash('Menu eliminado satisfactoriamente','success')->important();
        return Redirect::to('/menu');
    }
}
