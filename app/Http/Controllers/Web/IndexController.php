<?php

namespace App\Http\Controllers\Web; 
use App\Http\Controllers\Controller;
use App\User;
use App\Need;
use App\Designer;
use App\Contact;

class IndexController extends Controller
{
    /**
     * 网站前台首页
     */
    public function index()
    {
    	$users = User::all();
        return view('web.index')->withItems($users);;
    }

    public function need()
    {
    	$needs = Need::all();
        return view('web.need')->withItems($needs);;
    }

        public function designer()
    {
        $needs = Designer::all();
        return view('web.designer')->withItems($needs);;
    }


    public function contact()
    {
        $needs = Contact::all();
        return view('web.contact')->withItems($needs);;
    }



}
