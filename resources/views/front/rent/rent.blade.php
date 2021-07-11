<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上訂房</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/century-schoolbook" rel="stylesheet">
    <style>
        @import url('http://fonts.cdnfonts.com/css/century-schoolbook');

        body {
            margin: 0;
            line-height: unset;


        }

        * {

            box-sizing: border-box;
        }

        nav {
            width: 100vw;
            height: 100px;
            position: fixed;
            z-index: 30;
            background-color: white;
        }



        .container2 {
            width: 89.53%;
            margin: auto;

        }

        .container3 {
            width: 85%;
            margin: auto;
        }

        nav .col-2 img {
            width: 250px;
            height: 70px;

        }

        #burger {
            line-height: 70px;
            width: 50px;
            height: 50px;
            position: absolute;
            right: 0px;
            padding: unset;
        }

        #burger-btn {
            font-size: 2rem;
            color: royalblue;
            padding: unset;

        }

        .form-control {
            border: solid 2px rgb(109, 230, 225);
        }


        main {
            background-color: rgb(109, 230, 225);
            width: 100%;
            padding: 150px 50px 50px;
            /* height: 2000px; */

        }

        #rent-body {
            width: 100%;
            height: 100%;

            background-color: white;
            margin: auto;
            padding: 60px 120px;
        }

        #rent-title {
            font-size: 100pt;
            text-align: center;
            font-weight: bold;
            color: rgb(63, 117, 147);
            font-family: 微軟正黑體;
        }

        #rent-information {
            font-size: 50pt;
            color: rgb(63, 117, 147);
            font-weight: bold;
            font-family: 微軟正黑體;
        }
        .form-group label{
            font-family: 微軟正黑體;
            font-size: 36pt;
        }
        .form-group input, .form-group select{
            font-size: 30pt;
        }
        

        .room {
            text-align: left;
            font-size: 24pt;
            font-family: 微軟正黑體;

        }
        .room input{
            font-size: 150%;
        }

        .room-class {

            border: solid 2px rgb(109, 230, 225);

        }

        .room-pic {
            width: 335px;
            margin: 5px 0 5px 15px;

        }

        .room-pic img {
            width: 100%;
            height: 335px;
        }

        .room-information {
            margin: 5px 30px 5px 30px;
            width: 50%;
            font-family: 微軟正黑體;

        }

        .room-title {
            font-size: 50pt;
            font-family: 微軟正黑體;
            /* font-weight: bolder; */
        }
        .room-eng{
            letter-spacing: -5px;
        }

        .peoples {
            background-color: rgb(156, 142, 248);
            color: white;
            font-size: 24pt;
            text-align: center;
            line-height: 50px;
            font-family: 微軟正黑體;
        }

        .room-line {
            width: 100%;
            height: 4px;
            background-color: rgb(156, 142, 248);
            margin-top: 10px;
        }

        .room-first {
            margin-top: 20px;
            font-family: 微軟正黑體;
            font-size: 24pt;
            font-weight: 600;



        }

        .room-target {
            line-height: 50px;
            width: 20%;

        }

        .delete-line {
            text-decoration: line-through;
            font-size: 24pt;
            font-weight: 600;
            margin-bottom: 5px;
            font-family: 微軟正黑體;
        }

        .room-price {
            color: rgb(193, 39, 45);
            font-weight: bold;
            font-size: 60pt;
            margin-bottom: 40px;
            font-family: 微軟正黑體;
        }
        .room-number{
            font-family: 微軟正黑體;
            font-size: 40pt;
            /* line-height: 42px; */
            

        }
        .room-number2{
            font-family: 微軟正黑體;
            font-size: 24pt;
            height: 50px;
            line-height: 42px;
            border: solid black 2px;
            width: 100%;
            margin-bottom: 30px;
        }
     

        .rent-now {
            width: 100%;
            text-align: center;
            height: 6rem;
            font-size: 48pt;
            font-weight: bold;
            font-family: 微軟正黑體;
            line-height: 5rem;
            background-color: rgb(156, 142, 248);
            color: white;
        }
        #back-index{
            font-size: 48pt;
            color:rgb(109, 230, 225);
        }
        #pay-now{
            font-size: 48pt;
            background-color: rgb(109, 230, 225);
            color: white;
        }


        /* #origin{
            width: 20px;
            height: 20px;
        } */
    </style>
</head>

