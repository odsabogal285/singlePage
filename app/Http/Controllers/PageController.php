<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public static function dashboard ()
    {
      return Inertia::render('Dashboard');
    }
}
