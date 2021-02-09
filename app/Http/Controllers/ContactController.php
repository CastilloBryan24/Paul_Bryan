<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Mail;
use App\Models\Nav1;
use App\Models\Nav2;
use App\Models\Network;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index(){
        $navbardb1 = Nav1::all();
        $navbardb2 = Nav2::all();
        $contactDB = Contact::all();
        $maildb = Mail::all();
        $phonedb = Phone::all();
        $footerDB = Footer::all();
        $networksDB = Network::all();
        return view("pages.contact", compact("navbardb1", "navbardb2", "contactDB", "footerDB", "maildb", "networksDB", "phonedb"));
    }    

}
