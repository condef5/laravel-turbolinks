@extends('layouts.app')

@section('pageTitle', 'Anime List')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genders</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animes as $anime)
                        <tr>
                            <th scope="row">{{ $anime->id }}</th>
                            <td>{{ $anime->name }}</td>
                            <td>{{ $anime->year }}</td>
                            <td>{{ $anime->gender }}</td>
                            <td>
                            {{-- <img src={{$anime->image}} alt=""> --}}
                            <figure data-href={{$anime->image}} class="progressive replace">
                                <img class="preview" src="https://via.placeholder.com/75" alt="image" />
                            </figure>
                            </td>
                            <td>
                                <a href="{{ route('animes.edit', $anime->id) }}" class="btn btn-link">Editar</a>
                                <form action="{{ route('animes.destroy', $anime->id)}}" method="post" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-link" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $animes->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
