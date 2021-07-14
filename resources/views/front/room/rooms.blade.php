@extends('layouts.sample')

@section('page_title')

房型一覽

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/rooms.css")) }}">
@endsection

@section('content')


<div class="background-color">
    <div class="contain">
        <div class="rooms-word">
            <div class="rooms-text-title">房型一覽</div>
            <div class="rooms-text-e">ROOMS</div>
        </div>
    </div>
    <div class="the-rooms veuns">
        <div class="the-rooms-word col-12">
            <div class="the-rooms-text-e">Veuns</div>
            <div class="the-rooms-text-title">豪華房</div>
            <div class="pattern-ri le-0">
                <img src="{{ asset("./img-rooms/rooms-pattern-rudder.png") }}" alt="" class="pattern">
            </div>
        </div>

        <div class="the-rooms-img">
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-6">
                    <span>2張大床<br>1張日式床墊</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-luxury1.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>2間浴室</span>

                </div>
                <img src="{{ asset("./img-rooms/rooms-img-luxury2.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>免費早餐</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-luxury3.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>私人泳池</span>
                </div>
                <img src="{{ asset(./img-rooms/rooms-img-luxury4.png) }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-e-l">
                    <span>NT$32,795</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-luxury5.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-12">
                    <span>房間面積：<br>120平方公尺/1292平方英尺</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-luxury6.png") }}" alt="" class="op">
            </div>

        </div>

    </div>
    <div class="the-rooms demeter">
        <div class="the-rooms-word col-12 the-rooms-word-df">
            <div class="the-rooms-text-e">Demeter</div>
            <div class="the-rooms-text-title">海景房</div>
            <div class="pattern-le le-1">
                <img src="{{ asset("./img-rooms/rooms-pattern-anchor.png") }}" alt="" class="pattern">
            </div>
        </div>
        <div class="the-rooms-img">
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-5">
                    <span>1 張大床與<br>1 張沙發床</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-Sea1.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>1間浴室</span>

                </div>
                <img src="{{ asset("./img-rooms/rooms-img-Sea2.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>免費早餐</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-Sea3.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>私人泳池</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-Sea4.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word  word-e-l">
                    <span>NT$16,441</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-Sea5.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-10">
                    <span>房間面積：<br>48平方公尺/517平方英尺</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-Sea6.png") }}" alt="" class="op">
            </div>

        </div>


    </div>
    <div class="the-rooms epona">
        <div class="the-rooms-word col-12">
            <div class="the-rooms-text-e">Epona</div>
            <div class="the-rooms-text-title">雙人房</div>
            <div class="pattern-ri-2">
                <img src="{{ asset("./img-rooms/rooms-pattern-ship.png") }}" alt="" class="pattern">
            </div>
        </div>
        <div class="the-rooms-img">
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>1 張大床</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-double1.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>1間浴室</span>

                </div>
                <img src="{{ asset("./img-rooms/rooms-img-double2.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>免費早餐</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-double3.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4-2">
                    <span>陽台/露台</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-double4.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-e-2">
                    <span>NT$7,652</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-double5.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-10">
                    <span>房間面積：<br>60平方公尺/646平方英尺</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-double6.png") }}" alt="" class="op">
            </div>

        </div>


    </div>
    <div class="the-rooms standard">
        <div class="the-rooms-word col-12 the-rooms-word-df">
            <div class="the-rooms-text-e">Standard</div>
            <div class="the-rooms-text-title">標準房</div>
            <div class="pattern-le le-2">
                <img src="{{ asset("./img-rooms/rooms-pattern-pointer.png") }}" alt="" class="pattern">
            </div>
        </div>

        <div class="the-rooms-img">
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-5">
                    <span>1 張大床與<br>1 張日式床墊</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-standard1.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>1間浴室</span>

                </div>
                <img src="{{ asset("./img-rooms/rooms-img-standard2.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4">
                    <span>免費早餐</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-standard3.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-4-2">
                    <span>陽台/露台</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-standard4.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-s">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-e-2">
                    <span>NT$6,588</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-standard5.png") }}" alt="" class="op">
            </div>
            <div class="the-rooms-b">
                <div class="room-img"></div>
                <div id="rooms-c"></div>
                <div id="rooms-word" class="rooms-word word-10">
                    <span>房間面積：<br>45平方公尺/484平方英尺</span>
                </div>
                <img src="{{ asset("./img-rooms/rooms-img-standard6.png") }}" alt="" class="op">
            </div>

        </div>

    </div>
    <div class="the-rooms-box"></div>
</div>




@endsection
