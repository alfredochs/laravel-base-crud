@extends('layouts.default')

@section('title_page', 'Titolo nuovo index')

@section('header_content')
    <h1 class="container">Header Content</h1>
    @foreach ($comics as $comic)
        <div>
            <ul>
                <li>
                    <h5>{{ $comic->title }}</h5>
                    <p>{{ $comic->description }}</p>
                </li>
            </ul>
        </div>
    @endforeach
    <a href="{{ route('comics.create') }}">Link al form</a>
@endsection
