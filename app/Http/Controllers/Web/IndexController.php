<?php

namespace App\Http\Controllers\Web; 
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 网站前台首页
     */
    public function index()
    {
    	$users = User::all();
        return view('web.index')->withItems($lstItems);;
    }

}
