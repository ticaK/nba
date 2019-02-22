<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
use App\Comment;
use App\Neww;

use Illuminate\Support\Facades\Auth;
use App\Mail\CommentReceived;


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
        $comment = Comment::create([
            'team_id'=>$id,
            'user_id'=>Auth::user()->id,
            'content'=>$request->content     
        ]);
        if($comment->team){
            \Mail::to($comment->team)->send(new CommentReceived(
                $comment->team, $comment
            ));
        }
        return redirect()->back();
    }



    


}
