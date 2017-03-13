<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HourOverviewController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('hour_overview.index');
    }
}
