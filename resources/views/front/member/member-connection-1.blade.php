@extends('layouts.sample')

@section('page_title')

會員專區-聯絡我們

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-reservation-1.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-connection-3.css")) }}">

<link rel="stylesheet" href="{{ asset(("css/member-reservation-1.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/test.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-profile-2.css")) }}">

@endsection


@section('content')



<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title-1 ">會員專區</div>
        <div class="btn-group-1">
            <div id="btn-1" class="small-button test tab-btn">會員資料 </div>
            <div id="btn-2" class="small-button test tab-btn active">訂房查詢</div>
            <div id="btn-3" class="small-button test tab-btn">聯絡我們</div>
        </div>
        <div id="conetent-1" class="tab-content ">
            <form class="profile-form ">
                <fieldset disabled>
                    <div class="form-group">
                        <label class="word-1" for="disabledTextInput">帳號</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="Peter123">
                    </div>
                    <div class="form-group">
                        <label class="word-1" for="disabledTextInput">密碼</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="********">
                    </div>
                    <div class="form-row form-number ">
                        <div class="form-group col-sm-4 ">
                            <label class="word-1" for="disabledTextInput">國際號碼</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="台灣(+886)">
                        </div>
                        <div class="form-group col-sm-8">
                            <label class="word-1" for="disabledTextInput">手機號碼</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="0912345678">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="word-1" for="disabledTextInput">電子信箱</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="abc123456789@gmail.com">
                    </div>
                    <div class="form-row  form-number-date">
                        <div class="form-group col-sm-6 ">
                            <label class="word-1" for="disabledTextInput">出生年</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="1911年">
                        </div>
                        <div class="form-group col-sm-4 ">
                            <label class="word-1" for="disabledTextInput">月份</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="1月">
                        </div>
                        <div class="form-group col-sm-2  profile ">
                            <label class="word-1" for="disabledTextInput">日期</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="11日">
                        </div>
                    </div>

                </fieldset>
                <div class="button-5  ">
                    <a class="btn btn-primary  profile-size " href="{{ asset("/member/profile-2") }}" role="button">編輯資料</a>
                </div>
            </form>
        </div>
        <div id="conetent-2" class="tab-content">
            <div class="table-1">
                <table class="table table-bordered  width">
                    <thead>
                        <tr class=" word-re" style="height: 70px;">
                            <th scope="col" class="tr-1 blue-color word-re ">日期</th>
                            <th scope="col" class="tr-2 blue-color word-re">姓名</th>
                            <th scope="col" class="tr-3 blue-color word-re">付款方式</th>
                            <th scope="col" class="tr-4 blue-color word-re">付款金額</th>
                            <th scope="col" class="tr-5 blue-color word-re">明細</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=" word-re" style="height: 75px;">
                            <th class=" blue-color word-re" scope="row">2021-07-02</th>
                            <td class=" blue-color ">王翠花</td>
                            <td class=" blue-color">網路信卡付款</td>
                            <td class=" blue-color">NT$32,795</td>
                            <td class=" blue-color color-deep">
                                <a class="btn btn-primary"  href="{{ asset("/member/reservation-2") }}">查看</a>
                            </td>
                          </tr>
                          <tr class=" word-re" style="height: 75px;">
                            <th class=" blue-color word-re" scope="row">2021-07-02</th>
                            <td class=" blue-color ">王翠花</td>
                            <td class=" blue-color">網路信卡付款</td>
                            <td class=" blue-color">NT$32,795</td>
                            <td class=" blue-color color-deep">
                                <a class="btn btn-primary" href="{{ asset("/member/reservation-2") }}">查看</a>
                            </td>
                        </tr>
                        <tr class=" word-re" style="height: 75px;">
                            <th class=" blue-color word-re" scope="row">2021-07-02</th>
                            <td class=" blue-color ">王翠花</td>
                            <td class=" blue-color">網路信卡付款</td>
                            <td class=" blue-color">NT$32,795</td>
                            <td class=" blue-color color-deep">
                                <a class="btn btn-primary" href="{{ asset("/member/reservation-2") }}">查看</a>
                            </td>
                        </tr>
                        <tr class=" word-re" style="height: 75px;">
                            <th class=" blue-color word-re" scope="row">2021-07-02</th>
                            <td class=" blue-color ">王翠花</td>
                            <td class=" blue-color">網路信卡付款</td>
                            <td class=" blue-color">NT$32,795</td>
                            <td class=" blue-color color-deep">
                                <a class="btn btn-primary" href="{{ asset("/member/reservation-2") }}">查看</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="page ">
                <nav aria-label="Page navigation example reservation-auto">
                    <ul class="pagination  justify-content-center reservation-auto ">
                        <li class="page-item  " style=" width: 72px;">
                            <a class="page-link " href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item " style=" width: 72px;"><a class="page-link " href="#">1</a></li>
                        <li class="page-item" style=" width: 72px;"><a class="page-link" href="#">2</a></li>
                        <li class="page-item" style=" width: 72px;"><a class="page-link" href="#">3</a></li>
                        <li class="page-item" style=" width: 72px;">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="conetent-3" class="tab-content first">
            <div class="connect-to-us-box">
                <div id="connect-to-us"></div>
            </div>
            <div class="button-5  ">
                <a class="btn btn-primary  profile-size " href="{{ asset("/member/connection-2") }}" role="button">送出</a>
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')

<script src="{{ asset("js/test.js") }}"></script>

@endsection
