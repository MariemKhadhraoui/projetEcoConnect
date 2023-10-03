<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $listPosts = Posts::all();
        return view('frontOffice/accueil',['listPosts' => $listPosts]);
        
        
    }
}
