@extends('layouts.sample-footer2')

@section('page_title')

    關於Ample Villa

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/about_us.css') }}">

@endsection

@section('content')


    <div class="p">
        <div class="cover-about-us-01"><img src="{{ asset('./img-about_us/about_us-cover-01.jpg') }}" alt=""></div>
        <div class="cover-about-us-02"><img src="{{ asset('./img-about_us/關於-Ample-Villa-圖.png') }}" alt=""></div>
        <div class="title">Ample Villa</div>
        <div class="cover-text">
            <h1>關於Ample Villa</h1>
            <p>Ample Villa以純白色系打造無敵海景民宿，堅持最好的住宿品質，最周到的貼心服務，給予各位享受到頂級、奢華、舒適、平靜的休息環境。</p>
        </div>
        <div class="cover-about-us-03"><img src="{{ asset('./img-about_us/關於我們-底圖-大.png') }}" alt=""></div>
        <div class="cover-about-us-04">
            <img src="{{ asset('./img-about_us/關於我們-海鷗.png') }}" alt="">
        </div>

        <div class="cover-about-us-05"></div>
        <div class="cover-text-2">
            <h2><a href="{{ asset('/') }}" style="color: white;text-decoration:none; ">Home</a></h2>
        </div>
        <div class="cover-about-us-06"><img src="{{ asset('./img-about_us/關於我們-船圖案.png') }}" alt=""></div>
    </div>

    <div class="row" style="margin: unset;padding-top: 0px;">
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




@endsection
