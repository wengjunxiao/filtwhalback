<?php

namespace App\Http\Controllers\Web; 
use App\Http\Controllers\Controller;
use App\User;


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


}
