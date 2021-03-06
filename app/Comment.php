<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function team(){
        return $this->belongsTo(Team::class); 
    }
    protected $fillable = [
        'team_id','user_id','content'
    ];


}
