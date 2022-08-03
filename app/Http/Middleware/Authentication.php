<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($role == 'super') {
            if ($request->session()->has('role')){
                if ($request->session()->get('role') == 'super')
                    return $next($request);
                elseif ($request->session()->get('role') == 'admin')
                    return redirect('/admin');
                elseif ($request->session()->get('role') == 'manager')
                    return redirect('/manager');
                elseif ($request->session()->get('role') == 'agent')
                    return redirect('/agent');
                else
                    return redirect('/home');
            }
            else
                return redirect('/logout');
        }
        elseif ($role == 'admin') {
            if ($request->session()->has('role')){
                if ($request->session()->get('role') == 'super')
                    return redirect('/super');
                elseif ($request->session()->get('role') == 'admin'){
                    if ($request->session()->has('payment_success')){
                        if ($request->session()->get('payment_success') == '1' || strpos($request->url(), 'manage_account'))
                            return $next($request);
                        else
                            return response()->view('/admin/paypal');
                    }
                }
                elseif ($request->session()->get('role') == 'manager')
                    return redirect('/manager');
                elseif ($request->session()->get('role') == 'agent')
                    return redirect('/agent');
                else
                    return redirect('/home');
            }
            else
                return redirect('/logout');
        }
        elseif ($role == 'manager') {
            if ($request->session()->has('role')){
                if ($request->session()->get('role') == 'super')
                    return redirect('/super');
                elseif ($request->session()->get('role') == 'admin')
                    return redirect('/admin');
                elseif ($request->session()->get('role') == 'manager')
                    return $next($request);
                elseif ($request->session()->get('role') == 'agent')
                    return redirect('/agent');
                else
                    return redirect('/home');
            }
            else
                return redirect('/logout');
        }
        elseif ($role == 'agent') {
            if ($request->session()->has('role')){
                if ($request->session()->get('role') == 'super')
                    return redirect('/super');
                elseif ($request->session()->get('role') == 'admin')
                    return redirect('/admin');
                elseif ($request->session()->get('role') == 'manager')
                    return redirect('/manager');
                elseif ($request->session()->get('role') == 'agent')
                    return $next($request);
                else
                    return redirect('/home');
            }
            else
                return redirect('/logout');
        }
        elseif ($role == 'guest') {
            if ($request->session()->has('role')){
                if ($request->session()->get('role') == 'super')
                    return redirect('/super');
                elseif ($request->session()->get('role') == 'admin')
                    return redirect('/admin');
                elseif ($request->session()->get('role') == 'manager')
                    return redirect('/manager');
                elseif ($request->session()->get('role') == 'agent')
                    return redirect('/agent');
            }
            return $next($request);
        }
        else
            return redirect('/');
    }
}
