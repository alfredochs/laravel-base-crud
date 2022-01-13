@extends('layouts.default')

@section('header_content')
    <h1>Header content del form dentro la function edit</h1>
@endsection
@section('main_content')
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        <h2>Main content
        </h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" name='title'' id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" name=' description' id="exampleFormControlTextarea1" rows="3"
                value="{{ $comic->description }}">
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Invia</button>
        <div>
    </form>
@endsection
