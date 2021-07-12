<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服務及設施</title>
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
            width: 90%;
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

        .rowjustify {
            justify-content: space-between;
        }

        .discriptforservice {
            height: 1150px;
            width: 600px;
        }

        .rowhight {
            height: 550px;
            position: relative;
            justify-content: center;
        }

        .textforservice {
            font-size: 72px;
            color: rgb(138, 185, 223);
            font-family: 微軟正黑體;
            writing-mode: vertical-lr;
            text-decoration: overline;

        }

        .textforservice:nth-child(1) {
            position: absolute;
            bottom: 13%;
            left: 27%;





        }

        .textforservice:nth-child(2) {
            position: absolute;
            bottom: 40%;






        }

        .textforservice:nth-child(3) {
            position: absolute;
            bottom: 55%;
            left: 57%;





        }

        .textforservice2 {
            font-size: 26px;
            font-family: 微軟正黑體;
        }

        .picforsevice {
            height: 1150px;
            width: 1000px;
            /* background-color: blue; */
            justify-content: flex-end;
            position: relative;
        }

        .pic1 img {
            width: 80%;
            height: 550px;
            position: absolute;
            top: 0;
            right: 0;

        }

        .pic2 img {
            width: 40%;
            height: 650px;
            position: absolute;
            left: 0;
            top: calc(50% - 250px);
        }

        .pic3 img {
            width: 42%;
            height: 420px;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .detailforservice {
            margin-top: 180px;
            position: relative;
            width: 100%;


        }

        .pic4 img {
            width: 73%;
            height: 720px;
        }

        .detailforservice .pictable {
            width: 1420px;
            height: 850px;
            z-index: 3;
            background-color: white;
            position: absolute;
            right: 0;
            top: 30.5%;
            display: flex;
            justify-content: space-between;


        }

        .posi {
            width: 100%;
            height: 100%;
            position: relative;
        }

        #wehave {
            width: 620px;
            height: 185px;
            font-size: 121px;
            color: rgb(138, 185, 223);
            text-align: center;
            /* text-decoration: underline; */
            font-family: 'Century Schoolbook', sans-serif;
            transform: rotate(270deg);
            position: absolute;
            border-bottom: 5px solid rgb(138, 185, 223);
            left: calc(-37% + 310px);
            top: calc(50% - 92.5px);

        }

        #servicebox {
            width:1104px;
            height: 540px;
            position: absolute;
            right: 0px;
            top: 70px;
        }
        
        .formargin{
            padding:30px 50px 0 0;
        }
        .formargin .row:hover{
            box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .25);
    transform: translate(0,-5px);
    transition-delay: 0s !important;
 
    /* transition: all .2s ease-in-out; */
        }

        .textimg {
            display: flex;
            justify-content: center;
        }

        .textimg img {
            width: 150px;
            height: 150px;
        }

        .sertext {
            font-size: 30px;
            text-align: center;
        }

        .detailforservice .piactableblue {
            width: 1420px;
            height: 850px;
            z-index: 1;
            background-color: rgb(138, 185, 223);
            position: absolute;
            right: 50px;
            top: calc(30.5% + 50px);

        }
        .textimg img {
            width: 130px;
            height: 130px;
        }

        .pic5 img {
            width: 100%;
            height: 720px;
            opacity: 0.3;
        }
        @media(max-width:1435px){
            .detailforservice .pictable {
            width: 1220px;
            height: 850px;
            z-index: 3;
            background-color: white;
            position: absolute;
            right: 0;
            top: 30.5%;
            display: flex;
            justify-content: space-between;


        }
        .detailforservice .piactableblue {
            width: 1220px;
            height: 850px;
            z-index: 1;
            background-color: rgb(138, 185, 223);
            position: absolute;
            right: 50px;
            top: calc(30.5% + 50px);

        }
            #servicebox {
            width:904px;
            height: 540px;
            position: absolute;
            right: 0px;
            top: 130px;
        }


        }
        @media(max-width:1170px){
            #wehave {
            width: 600px;
            height: 160px;
            font-size: 100px;
            color: rgb(138, 185, 223);
            text-align: center;
            /* text-decoration: underline; */
            font-family: 'Century Schoolbook', sans-serif;
            transform: rotate(270deg);
            position: absolute;
            border-bottom: 5px solid rgb(138, 185, 223);
            left: calc(-37% + 100px);
            top: calc(50% - 92.5px);

        }
        .detailforservice .pictable {
            width: 900px;
            height: 850px;
            z-index: 3;
            background-color: white;
            position: absolute;
            right: 0;
            top: 30.5%;
            display: flex;
            justify-content: space-between;


        }
        .detailforservice .piactableblue {
            width: 900px;
            height: 850px;
            z-index: 1;
            background-color: rgb(138, 185, 223);
            position: absolute;
            right: 50px;
            top: calc(30.5% + 50px);

        }
        .sertext {
            font-size: 18px;
            text-align: center;
        }
            #servicebox {
            width:704px;
            height: 540px;
            position: absolute;
            right: 0px;
            top: 150px;
        }
        .textimg img {
            width: 100px;
            height: 100px;
        }
            
        }
        @media(max-width:962px){
            #wehave {
            width: 580px;
            height: 140px;
            font-size: 90px;
            color: rgb(138, 185, 223);
            text-align: center;
            /* text-decoration: underline; */
            font-family: 'Century Schoolbook', sans-serif;
            transform: rotate(270deg);
            position: absolute;
            border-bottom: 5px solid rgb(138, 185, 223);
            left: calc(-37% + 80px);
            top: calc(50% - 92.5px);

        }
        .detailforservice .pictable {
            width:700px;
            height: 850px;
            z-index: 3;
            background-color: white;
            position: absolute;
            right: 0;
            top: 30.5%;
            display: flex;
            justify-content: space-between;


        }
        .detailforservice .piactableblue {
            width: 700px;
            height: 850px;
            z-index: 1;
            background-color: rgb(138, 185, 223);
            position: absolute;
            right: 50px;
            top: calc(30.5% + 50px);

        }
            #servicebox {
            width:504px;
            height: 540px;
            position: absolute;
            right: 0px;
            top: 180px;
        }
        .textimg img {
            width: 70px;
            height: 70px;
        }
            

        }
        @media(max-width:768px){
            .textforservice {
            font-size: 36px;
            color: rgb(138, 185, 223);
            font-family: 微軟正黑體;
            writing-mode: vertical-lr;
            text-decoration: overline;

        }
        .rowhight{
            height: 150px;
        }
            .textforservice:nth-child(1) {
            position: absolute;
            top: 20px;
            left: 27%;
            bottom: unset;





        }

        .textforservice:nth-child(2) {
            position: absolute;
            top: 37px;
            bottom: unset;






        }

        .textforservice:nth-child(3) {
            position: absolute;
            top: 20px;
            left: 57%;
            bottom: unset;





        }
        .textforservice2 {
            font-size: 24px;
            font-family: 微軟正黑體;
        }
        .rowjustify {
           flex-wrap: wrap;
        }

        .discriptforservice {
            height: 440px;
            width: 100%;
        }
        .picforsevice {
            height: 450px;
            width: 100%;
            /* background-color: blue; */
            justify-content: flex-end;
            position: relative;
        }

        .pic1 img {
            width: 80%;
            height: 206px;
            position: absolute;
            top: 0;
            right: 0;

        }

        .pic2 img {
            width: 38.4%;
            height: 250px;
            position: absolute;
            left: 0;
            top: calc(50% - 130px);
        }

        .pic3 img {
            width: 42.66%;
            height: 160px;
            position: absolute;
            bottom: 0;
            right: 0;
        }
        .detailforservice {
            margin-top: 50px;
            position: relative;
            width: 100%;


        }
        .pic4 img {
            width: 74%;
            height: 262px;
        }
        #wehave {
            width: 500px;
            height: 60px;
            font-size: 35px;
            color: rgb(138, 185, 223);
            text-align: center;
            /* text-decoration: underline; */
            font-family: 'Century Schoolbook', sans-serif;
            transform: rotate(270deg);
            position: absolute;
            border-bottom: 3px solid rgb(138, 185, 223);
            left: calc(-37% - 0px);
            top: 35%;

        }
       
        .detailforservice .pictable {
            width:82.6%;
            height: 930px;
            z-index: 3;
            background-color: white;
            position: absolute;
            right: 0;
            top: 15.5%;
            display: flex;
            justify-content: space-between;


        }
        .detailforservice .piactableblue {
            width: 82.6%;
            height: 930px;
            z-index: 1;
            background-color: rgb(138, 185, 223);
            position: absolute;
            right: 25px;
            top: calc(15.5% + 25px);

        }
            #servicebox {
            width:80%;
            height: 540px;
            position: absolute;
            right: 0px;
            top: 50px;
        }
        .textimg img {
            width: 70px;
            height: 70px;
        }
        .sertext {
            font-size: 18px;
            text-align: center;
        }
        .formargin{
            padding:11px 9px 0 0;
        }
            

        }
        .pic5 img {
            width: 100%;
            height: 868px;
            opacity: 0.3;
        }
        @media(max-width:540px){
            #wehave{
                left: calc(-37% - 50px);
                
            }
        }
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
    <main style="padding-top: 100px;">
        <div class="row" style="margin:unset;">
            <div class="container2">
                <div class="row" style="margin: unset;">
                    <div class="col-12 rowjustify" style="padding: unset; display: flex;">
                        <div class="discriptforservice">
                            <div class="row" style="margin: unset;">

                                <div class="col-12" style="padding:unset;">
                                    <div class="row rowhight" style="margin: unset;">
                                        <div class="col-2 textforservice" style="padding: unset;">設施</div>
                                        <div class="col-2 textforservice" style="padding: unset;">及</div>
                                        <div class="col-2 textforservice" style="padding: unset;">服務</div>
                                    </div>
                                </div>

                                <div class="col-12" style="padding: unset;">
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textforservice2" style="padding: unset;">
                                            所有房間都能享受到免費&nbsp;&nbsp;&nbsp;&nbsp; Wi-Fi。每日客房清潔服務、壁爐、私人登記入住 /
                                            退房的服務等一系列頂級設施。</div>
                                        <div class="col-12" style="padding: unset;height: 26px;"></div>
                                        <div class="col-12 textforservice2" style="padding: unset;">水湳洞 Ample Villa 有 4
                                            間客房，每間客房都裝修考究，大多配有額外浴室、額外洗手間、空氣淨化機。已鋪地毯、清潔用品等頂級設備。酒店各種娛樂設施讓您在入住期間享受更多樂趣。
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="picforsevice">
                            <div class="pic1">
                                <img src="./img-服務及設施/ample玻璃屋.jpg" alt="">
                            </div>
                            <div class="pic2"><img src="./img-服務及設施/ample長桌.jpg" alt=""></div>
                            <div class="pic3"><img src="./img-服務及設施/ample腳踏車.jpg" alt=""></div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
        <div class="row" style="margin: unset;">
            <div class="col-12 detailforservice" style="padding: unset;">
                <div class="pic4"><img src="./img-服務及設施/ample高往低看的玻璃屋.jpg" alt=""></div>
                <div class="pictable">

                    <div class="col-12 posi" style="padding: unset;">
                        <div id="wehave">We Have</div>
                        <div id="servicebox">
                            <div class="row servicecho" style="margin: unset;">
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-Wi-Fi.png" alt="" style="padding-bottom: 15px;">

                                        </div>
                                        
                                        <div class="col-12 sertext" style="padding: unset;">
                                            Wi-Fi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-按摩浴缸.png" alt="" style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            按摩浴缸
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-吹風機.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            吹風機
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-沐浴用品.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            沐浴用品
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-額外洗手間.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            額外洗手間
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-空調.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            空調
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-煙霧感測器.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            煙霧感測器
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-休息區.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            休息區
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-迷你巴台.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            迷你巴台
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-免費樽裝水.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            免費樽裝水
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-沖調設備.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            沖調設備
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 formargin" >
                                    <div class="row" style="margin: unset;">
                                        <div class="col-12 textimg" style="padding: unset;">
                                            <img src="./img-服務及設施/服務及設施-電話.png" alt=""  style="padding-bottom: 15px;">

                                        </div>
                                        <div class="col-12 sertext" style="padding: unset;">
                                            電話
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="piactableblue"></div>
                <div class="pic5"><img src="./img-服務及設施/底圖.jpg" alt=""></div>
            </div>

        </div>
    </main>












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