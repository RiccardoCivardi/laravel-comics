@php

    require_once __DIR__ . '../../../../resources/data/headerMenu.php';

@endphp

<header>

    <div class="announcement">
        <div class="container">
            <span>DC POWER&#x2120; VISA&reg;</span>

        </div>
    </div>

    <div class="main-header">
        <div class="container">

            <div class="logo">
                <a href="{{route('comics')}}">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC">
                </a>
            </div>

            <nav>
                <ul>

                    @foreach ($menu as $link)
                        <li class="{{Route::currentRouteName() === $link['href'] ? 'active' : ''}}">
                            <a href="{{route($link['href'])}}">{{$link['text']}}</a>
                        </li>
                    @endforeach

                </ul>
            </nav>

        </div>
    </div>

</header>
