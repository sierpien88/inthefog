<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $lg = 'pl';
        if ($request->has('lang') && $request->lang == 'en') {
            $lg = 'en';
        }
        return view('index', compact('lg'));
    }

    public function start()
    {
        return view('start');
    }
}
