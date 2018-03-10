<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Coment;

class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->simplePaginate(5);
    	return view('welcome')->with(['posts' => $posts]);
    }

    public function show($slug)
    {
    	$post = Post::findBySlug($slug);

    	return view('post')->with(['post' => $post]);
    }

    public function comentStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Coment::create([
            'nome' => $request->name,
            'comentario' => $request->message,
            'email' => $request->email,
            'telefone' => $request->phone,
            'aprovado' => false,
        ]);

        return redirect()->route('contato');
    }

    public function about()
    {
        return view('about');
    }

    public function teste()
    {
        return Page::first();
    }
}
