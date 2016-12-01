<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsGuardar;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check()) {
            $this->middleware('auth');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::check()) {
            $panel = '/'.$request->user()->role;
            return redirect($panel);
        } else {
            return view('home');
        }
    }

    public function posts()
    {
        $posts = Post::Paginate(2);
        return view('posts/ver',compact('posts'));
    }

    public function postsForm()
    {
        return view('posts/form');
    }

    public function postsGuardar(postsGuardar $request)
    {
        $store = new Post;
        $store->titulo = $request->titulo;
        $store->contenido = $request->texto;
        $store->save();

        return Redirect::to('posts/form');
    }

    public function postShow($id)
    {
        $post = Post::find($id);
        return view('posts/show',compact('post'));
    }

    public function postDestroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return Redirect::to('/posts');
    }

    public function postUpdate($id)
    {
        $post = Post::find($id);
        return view('posts/update',compact('post'));
    }

    public function postUpdateProceso(Request $request)
    {
        $id = $request->id;
        $titulo = $request->titulo;
        $contenido = $request->texto;

        $post = Post::find($id);
        $post->titulo = $titulo;
        $post->contenido = $contenido;
        $post->save();

        return Redirect::to('/posts/'.$id.'/show');
    }

    public function logout()     
    {         
        auth::logout();         
        return redirect('/');     
    }
}
