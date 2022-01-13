@extends('layouts.default')

@section('header_content', 'Id del comic' . $comic->id)

@section('main_content')
    <h1>Main del show blade</h1>
    <h2>{{ $comic->title }} {{ $comic->id }}</h2>
    <h2>{{ $comic->description }}</h2>
    <img src="{{ $comic->thumb }}" alt="">
@endsection
