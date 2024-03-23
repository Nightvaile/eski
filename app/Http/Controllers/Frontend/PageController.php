<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactSocial;
use App\Models\ContactUs;
use App\Models\Product;
/*use http\Client\Curl\User;*/
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\AboutUsMember;
use App\Models\AboutUsAwards;
use App\Models\Comment;
use App\Models\User;

class PageController extends Controller
{
    public function signin()
    {
        return view('frontend.pages.signin');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function shop()
    {
        $categories = Category::get();
        $products = Product::where('status', '1')->get();
        return view('frontend.pages.shop', compact('categories', 'products'));
    }

    public function contactus()
    {
        $contact_info = ContactUs::first();
        $contact_socials = ContactSocial::get();
        return view('frontend.pages.contact_us', compact('contact_info', 'contact_socials'));
    }

    public function aboutus()
    {
        $about = AboutUs::where('id', '1')->first();
        $members = AboutUsMember::get();
        $awards = AboutUsAwards::get();
        return view('frontend.pages.about_us', compact('about', 'members', 'awards'));
    }

    public function product_preview($slug,$id)
    {
        $customer =User::get();
        $reviews = Comment::where('product_id',$id)->get();
        $product = Product::where('slug', $slug)->first();
        return view('frontend.pages.product_preview', compact('product', 'reviews','customer'));
    }
}
