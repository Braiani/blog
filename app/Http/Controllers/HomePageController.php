<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class HomePageController extends Controller
{
    public function index()
    {
        $about = Page::where('slug', 'sobre-brtech-sistemas')->first();
        return view('homepage')->with(['about' => $about]);
    }
}
