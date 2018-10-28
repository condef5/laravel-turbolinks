@extends('layouts.app')

@section('pageTitle', 'Anime - '.$anime->name)

@section('content')
    <div class="d-flex justify-content-around">
        <div class="col-sm-8 col-md-6  ">
            <div class="card">          
                <figure data-href={{$anime->image}} class="card-img-top progressive replace">
                    <img class="preview mod" src="https://via.placeholder.com/200" alt="image" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $anime->name }}</h2>
                    <p class="card-text">{{ $anime->gender }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <h4>Others animes</h4>
            <ul class="list-group list-group-flush">
                @foreach ($others as $anime)
                    <li class="list-group-item">
                        <a href="/animes/{{ $anime->id }}">{{ $anime->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection