<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{

    /**
     * Показ все Городов и отрисвка index
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){

        $cities = City::all();

        return view('cities.index', compact('cities'));

    }

    /**
     * Отображение всех городов и отрисовка welcome
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {

        $cities = City::all();

        $city = City::where('slug', $slug)->firstOrFail();

        return view('cities.welcome', compact('cities','city'));

    }
}
