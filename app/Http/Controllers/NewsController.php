<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neww;

class NewsController extends Controller
{
    public function index(){
        $news = Neww::orderBy('created_at','desc')->paginate(10);
        return view('news.index',['news'=>$news]);
    }

    public function show($id){
        $new = Neww::find($id);
        return view('news.show')->with('new',$new);
    }
}
