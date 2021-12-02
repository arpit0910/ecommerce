<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function product()
    {
        return view('frontend.product');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function wishlist()
    {
        return view('frontend.wishlist');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function profile()
    {
        return view('frontend.profile');
    }
    public function aboutUs()
    {
        return view('frontend.about-us');
    }
    public function orderTracking()
    {
        return view('frontend.order-tracking');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
