@php

    // Metodo che ho utilizzato prima di imparare config()
    // require_once __DIR__ . '../../../../resources/data/headerMenu.php';

    // con config()
    $menu = config('data.headerMenu.menu');

@endphp

<header>

    <div class="announcement">
        <div class="container">
            <span>DC POWER&#x2120; VISA&reg;</span>
            <!-- Se dovrà aprirsi un menù a tendina modificherò gli stili -->
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>

    <div class="main-header">
        <div class="container">

            <div class="logo">
                <a href="{{route('comics')}}">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC">
                </a>
            </div>

            <div class="nav-bar">

                <nav>
                    <ul>

                        @foreach ($menu as $link)
                            @php
                                $class_active = Route::currentRouteName() === $link['href'] ? 'active' : '';

                                    if(Route::currentRouteName() === 'comic_detail' && $link['href'] === 'comics'){
                                    $class_active = 'active';
                                }
                            @endphp

                            <li class="{{$class_active}}">
                                <a href="{{route($link['href'])}}">{{$link['text']}}</a>
                            </li>
                        @endforeach

                    </ul>
                </nav>

                <div class="search">
                    <input type="text" placeholder="Search">
                </div>

            </div>

        </div>
    </div>

</header>
