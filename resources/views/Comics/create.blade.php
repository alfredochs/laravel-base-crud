@extends('layouts.default')

@section('header_content')
    <h1>Header content del form</h1>
@endsection
@section('main_content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <h2>Create</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name='title'' id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name=' description' id="exampleFormControlTextarea1"
                rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Thumb</label>
            <input type="text" class="form-control" name='thumb' id="exampleFormControlInput1">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Invia</button>
    </form>
@endsection
