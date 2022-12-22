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

        <div class="icons-container">
            <div class="container">

                @foreach ($icons as $icon)

                    <div class="icon">

                        <div class="image">
                            <img src="{{Vite::asset('resources/img/'.$icon['name'])}}" :alt="{{$icon['text']}} picture">
                        </div>

                        <div class="text">
                            <span>{{$icon['text']}}</span>
                        </div>

                    </div>

                @endforeach

            </div>
        </div>

    </main>
@endsection

@section('title')
    | COMICS
@endsection
