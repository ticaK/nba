<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Neww extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'teams'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
     }
     public function teams(){
         return $this->belongsToMany(Team::class);
     }
     
}
