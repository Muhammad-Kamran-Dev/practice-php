<?php

namespace App\Http\Controllers;


class AppController extends Controller
{

    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function gallery()
    {
        return view("gallery");
    }
}
