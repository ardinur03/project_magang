<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CekStatus {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // { 
    // $user = \App\User::where('status', $request->id)->first();
    //     // die($user);
    // if ($user->status != 'admin') {
    //     return redirect('/');
    // }elseif ($user->status == 'admin' && 'guest'){
    //     return redirect($request);
    // }
    // return $next($request);


    public function handle($request, Closure $next,$status='admin')
    {
        /** 
        * echo '<pre>';
        * var_dump($cekstatus->status);
        * die();
        * */ 

        $getcredential = $request->user();
        $is_logged = 0;
        if($getcredential){
            $cekstatus = $getcredential->status;
            if($cekstatus == $status && $status == 'admin'){
            $is_logged = 1;
            } if($is_logged == 1)
                return $next($request); 
		}else{
			return abort(403);
		}
        
    }
}