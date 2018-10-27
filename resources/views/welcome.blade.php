@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($animes as $anime)
            <div class="col-md-4 my-4">
                <div class="card">
                    <figure data-href={{$anime->image}} class="card-img-top progressive replace">
                        <img class="preview" src="https://via.placeholder.com/200" alt="image" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">{{ $anime->name }}</h5>
                        <p class="card-text">{{ $anime->gender }}</p>
                        <a href="#" class="btn btn-success">Visit anime</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $animes->links() }}
    </div>
</div>
@endsection
