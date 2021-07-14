@extends('layouts.sample')

@section('page_title')

訂房成功

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/rent-success.css")) }}">



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
                    完成訂房
                </div>
            </div>
            <form>
                <div class="row thankforrent">
                    <div class="col-12 room-disc">
                        感謝您，已完成訂房！<br><br>
                    </div>

                    <div class="col-12 room-disc">您於訂房時所提供的電子郵件地址將會在15分鐘內收到一封電子郵件確認函。<br><br></div>

                    <div class="col-12 room-disc">收到電子郵件確認函後，請別忘了仔細檢查您的訂房詳細資料。如果您對訂房有任何疑問，請與客服中心聯絡。</div>
                    <div class="col-12" style="padding: unset;">
                       <div class="row rowback" style="margin: unset;">
                           <div class="col-md-4 col-6" style="padding: unset;"></div>
                           <div class="col-md-4 col-6" style="padding: unset;">
                            <a href="{{ asset("/") }}">
                                <input type="button" value="回到首頁" id="back-index" class="form-control">
                            </a><br></div>
                       </div>

                </div>

            </form>





        </div>
    </div>


</main>

@endsection

