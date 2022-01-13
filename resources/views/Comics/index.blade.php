@extends('layouts.default')

@section('title_page', 'Titolo nuovo index')

@section('header_content')
    <h1 class="container">Header Content</h1>
    <ul class="d-flex ">
        @foreach ($comics as $comic)
            <li class="mb-4 border p-2 list-unstyled">
                <h5>{{ $comic->title }}</h5>
                <p class="mb-0">{{ $comic->description }}</p>
                <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Link al form</a>
@endsection
