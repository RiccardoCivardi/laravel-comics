@php

    require_once __DIR__ . '../../../../resources/data/headerMenu.php';

@endphp

<header>

    <div class="container">

        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC">
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

</header>
