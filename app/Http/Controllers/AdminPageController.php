<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function adminHomePage()
    {

        return view('backend.pages.admin_homepage');
    }


}
