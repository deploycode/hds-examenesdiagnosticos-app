<?php

namespace examenesApp\Http\Controllers;

use Illuminate\Http\Request;
use examenesApp\Menu;
use examenesApp\Post;
use examenesApp\Http\Requests;
use examenesApp\Http\Controllers\Controller;
use DB;

class FrontController extends Controller
{
    public function __construct(){
      $this->middleware('auth',['only'=>'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $menus=Menu::all();
      $posts = DB::table('posts')
                ->orderBy('title', 'asc')
                ->get();
      return view('index', compact('menus', 'posts'));
    }
    public function citas()
    {
      $posts = DB::table('posts')
                ->orderBy('title', 'asc')
                ->get();
      return view('citas', compact('posts'));
    }
    public function login()
    {
        return view('login');
    }
    public function admin()
    {
        return view('admin.index');
    }

}
