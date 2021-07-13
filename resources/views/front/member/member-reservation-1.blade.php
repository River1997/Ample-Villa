@extends('layouts.sample')

@section('page_title')

會員專區-訂單列表

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-reservation-1.css")) }}">
@endsection

@section('content')


<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title-1 ">會員專區</div>
        <div class="btn-group-1">
            <a href="{{ asset("/member/profile-1") }}" class="small-button active">會員資料 </a>
            <a href="{{ asset("/member/reservation-1") }}" class="small-button">訂房查詢</a>
            <a href="{{ asset("/member/connection-1") }}" class="small-button">聯絡我們</a>
        </div>
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



</div>



@endsection
