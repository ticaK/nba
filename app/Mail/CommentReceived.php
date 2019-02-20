<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Team;
use App\Comment;


class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $team;
    public $comment;
    
    public function __construct(Team $team, Comment $comment)
    {
        $this->team = $team;
        $this->comment = $comment;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.comment-received', [
            'team' => $this->team,
            'comment' => $this->comment
        ]);
    }

}
