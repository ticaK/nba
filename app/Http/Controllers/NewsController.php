<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neww;
use App\Team;


class NewsController extends Controller
{
    public function index(){
        $news = Neww::orderBy('created_at','desc')->paginate(10);
        return view('news.index',['news'=>$news]);
    }
    public function showTeamNews(Team $team){
        
        $news = $team->news()->paginate(1); 
        return view('news.index',compact('news'));
    }

    public function show($id){
        $new = Neww::find($id);
        return view('news.show')->with('new',$new);
    }

    public function create(){
        $teams = Team::all();        
        return view('news.create',compact('teams'));
    }
    

    public function store(Request $request)
    {
            $request->validate([
                'title'=>'required',
                'content'=>'required',
                'teams' => 'required|array'

               
            ]);
            $news = Neww::create(
                array_merge(
                ($request->only('title','content')),
                ['user_id'=>auth()->user()->id]
                )
            );

        return redirect('/news');
        
    }


}
