<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

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

    public function teste()
    {
        return Page::first();
    }
}
