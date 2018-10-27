@extends('layouts.app')

@section('pageTitle', 'Edit Anime')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-sm-8">    
            <h3>Editar anime</h3>
            <form method="POST" action="{{ route('animes.update', $anime->id) }}">
                {{ method_field('PATCH') }}
                @include('animes.fields')
            </form>
        </div>
    </div>
@endsection