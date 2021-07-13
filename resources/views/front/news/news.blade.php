@extends('layouts.sample')

@section('page_title')

Ample Villa-最新消息

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/news.css")) }}">
@endsection

@section('content')

<div class="main2">
    <div class="row" style="margin: unset;">
        <div class="col-12" style="padding: unset;">
            <div class="row">
                <div class="col-12">
                    <div class="row rowbox" style="padding: unset;margin:unset;">
                        <div class="col-4 inside-logo2" >
                            <img src="./img-最新消息/內文-logo.png" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding: unset;margin: unset;position:relative">
        <div class="col-6" id="news" style="padding: unset;">
            最新消息
        </div>
        <div class="col-6" id="news-eng" style="padding: unset;">NEWS</div>
        <div class="col-12" id="news-backgro" style="padding: unset;">
            <div class="container2">
                <div class="row" id="news-box1">
                    <div class="col-xl-9 col-9" id="news-1">
                        三月是雙魚和牡羊朋友的大日子
                    </div>
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6 col-12 newspic" style="position: relative;display: flex;"><img
                            alt="gallery" class="w-full object-cover h-full object-center block"
                            src="./img-最新消息/最新消息-圖1.png">
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
                            src="./img-最新消息/最新消息-圖2.png">
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
                            src="./img-最新消息/最新消息-圖3.png">
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
                            src="./img-最新消息/最新消息-圖4.png">
                        <div class="row">
                            <div class="col-3" style="padding: unset;">
                                <span id="mday4"></span>
                            </div>
                        </div>
                    </div>


                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="row" style="margin: unset;position: relative;">
                    <div class="col-xl-4 col-sm-2" style="padding: unset;">

                    </div>
                    <div class="col-xl-4 col-sm-8 col-9" style="padding: unset;margin: auto;">
                        <div class="row" style="margin: auto;">
                            <a class="col-2 page-last" style="padding: unset;">〈</a>
                            <a class="col-2 page" style="padding: unset;">1</a>
                            <a class="col-2 page" style="padding: unset;">2</a>
                            <a class="col-2 page" style="padding: unset;">3</a>
                            <a class="col-2 page-next" style="padding: unset;">〉</a>
                        </div>

                    </div>
                    <a class="col-xl-4 col-sm-2 col-3 imgarrow" style="padding: unset;" href="" >
                        <img src="./img-最新消息/top.png" alt="">

                    </a>

                </div>
                <div class="row forpad"></div>






            </div>

        </div>
        <!-- <div class="row" id="arrow">
            <div class="col-8">
                <a href="" style="text-decoration: none;color: white;">
                    <img src="./img-index/內文-指標1.png" alt=""></a>
            </div>
            <div class="col-3" id="more">More</div>

        </div> -->

    </div>

</div>

@section('js')

<script src="{{ asset("js/news.js") }}"></script>

@endsection

@endsection















