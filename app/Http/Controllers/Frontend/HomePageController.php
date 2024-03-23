<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Slider;


class HomePageController extends Controller
{
    public function homepage()
    {

        $sliders = Slider::where('status', '1')->get();
        return view('frontend.pages.index', compact('sliders'/*,'categories'*/));
    }
}
