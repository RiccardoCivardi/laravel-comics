@php

    require_once __DIR__ . '../../../../resources/data/dcComicsMenu.php';
    require_once __DIR__ . '../../../../resources/data/shopMenu.php';
    require_once __DIR__ . '../../../../resources/data/dcMenu.php';
    require_once __DIR__ . '../../../../resources/data/sitesMenu.php';
    require_once __DIR__ . '../../../../resources/data/socials.php';

@endphp

<footer>

    <div class="footer-top">
        <div class="container">

            <div class="footer-wrapper">

                <nav class="footer-menu">

                    <div class="col">

                        <h3>Dc comics</h3>
                        <ul>
                            @foreach ($dcComicsMenu as $link)
                            <li><a href="{{route($link['href'])}}">{{$link['text']}}</a></li>
                            @endforeach
                        </ul>

                        <!-- non avendo le routes e/o i link esterni corretti rimando sempre a comics -->
                        <h3>Shop</h3>
                        <ul>
                            @foreach ($shopMenu as $link)
                            <li><a href="{{route($link['href'])}}">{{$link['text']}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="col">

                        <!-- non avendo le routes e/o i link esterni corretti rimando sempre a comics -->
                        <h3>Dc</h3>
                        <ul>
                            @foreach ($dcMenu as $link)
                            <li><a href="{{route($link['href'])}}">{{$link['text']}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="col">

                        <!-- non avendo le routes e/o i link esterni corretti rimando sempre a comics -->
                        <h3>Sites</h3>
                        <ul>
                            @foreach ($sitesMenu as $link)
                            <li><a href="{{route($link['href'])}}">{{$link['text']}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                </nav>

                <p>All Site Content TM and &copy; DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>
                <a href="#">Cookies Settings</a>

            </div>

        </div>
    </div>

    <div class="social-footer">
        <div class="container">

            <div class="sign-up">
                <a href="">Sign up now!</a>
            </div>

            <div class="social">

                <span>Follow us</span>

                @foreach ($socials as $social)
                    <a href="{{$social['href']}}">
                        <img src="{{Vite::asset('resources/img/'.$social['name'])}}" alt="{{$social['alt']}}">
                    </a>
                @endforeach

            </div>

        </div>
    </div>

  </footer>
