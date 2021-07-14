@extends('layouts.sample-footer2')

@section('page_title')

最新消息

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset("css/index-by-sheng.css") }}">
@endsection

@section('content')
    {{-- <nav>

        <div class="row">
            <div class="container2">
                <div class="row"
                    style="width: 100%;height: 100%;background-color: white;margin:unset;padding-top: 15px;">
                    <div class="col-2" style="float: left;padding: unset;">
                        <img src="./img-index/nav-logo.png">
                    </div>
                    <div class="col-9" style="float: left;padding: unset;"></div>
                    <div class="col-1" style="float: right;position: relative;padding: unset;">

                        <p id="burger">
                            <button class="btn fas fa-bars" type="button" data-toggle="collapse"
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                                id="burger-btn">

                            </button>
                        </p>
                        <div class="collapse dropdown-menu" id="collapseExample"
                            style="position: absolute;top: 80px;left: unset;right: 0px;">
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">關於 Ample Villa</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">最新消息</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">房型一覽</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">服務及設施</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">附近風景</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">線上訂房</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">會員系統</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


    </nav> --}}
    <div class="bannar2">

        <!-- <div class="video-box">
            <video src="/timg-index/est.mp4" loop autoplay id="myVideo"></video>

        </div> -->
        <div class="container2">
            <div class="row" style="position: relative;width: 100%;margin: unset;padding: unset;overflow: hidden;">
                <div class="videobox">


                    <iframe
                        src="https://www.youtube.com/embed/4AbN68ZgSm4?autoplay=1&mute=1&rel=0&loop=1&controls=0&playlist=4AbN68ZgSm4"
                        frameborder="0" allowfullscreen="true"></iframe>

                    <!-- https://www.youtube.com/embed/4AbN68ZgSm4?rel=0&autoplay=1&mute=1&oop=1&playlist=4AbN68ZgSm4 -->
                </div>
                <!-- <div class="video-box">
                    <video src="./img-index/test.mp4" loop autoplay id="myVideo"></video>

                </div> -->
                <div class="col-12" id="video-logo">
                    <img src="{{ asset("img-index/影片-logo.png") }}" alt="">
                </div>
                <div class="col-12" id="video-text">
                    <img src="{{ asset("img-index/影片-文字.png") }}" alt="">
                </div>
                <div class="row" style="padding: unset;margin:unset;">
                    <div class="col-4" id="inside-logo">
                        <img src="{{ asset("img-index/內文-logo.png") }}" alt="">
                    </div>
                </div>

            </div>


        </div>
    </div>

    <div class="main2">
        <div class="row" style="padding: unset;margin:unset;">
            <div class="col-4" id="inside-logo2">
                <img src="{{ asset("img-index/內文-logo.png") }}" alt="">
            </div>
        </div>
        <div class="row" style="padding: unset;margin: unset;position:relative">
            <div class="col-6" id="news">
                最新消息
            </div>
            <div class="col-6" id="news-eng">NEWS</div>
            <div class="col-12" id="news-backgro">
                <div class="container2">
                    <div class="row" id="news-box1">
                        <div class="col-xl-9 col-9" id="news-1">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 col-12 newspic" style="position: relative;display: flex;"><img
                                alt="gallery" class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖1.png") }}">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="news-box2">

                        <div class="col-xl-9 col-9" id="news-2">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 col-12 newspic" style="position: relative;display: flex;"><img
                                alt="gallery" class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖2.png") }}">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday2"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row" id="news-box3">
                        <div class="col-xl-9 col-9" id="news-3">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 col-12 newspic" style="position: relative;display: flex;"><img
                                alt="gallery" class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖3.png") }}">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday3"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="news-box4">

                        <div class="col-xl-9 col-9" id="news-4">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 col-12 newspic" style="position: relative;display: flex;"><img
                                alt="gallery" class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖4.png") }}">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday4"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row" style="height: 150px;width: 100%;"></div>





                </div>

            </div>
            <div class="row" id="arrow">
                <div class="col-8" style="padding: unset;">
                    <a href="" style="text-decoration: none;color: white;">
                        <img src="{{ asset("img-index/內文-指標1.png") }}" alt="">
                        <img src="{{ asset("img-index/內文-指標2.png") }}" alt="">
                    </a>
                </div>
                <div class="col-3" style="padding: unset;">
                    <div id="more">More</div>
                </div>

            </div>

        </div>
        <div class="row" style="margin: unset;padding-top: 110px;">
            <div class="container2" style="position: relative;">
                <div class="col-12" id="getting-here">
                    Getting here
                </div>
                <div class="col-3" id="birds" style="padding: unset;"><img src="./img-index/海鷗.png" alt=""></div>
            </div>
        </div>
        <div class="row" style="margin:unset;margin-top: 25px;">
            <div class="col-12" style="padding: unset;">
                <div id="line"></div>
            </div>

        </div>

    </div>
    <footer></footer>



    <script>
        var Today = new Date();
        var yy = Today.getFullYear();
        var mm = Today.getMonth() + 1;
        var dd = Today.getDate();
        var h = Today.getHours();
        var m = Today.getMinutes();
        var s = Today.getSeconds();
        // document.getElementById("mday").innerHTML = yy+" "+mm+" "+dd+" ";
        if (mm < 10) {
            if (dd < 10) {
                document.getElementById("mday").innerHTML = yy + ".0" + mm + ".0" + dd;
                document.getElementById("mday2").innerHTML = yy + ".0" + mm + ".0" + dd;
                document.getElementById("mday3").innerHTML = yy + ".0" + mm + ".0" + dd;
                document.getElementById("mday4").innerHTML = yy + ".0" + mm + ".0" + dd;
            }
            else {
                document.getElementById("mday").innerHTML = yy + ".0" + mm + "." + dd;
                document.getElementById("mday2").innerHTML = yy + ".0" + mm + "." + dd;
                document.getElementById("mday3").innerHTML = yy + ".0" + mm + "." + dd;
                document.getElementById("mday4").innerHTML = yy + ".0" + mm + "." + dd;
            }
        } else {
            if (dd < 10) {
                document.getElementById("mday").innerHTML = yy + "." + mm + ".0" + dd;
                document.getElementById("mday2").innerHTML = yy + "." + mm + ".0" + dd;
                document.getElementById("mday3").innerHTML = yy + "." + mm + ".0" + dd;
                document.getElementById("mday4").innerHTML = yy + "." + mm + ".0" + dd;
            }
            else {
                document.getElementById("mday").innerHTML = yy + "." + mm + "." + dd;
                document.getElementById("mday2").innerHTML = yy + "." + mm + "." + dd;
                document.getElementById("mday3").innerHTML = yy + "." + mm + "." + dd;
                document.getElementById("mday4").innerHTML = yy + "." + mm + "." + dd;
            }
        }

        function codefans() {
            var box = document.getElementById("video-logo");
            var box2 = document.getElementById("video-text");
            box.style.display = "none";
            box2.style.display = "none"
        }
        function codefans2() {
            var box = document.getElementById("video-logo");
            var box2 = document.getElementById("video-text");
            box.style.display = "block";
            box2.style.display = "block"
        }
        function codefans3() {
            var box = document.getElementById("video-logo");
            var box2 = document.getElementById("video-text");
            box.style.display = "none";
            box2.style.display = "none"
        }
        setTimeout("codefans()", 0000);//3秒
        setTimeout("codefans2()", 5500);
        setTimeout("codefans()", 6700);
        setTimeout("codefans2()", 9500);
        setTimeout("codefans3()", 11000);
        setTimeout("codefans2()", 14000);
        setTimeout("codefans()", 31500);
        setTimeout("codefans()", 0000);//3秒
        setTimeout("codefans2()", 38500);
        setTimeout("codefans()", 40000);
        setTimeout("codefans2()", 42500);
        setTimeout("codefans3()", 44500);
        setTimeout("codefans2()", 47000);
        setTimeout("codefans()", 65500);


    </script>

@endsection
