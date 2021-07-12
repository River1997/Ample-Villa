<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="http://fonts.cdnfonts.com/css/century-schoolbook" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/sample.css") }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    @yield('css')

</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <div class="logo-picture">
                        <img  src="{{ asset('./img/nav-logo.png') }}" alt="">
                    </div>
                    <!-- <div class="logo-text">Ample Villa</div> -->
                </div>
                <div class="barger">

                    <label for="burger-menu"><img class="three-line" src="{{ asset('./img/nav-barger.png') }}">
                    </label>
                    <input type="checkbox" id="burger-menu">
                    <ul class="menu">
                        <li class="burgar-link  logoin"><a href="{{ asset('/member/register') }}">會員登入/註冊</a></li>
                        <li class="burgar-link"><a href="">關於Ample Villa</a></li>
                        <li class="burgar-link"><a href="{{ asset('/news/index') }}">最新消息</a></li>
                        <li class="burgar-link"><a href="{{ asset('/member/register') }}">房型一覽</a></li>
                        <li class="burgar-link"><a href="{{ asset('/servive/service-equipment') }}">服務及設施</a></li>
                        <li class="burgar-link"><a href="{{ asset('/landscape') }}">附近風景</a></li>
                        <li class="burgar-link room"><a href="{{ asset('/rent') }}">線上訂房</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-map">
            <div class="container">
                <div class="text">
                    <div class="text-getting">Getting Here</div>
                    <div class="seagull"><img src="{{ asset('/img/海鷗.png') }}." alt=""></div>
                </div>
                <div class="picture">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.405025099367!2d121.85917221500794!3d25.121994183931204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d44fecf95855b%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625459934102!5m2!1szh-TW!2stw"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                    <div class="compass"><img src="{{ asset('./img/地圖-指針圖案.png') }}" alt=""></div>

                </div>
                <div class="lookme">
                    <div class="write">關注我們</div>
                    <div class="photo">
                        <div class="img"><img src="{{ asset('./img/fb.png') }}" alt=""></div>
                        <div class="img middle"><img src="{{ asset('./img/ig.png') }}" alt=""></div>
                        <div class="img"><img src="{{ asset('./img/email.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="phone-photo">
            <img src="{{ asset('./img/footer-船-大.png') }}" alt="" class="ship-img-b">
            <img src="{{ asset('./img/footer-船-中.png') }}" alt="" class="ship-img-m">
            <img src="{{ asset('./img/footer-船-小.png') }}" alt="" class="ship-img-s">
        </div>
        <div class="footer-content">
            <div class="text">
                <div class="text-left-1">
                    <div class="ample-villa">
                        <span class="item"><a href="">關於Ample Villa</a></span>
                        <span class="item"><a href="">房型一覽</a></span>
                        <span class="item"><a href="">附近風景</a></span>
                    </div>

                    <div class="ample-villa">
                        <span class="item"><a href="">最新消息</a></span>
                        <span class="item"><a href="">服務及設施</a></span>
                        <span class="item"><a href="">線上訂房</a></span>
                    </div>
                </div>

                <div class="text-right">
                    <ul>
                        <li class="hotel-name">Ample Villa</li>
                        <li class="phone">02 2496 2888</li>
                        <li>224 新北市瑞芳區洞頂路155-9號</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <div class="textarea">Copyright © 2021 有事請燒紙 All rights reserved</div>
            </div>

        </div>
    </footer>

    <!-- bootstrap js  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
