@extends('layouts.sample')

@section('page_title')

房間付款

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/rent-pay.css")) }}">

@endsection

@section('content')

<main>

    <div id="rent-body">
        <div class="container4">
            <div class="row">
                <div class="col-12">
                    <div id="rent-title">
                        線上訂房
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12" id="rent-information">
                    訂房表格
                </div>
            </div>
            <br>

            <form>
                <div class="form-row">
                    <div class="form-group col-xl-6 col-12">
                        <label for="inputName">姓名</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group col-xl-6 col-12 pass1">
                        <label for="inputID">身份證號碼/護照號碼</label>
                        <input type="password" class="form-control" id="inputID" placeholder="ID/Passport Number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6 col-12">
                        <label for="inputPhone">電話</label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="Phone"
                            oninput="value=value.replace(/[^\d]/g,'')">
                    </div>
                    <div class="form-group col-xl-6 col-12 pass2">
                        <label for="inputEmail">信箱</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email@">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAirplane">航班編號</label>
                    <input type="text" class="form-control" id="inputAirplane" placeholder="Flight ID">
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 col-12">
                        <label for="checkintime">入房時間</label>

                        <!-- <input type="datetime-local" name="checkintime" id="timechosen"> -->
                        <input type="datetime-local" class="form-control" id="checkintime"
                            placeholder="2021/07/06 14:00">
                    </div>
                    <div class="form-group col-lg-6 col-12 pass3">
                        <label for="checkouttime">退房時間</label>

                        <input type="datetime-local" class="form-control" name="checkouttime" id="checkouttime">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 day">
                        <label for="inputDay">入住天數</label>
                        <select id="inputDay" class="form-control">
                            <option selected></option>
                            <!-- <option selected>1天</option> -->
                            <!-- <option class="days"></option> -->



                        </select>
                    </div>
                    <div class="form-group col-lg-6 pass4 day">
                        <label for="people">住宿人數</label>
                        <select id="people" class="form-control">
                            <option selected></option>
                            <!-- <option selected>Choose...</option>
                        <option>...</option> -->
                        </select>
                    </div>
                </div>
                <!-- <div class="row" style="position: relative;">
                <div class="col-xl-3 col-12 room">Single Room
                    <div class="row">
                        <div class="col-12 room-radio">
                            <br>
                            <input type="radio" name="single" class="single"> 0
                            <br>
                            <input type="radio" name="single" class="single"> 1
                            <br>
                            <input type="radio" name="single" class="single"> 2
                            <br>
                            <input type="radio" name="single" class="single"> 3
                            <br>
                            <input type="radio" name="single" class="single"> 4
                            <br>
                            <input type="radio" name="single" class="single"> 5

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 room col-12">Single Room(Combine with bath/shower)
                    <div class="row">
                        <div class="col-12 room-radio">
                            <br>

                            <input type="radio" name="single-shower" class="single-shower" value="yes"> Yes
                            <br>
                            <input type="radio" name="single-shower" class="single-shower" value="no"> No


                        </div>
                    </div>

                </div>

                <div class="col-xl-3 room">Double Room
                    <div class="row">
                        <div class="col-12 room-radio">
                            <br>
                            <input type="radio" name="double" class="double" value="0"> 0
                            <br>
                            <input type="radio" name="double" class="double" value="1"> 1
                            <br>
                            <input type="radio" name="double" class="double" value="2"> 2
                            <br>
                            <input type="radio" name="double" class="double" value="3"> 3
                            <br>
                            <input type="radio" name="double" class="double" value="4"> 4
                            <br>
                            <input type="radio" name="double" class="double" value="5"> 5

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 room">Twin Room
                    <div class="row">
                        <div class="col-12 room-radio">
                            <br>
                            <input type="radio" name="twin" class="twin" value="0"> 0
                            <br>
                            <input type="radio" name="twin" class="twin" value="1"> 1
                            <br>
                            <input type="radio" name="twin" class="twin" value="2"> 2
                            <br>
                            <input type="radio" name="twin" class="twin" value="3"> 3
                            <br>
                            <input type="radio" name="twin" class="twin" value="4"> 4
                            <br>
                            <input type="radio" name="twin" class="twin" value="5"> 5

                        </div>
                    </div>
                </div>
            </div> -->
                <br>
                <div class="form-group">
                    <label for="arrivaltime">抵達時間</label>
                    <select id="arrivaltime" class="form-control">
                        <option selected></option>
                    </select>
                    <!-- <input type="datetime-local" class="form-control" id="arrivaltime"
                        placeholder="2021/07/06 14:00"> -->
                </div>
                <div class="form-group">
                    <label for="room-class">預定房型</label>
                    <div class="row" style="margin: unset;">
                        <div class="col-12 room-class form-control" style="height: unset;">
                            <div class="row" style="margin: unset;">
                                <div class="room-pic"><img src="{{ asset("img-rent/venus.jpg") }}" alt=""></div>
                                <div class="room-information">
                                    <div class="row row2">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                    <div class="row">
                                                        <div class="col-5 room-eng">Venus </div>
                                                        <div class="col-5" style="padding: unset;">豪華房</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-5 peoples">適合人數︰4人</div>
                                            </div>
                                        </div>
                                        <div class="col-12 room-line"></div>
                                        <div class="col-12 room-first" style="padding: unset;">2張大床與1張日式床墊</div>
                                        <div class="col-12 room-first" style="padding: unset;">2間浴室</div>
                                        <div class="col-12 room-first" style="padding: unset;">私人泳池</div>
                                        <div class="col-12 room-first" style="padding: unset;">免費早餐</div>
                                    </div>
                                </div>
                                <div class="room-target">
                                    <div class="row row3" style="margin:unset">
                                        <div class="col-12" style="padding: unset;">

                                            <div class="row" style="margin: unset;">
                                                <div class="col-12 room-price" style="padding: unset;">NT 32,795
                                                </div>

                                            </div>
                                            <div class="row" style="margin: unset;">
                                                <div class="col-12" style="padding: unset;">
                                                    <div class="row form-row number-group" style="padding: unset;">
                                                        <div class="col-md-5 col-5 room-number"
                                                            style="padding: unset;">訂房數量︰
                                                        </div>
                                                        <div class="col-md-5 col-6 room-number1"
                                                            style="padding:unset;">
                                                            <select class="rooms room-number2">
                                                                <option selected></option>
                                                            </select>


                                                            <!-- <select class="rooms form-control"> -->

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row" style="margin: unset;">
                                                <div class="col-12 empty-room" style="padding: unset;">空房數量︰2間
                                                </div>

                                            </div>
                                            <div class="row" style="margin: unset;">
                                                <div class="col-12" style="padding: unset;">
                                                    <input type="submit" value="立即預訂" class="col-12 rent-now"
                                                        style="padding:unset;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="remark">備註</label>
                        <textarea name="remark" id="remark" class="form-control" cols="30" rows="10"
                            style="font-size: 30px;"></textarea>

                    </div>

                </div>
                <div class="row" id="paypay">
                    <div class="col-xl-3 col-md-5 col-6">
                        <a href="{{ asset("/rent") }}" type="button" value="回上一頁" id="back-index"  style="padding-right:0px" style="height: 80px">
                            <input type="button" value="回上一頁" id="back-index"
                            class="form-control" style="height: 80px">
                        </a>
                    </div>
                    <!-- <div class="col-xl-6 col-md-4 col-2"></div> -->
                    <div class="col-xl-3 col-md-5 col-6">
                        <a href="{{ asset("/rent-detail") }}">
                            <input type="button" value="確認付款" id="pay-now"
                                class="form-control" style="height: 80px">
                        </a>

                    </div>
                </div>

            </form>
        </div>
    </div>


</main>

@endsection

@section('js')

<script src="{{ asset("js/rent-pay.js") }}"></script>

@endsection

