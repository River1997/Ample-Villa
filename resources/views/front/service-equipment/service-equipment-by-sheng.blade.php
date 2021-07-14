@extends('layouts.sample')

@section('page_title')

服務及設施

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/service-by-sheng.css")) }}">
@endsection


@section('content')

<main style="padding-top: 100px;">
    <div class="row" style="margin:unset;">
        <div class="container2">
            <div class="row" style="margin: unset;">
                <div class="col-12 rowjustify" style="padding: unset; display: flex;">
                    <div class="discriptforservice">
                        <div class="row" style="margin: unset;">

                            <div class="col-12" style="padding:unset;">
                                <div class="row rowhight" style="margin: unset;">
                                    <div class="col-2 textforservice" style="padding: unset;">設施</div>
                                    <div class="col-2 textforservice" style="padding: unset;">及</div>
                                    <div class="col-2 textforservice" style="padding: unset;">服務</div>
                                </div>
                            </div>

                            <div class="col-12" style="padding: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textforservice2" style="padding: unset;">
                                        所有房間都能享受到免費&nbsp;&nbsp;Wi-Fi&nbsp;&nbsp; 。每日客房清潔服務、壁爐、私人登記入住 /
                                        退房的服務等一系列頂級設施。</div>
                                    <div class="col-12" style="padding: unset;height: 26px;"></div>
                                    <div class="col-12 textforservice2" style="padding: unset;">水湳洞 Ample Villa 有 4
                                        間客房，每間客房都裝修考究，大多配有額外浴室、額外洗手間、空氣淨化機。已鋪地毯、清潔用品等頂級設備。酒店各種娛樂設施讓您在入住期間享受更多樂趣。
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="picforsevice">
                        <div class="pic1">
                            <img src="{{ asset("img-服務及設施/服務及設施-圖片1.png") }}" alt="">
                        </div>
                        <div class="pic2"><img src="{{ asset("img-服務及設施/服務及設施-圖片2.png") }}" alt=""></div>
                        <div class="pic3"><img src="{{ asset("img-服務及設施/服務及設施-圖片3.png") }}" alt=""></div>
                    </div>


                </div>

            </div>
        </div>

    </div>
    <div class="row" style="margin: unset;">
        <div class="col-12 detailforservice" style="padding: unset;">
            <div class="pic4"><img src="{{ asset("img-服務及設施/服務及設施-圖片4.png") }}" alt=""></div>
            <div class="pictable">

                <div class="col-12 posi" style="padding: unset;">
                    <div id="wehave">We Have</div>
                    <div id="servicebox">

                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-Wi-Fi.png") }}" alt="">

                                    </div>

                                    <div class="col-12 sertext" style="padding: unset;">
                                        Wi-Fi
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-按摩浴缸.png") }}" alt="">

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        按摩浴缸
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-吹風機.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        吹風機
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-沐浴用品.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        沐浴用品
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-額外洗手間.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        額外洗手間
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-空調.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        空調
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-煙霧感測器.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        煙霧感測器
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-休息區.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        休息區
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-迷你巴台.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        迷你巴台
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-免費樽裝水.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        免費樽裝水
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-沖調設備.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        沖調設備
                                    </div>
                                </div>
                            </div>
                            <div class="formargin" >
                                <div class="row" style="margin: unset;">
                                    <div class="col-12 textimg" style="padding: unset;">
                                        <img src="{{ asset("img-服務及設施/服務及設施-電話.png") }}" alt="" >

                                    </div>
                                    <div class="col-12 sertext" style="padding: unset;">
                                        電話
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
            <div class="piactableblue"></div>
            <div class="pic5"><img src="{{ asset("img-服務及設施/服務及設施-圖片5.png") }}" alt=""></div>
        </div>

    </div>
</main>

@endsection