<body>
    <nav>

        <div class="row">
            <div class="container2">
                <div class="row"
                    style="width: 100%;height: 100%;background-color: white;margin:unset;padding-top: 15px;">
                    <div class="col-2" style="float: left;padding: unset;">
                        <img src="./img-index/nav-logo.png">
                    </div>
                    <div class="col-9" style="float: left;padding: unset;"></div>
                    <div class="col-1" style="float: right;position: relative;padding: unset;">

                        <p id="burger">
                            <button class="btn fas fa-bars" type="button" data-toggle="collapse"
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                                id="burger-btn">

                            </button>
                        </p>
                        <div class="collapse dropdown-menu" id="collapseExample"
                            style="position: absolute;top: 80px;left: unset;right: 0px;">
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">關於 Ample Villa</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">最新消息</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">房型一覽</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">服務及設施</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">附近風景</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">線上訂房</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dropdown-item" href="#">會員系統</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


    </nav>
    <main>
        <div id="rent-body">
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
                    <div class="form-group col-md-6">
                        <label for="inputName">姓名</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputID">身份證號碼/護照號碼</label>
                        <input type="password" class="form-control" id="inputID" placeholder="ID/Passport Number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPhone">電話</label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="Phone" oninput="value=value.replace(/[^\d]/g,'')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">信箱</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email@">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAirplane">航班編號</label>
                    <input type="text" class="form-control" id="inputAirplane" placeholder="Flight ID">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="checkintime">入房時間</label>

                        <!-- <input type="datetime-local" name="checkintime" id="timechosen"> -->
                        <input type="datetime-local" class="form-control" id="checkintime"
                            placeholder="2021/07/06 14:00">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="checkouttime">退房時間</label>

                        <input type="datetime-local" class="form-control" name="checkouttime" id="checkouttime">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputDay">入住天數（15天以上請填寫下表）</label>
                        <select id="inputDay" class="form-control">
                            <!-- <option selected>1天</option> -->
                            <!-- <option class="days"></option> -->



                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="people">住宿人數</label>
                        <select id="people" class="form-control">
                            <!-- <option selected>Choose...</option>
                            <option>...</option> -->
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 room">Single Room
                        <div class="row">
                            <div class="col-12">
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
                    <div class="col-3 room">Single Room(Combine with bath/shower)
                        <div class="row">
                            <div class="col-12">
                                <br>

                                <input type="radio" name="single-shower" class="single-shower" value="yes"> Yes
                                <br>
                                <input type="radio" name="single-shower" class="single-shower" value="no"> No


                            </div>
                        </div>

                    </div>
                    <div class="col-3 room">Double Room
                        <div class="row">
                            <div class="col-12">
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

                    <div class="col-3 room">Twin Room
                        <div class="row">
                            <div class="col-12">
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
                </div>
                <br>
                <div class="form-group">
                    <label for="arrivaltime">抵達時間</label>
                    <input type="datetime-local" class="form-control" id="arrivaltime" placeholder="2021/07/06 14:00">
                </div>
                <div class="form-group">
                    <label for="room-class">預定房型</label>
                    <div class="row">
                        <div class="col-12 room-class form-control" style="height: unset;">
                            <div class="row">
                                <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                <div class="room-information">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 room-title" style="padding:unset"><div class="row"><div class="col-6 room-eng">Venus</div>
                                                <div class="col-6" style="padding: unset;">豪華房</div></div></div>
                                                <div class="col-4 peoples">適合人數︰4人</div>
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
                                    <div class="row">
                                        <div class="col-12 delete-line">NT 44192</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 room-price">NT 32795</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row form-row">
                                                <div class="col-8 room-number">訂房數量︰</div>
                                                <div class="col-3">
                                                    <select class="rooms room-number2"></select>

                                                    <!-- <select class="rooms form-control"> -->

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <input type="submit" value="立即預定" class="col-12 rent-now">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 room-class form-control" style="height: unset;">
                            <div class="row">
                                <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                <div class="room-information">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 room-title" style="padding:unset"><div class="row"><div class="col-6 room-eng">Demeter
                                                </div>
                                                <div class="col-6" style="padding: unset;">海景房</div></div></div>
                                                <div class="col-4 peoples">適合人數︰2人</div>
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
                                    <div class="row">
                                        <div class="col-12 delete-line">NT 23586</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 room-price">NT 16441</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row form-row">
                                                <div class="col-8 room-number">訂房數量︰</div>
                                                <div class="col-3">
                                                    <select class="rooms2 room-number2"></select>

                                                    <!-- <select class="rooms form-control"> -->

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <input type="submit" value="立即預定" class="col-12 rent-now">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 room-class form-control" style="height: unset;">
                            <div class="row">
                                <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                <div class="room-information">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 room-title" style="padding:unset"><div class="row"><div class="col-6 room-eng">Epona
                                                </div>
                                                <div class="col-6" style="padding: unset;">雙人房</div></div></div>
                                                <div class="col-4 peoples">適合人數︰2人</div>
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
                                    <div class="row">
                                        <div class="col-12 delete-line">NT 8958</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 room-price">NT 7652</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row form-row">
                                                <div class="col-8 room-number">訂房數量︰</div>
                                                <div class="col-3">
                                                    <select class="rooms3 room-number2"></select>

                                                    <!-- <select class="rooms form-control"> -->

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <input type="submit" value="立即預定" class="col-12 rent-now">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 room-class form-control" style="height: unset;">
                            <div class="row">
                                <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                <div class="room-information">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 room-title" style="padding:unset"><div class="row"><div class="col-6 room-eng">Standard
                                                </div>
                                                <div class="col-6" style="padding: unset;">標準房</div></div></div>
                                                <div class="col-4 peoples">適合人數︰2人</div>
                                            </div>
                                        </div>
                                        <div class="col-12 room-line"></div>
                                        <div class="col-12 room-first" style="padding: unset;">1張大床與1張日式床墊</div>
                                        <div class="col-12 room-first" style="padding: unset;">1間浴室</div>
                                        <div class="col-12 room-first" style="padding: unset;">免費早餐</div>
                                    </div>
                                </div>
                                <div class="room-target">
                                    <div class="row">
                                        <div class="col-12 delete-line">NT 7598</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 room-price">NT 6588</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row form-row">
                                                <div class="col-8 room-number">訂房數量︰</div>
                                                <div class="col-3">
                                                    <select class="rooms4 room-number2"></select>

                                                    <!-- <select class="rooms form-control"> -->

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <input type="submit" value="立即預定" class="col-12 rent-now">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputDay">備註</label>
                        <textarea name="remark" id="remark" class="form-control" cols="30" rows="10" style="font-size: 30px;"></textarea>
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="button" value="回首頁" id="back-index" class="form-control">
                    </div>
                    <div class="col-6"></div>
                    <div class="col-3">
                        <input type="button" value="去付款" id="pay-now" class="form-control">
                    </div>
                </div>

            </form>
        </div>


    </main>



    <script>
        var day = [{ d: '1天' }, { d: '2天' }, { d: '3天' }, { d: '4天' }, { d: '5天' }, { d: '6天' }, { d: '7天' }, { d: '8天' }, { d: '9天' }, { d: '10天' }, { d: '11天' }, { d: '12天' }, { d: '13天' }, { d: '14天' }, { d: '15天' }, { d: '16天' }, { d: '17天' }, { d: '18天' }, { d: '19天' }, { d: '20天' }, { d: '21天' }, { d: '22天' }, { d: '23天' }, { d: '24天' }, { d: '25天' }, { d: '26天' }, { d: '27天' }, { d: '28天' }, { d: '29天' }, { d: '30天' }];
        var days = document.querySelector('#inputDay');
        // console.log(days);
        var str = '';

        for (let index = 0; index < day.length; index++) {
            var content = '<option>' + day[index].d + '</option>';
            // console.log(content);
            str += content;

            days.innerHTML += content;

        }
        var people = document.querySelector('#people');
        var peo = [{ p: '1人' }, { p: '2人' }, { p: '3人' }, { p: '4人' }, { p: '5人' }, { p: '6人' }, { p: '7人' }, { p: '8人' }, { p: '9人' }, { p: '10人' }, { p: '11人' }, { p: '12人' }, { p: '13人' }, { p: '14人' }, { p: '15人' }, { p: '16人' }, { p: '17人' }, { p: '18人' }, { p: '19人' }, { p: '20人' }, { p: '21人' }, { p: '22人' }, { p: '23人' }, { p: '24人' }, { p: '25人' }, { p: '26人' }, { p: '27人' }, { p: '28人' }, { p: '29人' }, { p: '30人' }];
        for (let index = 0; index < peo.length; index++) {
            var person = '<option>' + peo[index].p + '</option>'
            people.innerHTML += person;

        }
        var rooms = document.querySelector('.rooms');
        var room = [{ r: '1間' }, { r: '2間' }, { r: '3間' }, { r: '4間' }];
        for (let index = 0; index < room.length; index++) {
            var roomss = '<option>' + room[index].r + '</option>'
            rooms.innerHTML += roomss;

        }
        var rooms2 = document.querySelector('.rooms2');
        for (let index = 0; index < room.length; index++) {
            var roomss = '<option>' + room[index].r + '</option>'
            rooms2.innerHTML += roomss;

        }
        var rooms3 = document.querySelector('.rooms3');
        for (let index = 0; index < room.length; index++) {
            var roomss = '<option>' + room[index].r + '</option>'
            rooms3.innerHTML += roomss;

        }
        var rooms4 = document.querySelector('.rooms4');
        for (let index = 0; index < room.length; index++) {
            var roomss = '<option>' + room[index].r + '</option>'
            rooms4.innerHTML += roomss;

        }


    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

</html>