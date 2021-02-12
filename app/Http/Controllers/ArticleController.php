<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Footer;
use App\Models\Nav1;
use App\Models\Nav2;
use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articledb = Article::all();
        $navbardb1 = Nav1::all();
        $navbardb2 = Nav2::all();
        $footerDB = Footer::all();
        $networksDB = Network::all();
        return view("pages.article", compact("articledb", "navbardb1", "navbardb2", "footerDB", "networksDB"));
    }

    public function boArticle(){
        $article = Article::all();
        return view("boArticle", compact("article"));
    }

    public function store(Request $request)
    {
        $store = new Article;
        $store->title = $request->title;
        $store->number = $request->number;
        $store->subtitle = $request->subtitle;
        $store->paragraph = $request->paragraph;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Article::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function show($id)
    {
        $show = Article::find($id);
        return view("show", compact("show"));
    }
}
