@extends('layouts.sample')

@section('page_title')

預訂房型

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/rent-room.css")) }}">
@endsection


@section('content')

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
                        預訂房型
                    </div>
                </div>
                <br>

                <form>

                    <div class="form-group">

                        <div class="row" style="margin: unset;">

                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Venus</div>
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
                    <div class="form-group">

                        <div class="row" style="margin: unset;">
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Demeter</div>
                                                            <div class="col-5" style="padding: unset;">海景房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰2人</div>
                                                </div>
                                            </div>
                                            <div class="col-12 room-line"></div>
                                            <div class="col-12 room-first" style="padding: unset;">1張大床與1張沙發床</div>
                                            <div class="col-12 room-first" style="padding: unset;">1間浴室</div>
                                            <div class="col-12 room-first" style="padding: unset;">私人泳池</div>
                                            <div class="col-12 room-first" style="padding: unset;">免費早餐</div>
                                        </div>
                                    </div>
                                    <div class="room-target">
                                        <div class="row row3" style="margin: unset;">
                                            <div class="col-12" style="padding: unset;">

                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 16,441
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
                                                                <select class="rooms2 room-number2">
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
                    <div class="form-group">

                        <div class="row" style="margin: unset;">
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Epona</div>
                                                            <div class="col-5" style="padding: unset;">雙人房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰2人</div>
                                                </div>
                                            </div>
                                            <div class="col-12 room-line"></div>
                                            <div class="col-12 room-first" style="padding: unset;">1張大床</div>
                                            <div class="col-12 room-first" style="padding: unset;">1間浴室</div>
                                            <div class="col-12 room-first" style="padding: unset;">陽台/露台</div>
                                            <div class="col-12 room-first" style="padding: unset;">免費早餐</div>
                                        </div>
                                    </div>
                                    <div class="room-target">
                                        <div class="row row3" style="margin: unset;">
                                            <div class="col-12" style="padding: unset;">

                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 7,652
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
                                                                <select class="rooms3 room-number2">
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
                    <div class="form-group">

                        <div class="row" style="margin: unset;">
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Standard</div>
                                                            <div class="col-5" style="padding: unset;">標準房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰2人</div>
                                                </div>
                                            </div>
                                            <div class="col-12 room-line"></div>
                                            <div class="col-12 room-first" style="padding: unset;">1張大床與1張日式床墊</div>
                                            <div class="col-12 room-first" style="padding: unset;">1間浴室</div>
                                            <!-- <div class="col-12 room-first" style="padding: unset;">私人泳池</div> -->
                                            <div class="col-12 room-first" style="padding: unset;">免費早餐</div>
                                        </div>
                                    </div>
                                    <div class="room-target">
                                        <div class="row row3" style="margin:unset">
                                            <div class="col-12" style="padding: unset;">

                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 6,588
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
                                                                <select class="rooms4 room-number2">
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
                            <a href="{{ asset("/rent") }}" id="back-index" >
                                <input type="button" value="回上一頁" id="back-index" class="form-control">
                            </a>

                        </div>
                        <!-- <div class="col-xl-6 col-md-4 col-2"></div> -->
                        <div class="col-xl-3 col-md-5 col-6">
                            <a href="{{ asset("/rent-pay") }}" id="back-index" >
                                <input type="button" value="填寫資料" id="pay-now" class="form-control">
                            </a>

                        </div>
                    </div>

                </form>
            </div>
        </div>



@section('js')

<script src="{{ asset("js/rent-room.js")}}"></script>

@endsection

@endsection
