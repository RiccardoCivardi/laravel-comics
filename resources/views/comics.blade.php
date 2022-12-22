@extends('layouts.main')

@section('content')
    <main class="main-comics">
        <div class="container">

        <h2>Current series</h2>

        <div class="card-wrapper">
            @foreach ($comics as $comic)

                <div class="card">

                    <div class="image">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>

                    <h4>{{$comic['series']}}</h4>

                </div>

            @endforeach
        </div>

        <div class="button">
            <button>Load more</button>
        </div>

        </div>
    </main>
@endsection

@section('title')
    | COMICS
@endsection
