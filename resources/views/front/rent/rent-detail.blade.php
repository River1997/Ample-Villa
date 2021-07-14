@extends('layouts.sample')

@section('page_title')

房間訂購明細

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/rent-detail.css")) }}">

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
                線上訂房明細
            </div>
        </div>
        <br>

        <form>
            <div class="form-row">
                <div class="form-group col-xl-6 col-12">
                    <label for="inputName">姓名</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Name" readonly>
                </div>
                <div class="form-group col-xl-6 col-12 pass1">
                    <label for="inputID">身份證號碼/護照號碼</label>
                    <input type="password" class="form-control" id="inputID" placeholder="ID/Passport Number" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-xl-6 col-12">
                    <label for="inputPhone">電話</label>
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone"
                        oninput="value=value.replace(/[^\d]/g,'')" readonly>
                </div>
                <div class="form-group col-xl-6 col-12 pass2">
                    <label for="inputEmail">信箱</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email@" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAirplane">航班編號</label>
                <input type="text" class="form-control" id="inputAirplane" placeholder="0000-0000-0000" readonly>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6 col-12">
                    <label for="checkintime">入房時間</label>

                    <!-- <input type="datetime-local" name="checkintime" id="timechosen"> -->
                    <input type="datetime-local" class="form-control" id="checkintime" placeholder="2021/07/06 14:00"
                        readonly>
                </div>
                <div class="form-group col-lg-6 col-12 pass3">
                    <label for="checkouttime">退房時間</label>

                    <input type="datetime-local" class="form-control" name="checkouttime" id="checkouttime" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6 day">
                    <label for="inputDay">入住天數</label>
                    <input type="text" class="form-control" id="inputDay" placeholder="2"
                        oninput="value=value.replace(/[^\d]/g,'')" readonly>
                    <!-- <select id="inputDay" class="form-control" >
                            <option selected></option>




                        </select> -->
                </div>
                <div class="form-group col-lg-6 pass4 day">
                    <label for="people">住宿人數</label>
                    <input type="text" class="form-control" id="people" placeholder="4"
                        oninput="value=value.replace(/[^\d]/g,'')" readonly>
                    <!-- <select id="people" class="form-control">
                            <option selected></option>

                        </select> -->
                </div>
            </div>

            <br>
            <div class="form-group">
                <label for="arrivaltime">抵達時間</label>
                <input type="text" class="form-control" id="arrivaltime" placeholder="2021/07/06 14:00" readonly>
            </div>
            <div class="form-group">
                <label for="rentroom">預訂房型</label>
                <input type="text" class="form-control" id="rentroom" placeholder="Venus 豪華房" readonly>
            </div>
            <div class="form-row">
                <div class="form-group col-xl-6 col-12">
                    <label for="count">數量</label>
                    <input type="text" class="form-control" id="count" placeholder="1"
                        oninput="value=value.replace(/[^\d]/g,'')" readonly>
                </div>
                <div class="form-group col-xl-6 col-12 pass2">
                    <label for="money">價錢</label>
                    <input type="email" class="form-control" id="money" placeholder="NT $32,795" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="remark">備註</label>
                    <textarea name="remark" id="remark" class="form-control" cols="30" rows="10"
                        style="font-size: 30px;" readonly placeholder="我們會開車抵達"></textarea>

                </div>

            </div>
            <div class="form-row">

                <div class="col-12 spare-line"></div>
            </div>
            <div class="row">
                <div class="col-12" id="payway">
                    付款方式
                </div>
            </div>
            <div class="row">
                <div class="col-12 paybox" style="display: flex;">
                    <input type="radio" name="payway" id="pay-at-time" class="rdobutton_radio">
                    <label for="pay-at-time" class="rdobutton_label"></label>
                    <div class="payword">現場付款</div>
                </div>
                <div class="col-12 paybox" style="display: flex;">
                    <input type="radio" name="payway" id="pay-online" class="rdobutton_radio">
                    <label for="pay-online" class="rdobutton_label"></label>
                    <div class="payword" style="position:relative">網路信用卡付款
                        <div class="row forrwd" style="margin: unset;">
                            <div class="col-12" style="padding: unset;">
                                <div class="discript-for-pay">
                                    說明:本站採用SSL線上安全收款機制，目前接受VISA、MasterCard、JCB，若您使用其他位用卡，請使用傳真授權書支付訂購金額。</div>
                                <div class="row">
                                    <div class="col-12">信用卡別:</div>
                                </div>
                                <div class="row card-type">

                                    <div class="col-xl-6 col-12">
                                        <div class="row">
                                            <div class="col-md-4 col-4" style="display: flex;padding: unset;">
                                                <input type="radio" name="paycard" id="pay-visa"
                                                    class="rdobutton_radio">
                                                <label for="pay-visa" class="rdobutton_label"></label>
                                                <div class="payword2">VISA</div>
                                            </div>
                                            <div class="col-md-4 col-5" style="display: flex;padding: unset;">
                                                <input type="radio" name="paycard" id="pay-master"
                                                    class="rdobutton_radio">
                                                <label for="pay-master" class="rdobutton_label"></label>
                                                <div class="payword2">Master</div>
                                            </div>
                                            <div class="col-md-4 col-3" style="display: flex;padding: unset;">
                                                <input type="radio" name="paycard" id="pay-jcb" class="rdobutton_radio">
                                                <label for="pay-jcb" class="rdobutton_label"></label>
                                                <div class="payword2">JCB</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-xl-6 col-12">
                                        <label for="credit-card" class="creditcard">信用卡號</label>
                                        <input type="text" class="form-control" id="credit-card">
                                    </div>
                                    <div class="form-group col-xl-6 col-12 pass1">
                                        <label for="last3num" class="creditcard">請輸入信用卡背後末3碼驗証</label>
                                        <input type="text" class="form-control" id="last3num">
                                    </div>
                                </div>
                                <div class="form-row card-type2">
                                    <div class="form-group col-xl-6 col-12">

                                        <label for="credit-time" class="creditcard">卡片效期(ex:4月16日)</label>
                                        <div class="row" id="credit-time">
                                            <div class="col-5" style="padding: unset;padding-left: 15px;">
                                                <input type="text" class="form-control" id="card-month">

                                            </div>
                                            <div class="col-1" style="padding: unset;">月</div>
                                            <div class="col-5" style="padding: unset;">
                                                <input type="text" class="form-control" id="card-day">
                                            </div>
                                            <div class="col-1" style="padding: unset;">日</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-12 pass1">
                                        <label for="readypay" class="creditcard">付款金額</label>
                                        <input type="text" class="form-control" id="readypay" readonly
                                            placeholder="NT$32,795">
                                    </div>
                                </div>
                                <div class="form-row card-type2">
                                    <div class="form-group col-xl-6 col-12">
                                        <label for="card-master" class="creditcard">持卡人</label>
                                        <input type="text" class="form-control" id="card-master">
                                    </div>
                                    <div class="form-group col-xl-6 col-12 pass1">
                                        <label for="master-phone" class="creditcard">持卡人電話</label>
                                        <input type="text" class="form-control" id="master-phone"
                                            oninput="value=value.replace(/[^\d]/g,'')">
                                    </div>
                                </div>
                                <div class="form-group card-type2">
                                    <label for="master-ID" class="creditcard">持卡人身份證號(外國人請輸入*後再輸入護照號碼)</label>
                                    <input type="text" class="form-control" id="master-ID">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>



            <div class="row" id="paypay">
                <div class="col-xl-3 col-md-5 col-6">
                    <a href="{{ asset("/rent-pay") }}">
                        <input type="button" value="回上一頁" id="back-index" class="form-control" style="height: 80px">
                    </a>
                </div>
                <!-- <div class="col-xl-6 col-md-4 col-2"></div> -->
                <div class="col-xl-3 col-md-5 col-6">
                    <a href="{{ asset("/rent-success") }}">
                        <input type="button" value="確認付款" id="pay-now" class="form-control" style="height: 80px">
                    </a>

                </div>
            </div>

        </form>


    </div>
</div>

@section('js')

<script src="{{ asset("js/rent-detail.js") }}"></script>

@endsection




@endsection












