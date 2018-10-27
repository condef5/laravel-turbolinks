<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::paginate(10);
        return view('animes.index', compact('animes'));
    }
}
