<?php

namespace App\Http\Controllers;

use App\Congress;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\EditCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = [
            'categories'    =>  Category::all(),
            'congresses'    =>  Congress::all()
        ];
        return view('home', $response);
    }
}
