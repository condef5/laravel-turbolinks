<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;

class WelcomeController extends Controller
{
    /**
     * Show the home aplication.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::simplePaginate(9);
        return view('welcome', compact('animes'));
    }
}
