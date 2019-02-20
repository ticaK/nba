<?php

namespace App\Http\Middleware;

use Closure;

class CheckCommentContent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $words = ['hate','stupid','idiot'];

        foreach ($words as $word) {
            if(strstr($request->content, $word)) {
                return response(view('teams.commentContent'));
            }
        }
        
        return $next($request);
    }

    

    
}
