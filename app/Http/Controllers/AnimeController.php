<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::orderBy('created_at', 'desc')->paginate(10);
        return view('animes.index', compact('animes'));
    }

    public function create()
    {
        $anime = new Anime();
        return view('animes.create', compact('anime'));
    }

    public function store()
    {
        $this->validate(request(), ['name' => 'required', 'image' => 'required', 'year' => 'required']);
        $anime = Anime::create(['name' => request('name'), 'image' => request('image'), 'year' => request('year'), 'gender' => request('gender')]);
        return redirect()->route('animes.index')
        ->with('message', 'The anime has created');
    }
    
    public function edit(Anime $anime) {
        return view('animes.edit', compact('anime'));
    }
    
    public function update(Anime $anime )
    {
        $this->validate(request(), ['name' => 'required', 'gender' => 'required', 'year' => 'required', 'image' => 'required']);
        $anime->update(request(['name', 'year', 'gender', 'image']));
        return redirect()->route('animes.index')
        ->with('message', 'The anime has updated');
    }

    public function destroy(Anime $anime) 
    {
        $anime->delete();
        return redirect()->route('animes.index')
            ->with('message', 'The anime has destroy');
    }
}
