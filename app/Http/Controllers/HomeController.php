<?php

namespace App\Http\Controllers;

use App\Category;
use App\Congress;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $request = [
            'categories'    =>  Category::all()
        ];
        return view('welcome', $request);
    }

    public function viewCategory(Category $category) {
        $request = [
            'category'  =>  $category
        ];
        return view('category', $request);
    }

    public function viewCongress(Congress $congress, $year = null) {
        if ($year) $filtered_media = $congress->media()->where('year', $year)->get();
        $years = $congress->media()->select('year')->distinct('year')->orderBy('year')->get();
        $request = [
            'congress'          =>  $congress,
            'year'              =>  $year,
            'filtered_media'    =>  isset($filtered_media) ? $filtered_media : null,
            'years'             =>  $years
        ];
        return view('congress', $request);
    }
}
