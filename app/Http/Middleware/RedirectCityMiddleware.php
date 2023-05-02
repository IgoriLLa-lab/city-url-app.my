<?php

namespace App\Http\Middleware;

use App\Models\City;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RedirectCityMiddleware
{
    /**
     * Посредник редиректа
     *
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //если в сессии ничего нет
        if (!$request->session()->has('city')) {

            $defaultCity = City::find(3);
            $request->session()->put('city', $defaultCity->slug);
            return redirect('/' . $defaultCity->slug);

        } else {

            $currentPage = $request->path();

            if ($currentPage && !$request->is('/')) {

               $request->session()->put('city', $currentPage);

            }elseif ($request->is('/')){

                $sessionKey = $request->session()->get('city');

                $url = route('show', $sessionKey);

                return redirect($url);
            }

        }

        return $next($request);
    }

}
