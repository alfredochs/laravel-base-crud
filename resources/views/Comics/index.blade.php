@extends('layouts.default')

@section('title_page', 'Titolo nuovo index')

@section('header_content')
    <h1 class="container">Header Content</h1>
    <a href="{{ route('comics.create') }}">Aggiungi Comic</a>
    {{-- @dump($comics) --}}
    <div class="d-flex row row-cols-5">
        @foreach ($comics as $comic)
            <div class="mb-4 border gap-2">
                <div class="d-flex justify-content-center">
                    <img src="{{ $comic->thumb }}" alt="" style="max-width:50%">
                </div>
                {{-- str_limit($string, $limit = 150, $end = '...') --}}
                <h5>{{ $comic->title }}</h5>
                <p class="mb-0">{{ str_limit($comic->description, 100, '...') }}</p>
                <div class="d-flex gap-1">

                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>

                    {{-- Delete Comic --}}
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class='btn btn-danger ' type="submit" value="elimina">
                    </form>
                    {{-- FINE DELETE --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
