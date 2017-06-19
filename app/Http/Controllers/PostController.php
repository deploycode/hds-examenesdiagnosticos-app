<?php

namespace examenesApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use examenesApp\Http\Requests;
use examenesApp\Http\Requests\PostRequest;
use examenesApp\Http\Controllers\Controller;
use Session;
use Redirect;
use Response;
use DB;
use examenesApp\Menu;
use examenesApp\Post;
use examenesApp\Image;

class PostController extends Controller
{
  public function __construct(){
    $this->middleware('auth',['only'=>['create','store','edit','update','destroy','index']]);
  }
    public function index()
    {
      $posts = Post::with(['menu'])->orderBy('title', 'asc')->get();
      return view('post.index', compact('posts'));
    }

    public function create()
    {
      $menus=Menu::lists('menu','id');
      return view('post.create', compact('menus'));
    }

    public function store(PostRequest $request)
    {
      $id=Post::create([
        'title'=>$request->title,
        'content'=>$request->content,
        'menu_id'=>$request->menu_id,
      ])->id;
      if ($request->name1) {
        Image::create([
          'route'=>$request->name1,
          'alt'=>$request->alt1,
          'post_id'=>$id,
        ]);
      }
      if ($request->name2) {
        Image::create([
          'route'=>$request->name2,
          'alt'=>$request->alt2,
          'post_id'=>$id,
        ]);
      }
      if ($request->name3) {
        Image::create([
          'route'=>$request->name3,
          'alt'=>$request->alt3,
          'post_id'=>$id,
        ]);
      }
      flash('Examen agregado correctamente','success')->important();
      return Redirect::to('/examen');
    }

    public function show($slug)
    {
      $menus=Menu::All();
      $posts = DB::table('posts')
                ->orderBy('title', 'asc')
                ->get();

      $post = Post::where('slug','=', $slug)->firstOrFail();
      $images = Image::where('post_id','=', $post->id)->get();
      $images_number = Image::where('post_id','=', $post->id)->count();
      return view("post.view", compact('menus','combo','posts','images','images_number'), ['post'=>$post]);
    }

    public function edit($id)
    {
        $menus=Menu::lists('menu','id');
        $post=Post::find($id);
        $images=Image::where('post_id','=', $id)->get();
        return view('post.edit', compact('images'),['post'=>$post,'menus'=>$menus]);
    }

    public function update(Request $request, $id)
    {
      $post=Post::find($id);
      $post->slug= null;
      $post->fill($request->all());
      $post->save();
      // ====================================================================
      $imagen=array(
        $request->image_id0,
        $request->image_id1,
        $request->image_id2,
      );
      $rutas=array(
        $request->image0,
        $request->image1,
        $request->image2,
      );
      $alts=array(
        $request->alt0,
        $request->alt1,
        $request->alt2,
      );
      for ($i=0; $i < 3; $i++)
      {
        $Image=Image::find($imagen[$i]);
        if (!empty($Image->route) && !empty($request->file('image'.$i)))
        {
          \Storage::delete($Image->route);
          $Image->route=$rutas[$i];
          $Image->alt=$alts[$i];
          $Image->save();
        }

      }
      //======================================================================
      // $Image1=Image::find($request->image_id0);
      // if (!empty($Image1->route) && !empty($request->file('image0'))) {
      //   \Storage::delete($Image1->route);
      //   $Image1->route=$request->image0;
      //   $Image1->alt=$request->alt0;
      //   $Image1->save();
      // }
      // $Image2=Image::find($request->image_id1);
      // if (!empty($Image2->route) && !empty($request->file('image1'))) {
      //   \Storage::delete($Image2->route);
      //   $Image2->route=$request->image1;
      //   $Image2->alt=$request->alt1;
      //   $Image2->save();
      // }
      // $Image3=Image::find($request->image_id2);
      // if (!empty($Image3->route) && !empty($request->file('image2'))) {
      //   \Storage::delete($Image3->route);
      //   $Image3->route=$request->image2;
      //   $Image3->alt=$request->alt2;
      //   $Image3->save();
      // }
      // // ======================================================================
      flash('Examen actualizado correctamente','success')->important();
      return Redirect::to('/examen');
    }

    public function destroy($id)
    {
      $post=Post::find($id);
      $images = Image::where('post_id','=', $post->id)->get();
      foreach ($images as $image) {
        if (!empty($image)) {
          \Storage::delete($image->route);
        }
      }
      $post->delete();
      flash('Examen eliminado correctamente','success');
      return Redirect::to('/examen');
    }
}
