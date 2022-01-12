@extends('layouts.default')

@section('header_content')
    <h1>Header Content</h1>
    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic->title }}</h2>
            <p>{{ $comic->description }}</p>
        </div>
    @endforeach
@endsection
