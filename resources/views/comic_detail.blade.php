@extends('layouts.main')

@section('content')
    <main class="main-comic-detail">

        <div class="colored-strip">
            <div class="container-comic">
                <div class="image">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
            </div>
        </div>

        <div class="container-comic">

            <div class="detail-top">

                <div class="text">

                    <h1>{{$comic['title']}}</h1>

                    <div class="info">

                        <div class="price">

                            <div class="price-left">
                                <span>U.S. Price: </span>
                                <span>{{$comic['price']}}</span>
                            </div>

                            <div class="price-right">
                                <span>Available</span>
                            </div>

                        </div>

                        <div class="availability">
                            <span>Check Availability</span>
                        </div>

                    </div>

                    {{--  Non è questo il caso ma molte volte i paragrafi contengono html quindi si usa {!!var!!}  --}}
                    <p>{!!$comic['description']!!}</p>

                </div>

                <div class="image-adv">
                    <span>Advertisement</span>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="advestisement">
                </div>

            </div>

        </div>

        <div class="detail-bottom">
            <div class="container-comic">

                <div class="detail">

                    <div class="talent">

                        <h2>Talent</h2>

                        <div class="detail-item">
                            <span class="title-item">Art By:</span>
                            <p class="info-item">{!! implode("<span>, </span>", $comic['artists']) !!}</p>
                        </div>

                        <div class="detail-item">
                            <span class="title-item">Written by:</span>
                            <p class="info-item">{!! implode("<span>, </span>", $comic['writers']) !!}</p>
                        </div>

                    </div>

                    <div class="specs">

                        <h2>Specs</h2>

                        <div class="detail-item">
                            <span class="title-item">Series:</span>
                            <span class="info-item uppercase">{{$comic['series']}}</span>
                        </div>

                        <div class="detail-item">
                            <span class="title-item">U.S. Price:</span>
                            <span class="info-item">{{$comic['price']}}</span>
                        </div>

                        <div class="detail-item">
                            <span class="title-item">On sale Date:</span>
                            <span class="info-item">{{$comic['sale_date']}}</span>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="call-to-action">
            <div class="container-comic">

                <a href="#" class="item">

                    <span>Digital Comics</span>

                    <div class="image">
                        <img src="{{Vite::asset('resources/img/cta-icons.png')}}" alt="Digital comics">
                    </div>

                </a>

                <a href="#" class="item">

                    <span>Shop DC</span>

                    <div class="image">
                        <img src="{{Vite::asset('resources/img/cta-icons.png')}}" alt="Digital comics">
                    </div>

                </a>

                <a href="#" class="item">

                    <span>Comic Shop Locator</span>

                    <div class="image">
                        <img src="{{Vite::asset('resources/img/cta-icons.png')}}" alt="Digital comics">
                    </div>

                </a>

                <a href="#" class="item">

                    <span>Subscriptions</span>

                    <div class="image">
                        <img src="{{Vite::asset('resources/img/cta-icons.png')}}" alt="Digital comics">
                    </div>

                </a>

            </div>

        </div>

    </main>
@endsection

@section('title')
    | COMICS
@endsection
