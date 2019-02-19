<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
use App\Comment;
use Illuminate\Support\Facades\Auth;


use App\Http\Requests\CreateCommentRequest;


class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', [ 'teams' => $teams ]);
    }

    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.show')->with('team',$team);
    }

    public function addComment(CreateCommentRequest $request,$id)
    {
        Comment::create([
            'team_id'=>$id,
            'user_id'=>Auth::user()->id,
            'content'=>$request->content     
        ]);
        return redirect()->back();
    }

}
