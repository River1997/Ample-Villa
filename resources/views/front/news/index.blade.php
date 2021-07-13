@extends('layouts.sample')

@section('page_title')

Ample Villa首頁

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/index.css")) }}">
@endsection

@section('content')
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
            </div>

                </div> -->
                <div class="col-12" id="video-logo">
                    <img src="{{ asset("img-index/影片-logo.png") }}" alt="">
                </div>
                <div class="col-12" id="video-text">
                    <img src="{{ asset("img-index/影片-文字.png") }}" alt="">
                </div>
                <div class="row" style="padding: unset;margin:unset;">
                    <div class="col-4" id="inside-logo">
                        <img src="{{ asset("img-index/地圖-指針圖案.png") }}" alt="">
                    </div>
                </div>


    </div>
</div>

<div class="main2">
    <div class="row" style="padding: unset;margin:unset;">
        <div class="col-4" id="inside-logo2">
            <img src="./img-index/地圖-指針圖案.png" alt="">
        </div>
    </div>

    <div class="main2">
        <div class="row" style="padding: unset;margin:unset;">
            <div class="col-4" id="inside-logo2">
                <img src="{{ asset("img-index/地圖-指針圖案.png") }}" alt="">
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
                        <div class="col-xl-9" id="news-1">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖1.png") }}">

                                <div class="day">
                                    <span id="mday"></span>
                                </div>

                        </div>
                    </div>

                </div>

                        <div class="col-xl-9" id="news-2">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖2.png") }}">

                                <div class="day" style="padding: unset;">
                                    <span id="mday2"></span>
                                </div>

                        </div>
                    </div>


                </div>
                <div class="row" id="news-box3">
                    <div class="col-xl-9 col-9" id="news-3">
                        三月是雙魚和牡羊朋友的大日子
                    </div>
                    <div class="row" id="news-box3">
                        <div class="col-xl-9" id="news-3">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖3.png") }}">

                                <div class="day" style="padding: unset;">
                                    <span id="mday3"></span>
                                </div>

                        </div>
                    </div>

                </div>

                        <div class="col-xl-9" id="news-4">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6" ></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="{{ asset("img-index/最新消息-圖4.png") }}">

                                <div class="day" style="padding: unset;">
                                    <span id="mday4"></span>
                                </div>

                        </div>
                    </div>


                </div>
                <div class="row" style="height: 150px;width: 100%;"></div>


            </div>
            <div class="row" id="arrow">
                <div class="col-8" style="padding: unset;">
                    <a href="" style="text-decoration: none;color: white;">
                        <img src="{{asset("img-index/內文-指標1.png") }}" alt="">
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
        {{-- <div class="row" style="position:relative;margin: unset;margin-top: 40px;">
            <div class="container3">
                <div class="col-12 mapbox">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1806.200026829416!2d121.86017658530668!3d25.122162344672223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625465980639!5m2!1szh-TW!2stw"
                        width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>

        </div>
        <div class="row" id="arrow">
            <div class="col-8" style="padding: unset;">
                <a href="" style="text-decoration: none;color: white;">
                    <img src="./img-index/內文-指標1.png" alt="">
                    <img src="./img-index/內文-指標2.png" alt="">
                </a>
            </div>
            <div class="col-3" style="padding: unset;">
                <div id="more">More</div>
            </div>

        </div> --}}
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
