@extends('layouts.sample')

@section('page_title')

附近風景

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/landscape.css")) }}">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection


@section('content')


<div data-aos="zoom-in" data-aos-duration="2000" class="picture-3  ">
    <img src="{{ asset("./img-風景/附近風景-圖片2.png") }}" alt="">
</div>
<div data-aos="zoom-in" data-aos-duration="1000" class="picture-2 ">
    <img src="{{ asset("./img-風景/附近風景-圖片1.png") }}" alt="">
</div>

<div data-aos="zoom-in" data-aos-duration="3000" class="picture-4 ">
    <img src="{{ asset("./img-風景/附近風景-圖片3.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="t-1">附近風景</div>
<div data-aos="zoom-in" class="t-2">水湳洞十三層遺址</div>
<div data-aos="zoom-in" data-aos-duration="6000" class="picture-5">
    <img src="{{ asset("./img-風景/附近風景-圖片4.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="t-3">
    台金舊礦廠又被暱稱為十三層，遠遠望過去很像荒廢的美麗宮殿，常被稱為礦山上的布達拉宮，景觀點以水湳洞停車場仰望，以及長仁社區觀景亭側看的角度最動人，因為歌手張宇的「用心良苦」MV就在這裡拍的，來這裡玩就會忍不住想唱，一邊高歌一邊賞景超有fu的！
</div>
<div data-aos="zoom-in" class="t-3-3">2019年9月由台電與國際照明藝術大師周鍊、新銳藝術家何采柔共同合作「點亮十三層」公共藝術，固定於晚間6～9點點亮。</div>
<div data-aos="zoom-in" class="picture-7">
    <img src="{{ asset("./img-風景/附近風景-圖片5.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="picture-8">
    <img src="{{ asset("./img-風景/附近風景-圖片6.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="picture-9">
    <img src="{{ asset("./img-風景/附近風景-圖片7.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="t-4">陰陽海觀景台</div>
<div data-aos="zoom-in" class="t-5">
    第一次停下來欣賞，傳說中有台版灌籃高手拍攝場景，但實際到訪覺得陰陽海觀景台背山面海拍照起來更美，不僅可以近距離觀看陰陽海特殊海景，還可以欣賞金瓜石有名的基隆山、茶壺山、十三層遺址等值得一遊。</div>
<div data-aos="zoom-in" class="t-5-5">附近設有大型停車場，旁邊有濂洞里步道，周邊可順遊龍洞九孔池、龍洞灣海洋公園、鼻頭角步道，完成美好的東北角一日遊。</div>
<div data-aos="zoom-in" class="picture-12">
    <img src="{{ asset("./img-風景/附近風景-圖片8.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="picture-15">
    <img src="{{ asset("./img-風景/附近風景-圖片11.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="picture-14">
    <img src="{{ asset("./img-風景/附近風景-圖片10.png") }}" alt="">
</div>
<div data-aos="zoom-in" class="picture-13">
    <img src="{{ asset("./img-風景/附近風景-圖片9.png") }}" alt="">
</div>


<div data-aos="zoom-in" data-aos="flip-left" class="picture-16">
    <img src="{{ asset("./img-風景/附近風景-圖片12.png") }}" alt="">
</div>



@section('js')

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="{{ asset("js/landscape.js") }}"></script>

@endsection
@endsection

