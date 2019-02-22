<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Neww extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
     }
     public function teams(){
         return $this->belongsToMany(Team::class);
     }
     
     protected $fillable = [
        'title','content','teams'
    ];

}
