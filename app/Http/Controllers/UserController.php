<?php

namespace examenesApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use examenesApp\User;
use examenesApp\Http\Requests;
use examenesApp\Http\Requests\UserCreateRequest;
use examenesApp\Http\Requests\UserUpdateRequest;
use examenesApp\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $users =User::paginate(4);
      return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserCreateRequest $request)
    {
        User::create($request->all());
        flash('Usuario agregado correctamente', 'success')->important();
        return Redirect::to('/user');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.edit');
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->user->fill($request->all());
        $this->user->save();
        flash('Datos guardados', 'success')->important();
        return Redirect::to('/user');
    }

    public function destroy($id)
    {
      $user=User::find($id);
      $user->delete();
      flash('Usuario eliminado satisfactoriamente','success')->important();
      return Redirect::to('/user');
    }
}
