<?php

namespace App\Http\Controllers\Guest;

/* importare il models */

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Movie::all()->get();
        return view('index', ["Movies" => $data]);
    }
}
