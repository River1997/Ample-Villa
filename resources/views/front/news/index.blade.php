@extends('layouts.sample')

@section('page_title')

最新消息

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/index.css")) }}">
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
                <div class="col-12" style="padding: unset;margin: unset;">
                    <!-- <img alt="gallery" class="w-full object-cover h-full object-center block"
                        src="https://dummyimage.com/501x301" id="videoplay"> -->
                    <video src="./img-index/test.mp4" loop autoplay id="myVideo"></video>


                </div>
                <!-- <div class="video-box">
                    <video src="./img-index/test.mp4" loop autoplay id="myVideo"></video>

                </div> -->
                <div class="col-12" id="video-logo">
                    <img src="./img-index/影片-logo.png" alt="">
                </div>
                <div class="col-12" id="video-text">
                    <img src="./img-index/影片-文字.png" alt="">
                </div>
                <div class="row" style="padding: unset;margin:unset;">
                    <div class="col-4" id="inside-logo">
                        <img src="./img-index/地圖-指針圖案.png" alt="">
                    </div>
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
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="news-box2">

                        <div class="col-xl-9" id="news-2">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday2"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row" id="news-box3">
                        <div class="col-xl-9" id="news-3">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday3"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="news-box4">

                        <div class="col-xl-9" id="news-4">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
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
                <div class="col-8">
                    <a href="" style="text-decoration: none;color: white;">
                        <img src="./img-index/內文-指標1.png" alt=""></a>
                </div>
                <div class="col-3" id="more">More</div>

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
        <div class="row" style="position:relative;margin: unset;margin-top: 40px;">
            <div class="container3">
                <div class="col-12" style="padding: unset;background-color: rgb(223, 188, 223);padding: 40px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1806.200026829416!2d121.86017658530668!3d25.122162344672223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625465980639!5m2!1szh-TW!2stw"
                        width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <!-- <iframe src="htimg-index/tps://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14449.620098497267!2d121.8613609!3d25.1219942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625465632875!5m2!1szh-TW!2stw" width="100%" height="900" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                </div>
            </div>
            <div class="col-4" style="position: absolute;top: 600px;left: -8rem;"><img src="./img-index/地圖-指針圖案.png"
                    alt="" id="map-pic"></div>

        </div>
        <div class="row" style="padding-top: 85px;margin: auto;">
            <div class="col-4"></div>
            <div class="col-4" id="focus-us">關注我們

            </div>
        </div>
        <div class="row" style="margin: unset;margin-top: 25px;">
            <div class="col-xl-4 col-md-2 col-1" style="padding: unset;"></div>
            <div class="col-xl-4 col-md-8 col-10" style="padding: unset;">
                <div class="row">
                    <div class="col-4" style="text-align: right;padding: unset;">
                        <img src="./img-index/fb.png" alt="">
                    </div>
                    <div class="col-4" style="text-align: center;padding: unset;"><img src="./img-index/ig.png" alt="">
                    </div>
                    <div class="col-4" style="text-align: left;padding: unset;"><img src="./img-index/email.png" alt="">
                    </div>
                </div>
            </div>
            <!-- <div class="col-4" style="padding: unset;"></div> -->
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

    </script>

@endsection