<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Home;
use App\Models\Home2;
use App\Models\HomeLi;
use App\Models\HomeLi2;
use App\Models\Nav1;
use App\Models\Nav2;
use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index(){
        $navbardb1 = Nav1::all();
        $navbardb2 = Nav2::all();
        $footerDB = Footer::all();
        $networksDB = Network::all();
        $homedb = Home::all();
        $homeLidb = HomeLi::all();
        $home2db = Home2::all();
        $homeLi2db = HomeLi2::all();
        return view('home', compact("navbardb1", "navbardb2", "homedb", "homeLidb", "home2db", "homeLi2db", "footerDB", "networksDB"));
    }

    public function boHome1(){
        $home1 = HomeLi::all();
        return view("boHome1", compact("home1"));
    }
    public function boHome2(){
        $home2 = HomeLi2::all();
        return view("boHome2", compact("home2"));
    }
    public function boNav(){
        $navbar = Nav2::all();
        return view("boNav", compact("navbar"));
    }
    
    public function boNetwork(){
        $network = Network::all();
        return view("boNetwork", compact("network"));
    }

    public function store(Request $request)
    {
        $store = new HomeLi;
        $store->icone = $request->icone;
        $store->paragraph = $request->paragraph;
        $store->save();
        return redirect()->back();
    }

    public function add(Request $request)
    {
        $store = new HomeLi2;
        $store->icone = $request->icone;
        $store->paragraph = $request->paragraph;
        $store->save();
        return redirect()->back();
    }

    public function ajouter(Request $request)
    {
        $store = new Nav2;
        $store->lien = $request->lien;
        $store->route = $request->route;
        $store->save();
        return redirect()->back();
    }

    public function box(Request $request)
    {
        $store = new Network;
        $store->lien = $request->lien;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = HomeLi::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function destroyed($id)
    {
        $destroy = Nav2::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function anihylation($id)
    {
        $destroy = Network::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
