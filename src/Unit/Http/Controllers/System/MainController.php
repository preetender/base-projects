<?php


namespace Preetender\Base\Unit\Http\Controllers\System;

use Preetender\Base\Unit\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('base::default');
    }
}
