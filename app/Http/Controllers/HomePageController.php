<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('homepage/content/content');
    }
}
