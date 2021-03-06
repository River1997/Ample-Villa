<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="http://fonts.cdnfonts.com/css/century-schoolbook" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/sample.css") }}">
    <link rel="stylesheet" href="{{ asset("css/sample-2.css") }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- summernote     -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


    @yield('css')





</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <div class="logo-picture">
                        <a href="/"><img src="{{ asset('./img/nav-logo.png') }}" alt=""></a>
                    </div>
                    <!-- <div class="logo-text">Ample Villa</div> -->
                </div>
                <div class="barger">

                    <label for="burger-menu" style="height: 0px"><img class="three-line"
                            src="{{ asset('./img/nav-barger.png') }}">
                    </label>
                    <input type="checkbox" id="burger-menu">
                    <div class="navbar-nav ml-auto d-flex">
                        <!-- Authentication Links -->
                        {{-- @guest
                        <div class="nav-item">
                            <a class="nav-link" style="width: auto" href="{{ asset('/member/login') }}">{{ __('Login') }}</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="nav-item">
                        <a class="nav-link" style="width: auto"
                            href="{{ asset('/member/register') }}">{{ __('Register') }}</a>
                    </div>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest --}}
                </div>
                <ul class="menu">
                    {{-- <li class="burgar-link  logoin"><a href="{{ asset('/member/register') }}">????????????/??????</a></li> --}}
                    @guest
                    <li class="burgar-link">
                        <a href="{{ asset('/member/login') }}">????????????/??????</a>
                    </li>
                    @if (Route::has('register'))
                    {{-- <li class="nav-item">
                        <a href="{{ asset('/member/register') }}">/??????</a>
                    </li> --}}
                    @endif
                    @else
                    <li class="burgar-link">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="padding: 0px; margin-bottom:30px" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            {{-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> --}}

                            <a class="dropdown-item" href="{{ asset("/member/profile-1") }}">????????????</a>
                        </div>
                    </li>
                    @endguest
                    <li class="burgar-link"><a href="{{ asset('/about_us') }}">??????Ample Villa</a></li>
                    <li class="burgar-link"><a href="{{ asset('/news/news') }}">????????????</a></li>
                    <li class="burgar-link"><a href="{{ asset('/room') }}">????????????</a></li>
                    <li class="burgar-link"><a href="{{ asset('/service') }}">???????????????</a></li>
                    <li class="burgar-link"><a href="{{ asset('/landscape') }}">????????????</a></li>
                    <li class="burgar-link room"><a href="{{ asset('/rent') }}">????????????</a></li>
                    <li class="burgar-logout">
                        @guest

                        @if (Route::has('register'))

                        @endif
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="padding: 0px">
                            ??????
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest

                    </li>

                </ul>
            </div>
        </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>


    <footer>

        <div class="footer-map" style="background-color: white">
            <div class="container">
                <div class="picture">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.405025099367!2d121.85917221500794!3d25.121994183931204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d44fecf95855b%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625459934102!5m2!1szh-TW!2stw"
                        allowfullscreen="" loading="lazy"></iframe>
                    <div class="compass"><img src="./img/??????-????????????.png" alt="" style="max-width:414px;"></div>

                </div>
                <div class="lookme">
                    <div class="write">????????????</div>
                    <div class="photo">
                        <a class="img" href="https://www.facebook.com/ample.villa/"><img src="{{ asset('./img/fb.png') }}" alt=""></a>
                        <a class="img middle" href="https://www.instagram.com/ample_villa/"><img src="{{ asset('./img/ig.png') }}" alt=""></a>
                        <a class="img" href="https://www.google.com/intl/zh-TW/gmail/about/#"><img src="{{ asset('./img/email.png') }}" alt=""></a>
                    </div>
                </div>
                <br>
                <br><br>
                {{-- <div class="text">
                    <div class="text-getting">Getting Here</div>
                    <div class="seagull"><img src="{{ asset('/img/??????.png') }}." alt=""></div>
                </div> --}}
                {{-- <div class="picture">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.405025099367!2d121.85917221500794!3d25.121994183931204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d44fecf95855b%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625459934102!5m2!1szh-TW!2stw"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                    <div class="compass"><img src="{{ asset('./img/??????-????????????.png') }}" alt=""></div>

                </div> --}}
                {{-- <div class="lookme">
                    <div class="write">????????????</div>
                    <div class="photo">
                        <div class="img"><img src="{{ asset('./img/fb.png') }}" alt=""></div>
                        <div class="img middle"><img src="{{ asset('./img/ig.png') }}" alt=""></div>
                        <div class="img"><img src="{{ asset('./img/email.png') }}" alt=""></div>
                    </div>
                </div> --}}
            </div>
        </div>
        </div>
        <div class="footer-map">
            <div class="container">
                <div class="phone-photo">
                    <img src="{{ asset('./img/footer-???-???.png') }}" alt="" class="ship-img-b">
                    <img src="{{ asset('./img/footer-???-???.png') }}" alt="" class="ship-img-m">
                    <img src="{{ asset('./img/footer-???-???.png') }}" alt="" class="ship-img-s">
                </div>
                <div class="footer-content">
                    <div class="text">
                        <div class="text-left-1">
                            <div class="ample-villa">
                                <span class="item"><a href="{{ asset('/about_us') }}">??????Ample Villa</a></span>
                                <span class="item"><a href="{{ asset('/room') }}">????????????</a></span>
                                <span class="item"><a href="{{ asset('/landscape') }}">????????????</a></span>
                            </div>

                            <div class="ample-villa">
                                <span class="item"><a href="{{ asset('/news/news') }}">????????????</a></span>
                                <span class="item"><a href="{{ asset('/service') }}">???????????????</a></span>
                                <span class="item"><a href="{{ asset('/rent') }}">????????????</a></span>
                            </div>
                            <div class="footer-word-border-2"></div>
                        </div>

                        <div class="text-right">
                            <span class="hotel-name-1">Ample Villa</span>
                            <span class="phone-1">02 2496 2888</span>
                            <span class="address-1">224 ???????????????????????????155-9???</span>

                        </div>
                    </div>

                    <div class="copyright-1">
                        <div class="footer-word-border-1"></div>
                        <div class="container">
                            <div class="textarea-1">Copyright ?? 2021 ??????????????? All rights reserved</div>
                            <div class="footer-box"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        $('#connect-to-us').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 250,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    </script>

    <!-- bootstrap js  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script>
        var b = document.querySelector('.three-line')
        var a = document.querySelector('#burger-menu')

        function adv() {
            if (a.checked) {
                b.src = "{{ asset('./img/nav-x.png') }}"
            } else {
                b.src = "{{ asset('../img/nav-barger.png') }}"
            }
        }
        a.addEventListener('change', adv)

    </script>


    @yield('js')
</body>

</html>
<html>
