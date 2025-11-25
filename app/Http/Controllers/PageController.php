<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function CategoryPage($id)
    {
        return view('category', ['id' => $id]);
    }
    public function itemPage($id)
    {
        return view('item', ['id' => $id]);
    }
    public function CartPage()
    {
        return view('cart');
    }
    public function aboutPage()
    {
        return view('about');
    }
    public function teamPage()
    {
        return view('team');
    }
    public function testimonialPage()
    {
        return view('testimonial');
    }
    public function contactPage()
    {
        return view('contact');
    }
    public function eventPage()
    {
        return view('event');
    }
    public function bookingPage()
    {
        return view('booking');
    }
    public function orderPage()
    {
        return view('order');
    }
    public function ServicePage(){
        return view('service');
    }
    public function BookPage(){
        return view('book');
    }
    public function OrderHistoryPage(){
        return view('order');
    }
    public function success(){
        return view('success');
    }


    public function AdminIndex()
    {
        return view('BackendPages.index');
    }
}
