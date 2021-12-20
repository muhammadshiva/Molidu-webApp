<?php

namespace App\Http\Controllers;

use App\Abouts;
use App\Fiturs;
use App\Prices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $abouts = Abouts::all();
        $fiturs = Fiturs::all();
        $prices = Prices::all();

        return view('index', ['abouts' => $abouts, 'fiturs' => $fiturs, 'prices' => $prices]);
    }
}
