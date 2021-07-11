<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ample Villa</title>
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
        nav .col-2 img{
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
        #bannar2{
            padding-top: 90px;
            min-height: 736px;
        }

        /* .bannar{
            height: 60vh;
        } */


        .video-box {
            width: 90%;
            /* height: 90vh; */
            margin: auto;
        }



        #myVideo {
            position: relative;

            width: 100%;
            height: 100%;

            margin: auto;
        }

        #video-logo {
            position: absolute;
            top: 45%;
            text-align: center;




        }

        #video-logo img {
            width: 363px;
            height: 86px;
        }

        #video-text {
            position: absolute;
            top: 60%;
            text-align: center;


        }

        #videoplay {
            width: 100%;
            height: 968px;
        }

        #video-text img {
            width: 640px;
            height: 92px;
        }

        .main2 {
            margin-top: 100px;
            position: relative;
            overflow: hidden;
        }
        .main2 .container2{
          padding-top: 80px;
        }

        #inside-logo {
            margin: unset;
            padding: unset;
            position: absolute;
            right: -9rem;
            bottom: -350px;
            z-index: 3;
        }

        #inside-logo2 {
            margin: unset;
            padding: unset;
            position: absolute;
            right: -7rem;
            top: -400px;
            z-index: 3;
        }

        #news-backgro {
            background-color: rgb(93, 194, 235);
            opacity: 0.8;
            background-image: url(./關於我們-底圖-大.png);
            padding: unset;
            width: 100%;
            height: 1200px;
            position: relative;
            overflow: scroll;
            /* overflow-x: hidden; */
            background-attachment: scroll;

        }

        .main2 #news {
            color: white;
            font-size: 5vw;
            /* font-family: 'Century Schoolbook', sans-serif; */
            font-family: 新細明體;
            position: absolute;
            top: 90px;
            left: 9rem;
            z-index: 1;
            opacity: 0.5;

        }

        .main2 #news-eng {
            color: white;
            font-size: 13vw;
            font-family: 'Century Schoolbook', sans-serif;
            position: absolute;
            top: 150px;
            left: 9rem;
            z-index: 1;
            opacity: 0.5;


        }

        #news-box1,
        #news-box3 {
            padding-top: 240px;
            position: relative;

        }

        #news-box2,
        #news-box4 {
            padding-top: 240px;
            position: relative;
        }



        #news-1,
        #news-3 {
            font-size: 40px;
            color: white;
            font-family: 新細明體;
            text-align: left;
            margin-top: 55vh;
            position: absolute;
            left: 7%;
            z-index: 1;

        }

        #news-2,
        #news-4 {
            font-size: 40px;
            color: white;
            font-family: 新細明體;
            text-align: left;
            margin-top: 55vh;
            position: absolute;
            left: 32%;
            z-index: 1;
        }

        .newspic img {
            width: 100%;
            ;
            height: 70vh;


        }

        #mday,
        #mday2,
        #mday3,
        #mday4 {
            font-family: 'Century Schoolbook', sans-serif;
            font-size: 8rem;
            transform: rotate(90deg);
            position: absolute;
            top: 20rem;
            left: -19rem;
            opacity: 1;
            color: white;
        }

        #arrow {
            margin: unset;
            position: absolute;
            top: 1100px;

        }
        #arrow img{
             width: 107%;height: 50px;

        }

        #arrow:hover {

            transform: scale(1.2);
            transition: 1s;
        }

        #more {
            color: white;
            font-family: 'Century Schoolbook', sans-serif;
            font-size: 4rem;
            margin-left: 60px;

        }

        #getting-here {
            text-align: center;
            color: black;
            font-family: 'Century Schoolbook', sans-serif;
            font-size: 48px;

        }

        #birds {
            position: absolute;
            right: 0px;
            bottom: 0px;
            text-align: right;
        }

        #line {
            height: 5px;
            background-color: rgb(93, 194, 235);
            width: 255px;
            margin: auto;
        }
        .main2 iframe{
            height:900px;

        }

        #map-pic {
            width: 100%;
            height: 600px;
        }

        #focus-us {
            text-align: center;
            font-family: 新細明體;
            font-size: 24px;
            letter-spacing: 6px;
        }



        @media(max-width:576px) {
            nav{
                height: 50px;
            }
            nav .col-2 img{
                width: 107px;
                height: 30px;

            }
            #burger {
                width: 32px;
                height: 17px;
                line-height: unset;
            }
            #burger-btn{
                height: 17px;
                font-size: 20px;
         
            }
            #bannar2{
            padding-top: 50px;
        }
            .bannar2 .container2 {
                width: 100%;
            }

            #videoplay {
                height: calc(100vh - 50px);
                min-height: 736px;
            }

            .bannar2 #video-logo img {
                width: 230px;
                height: 55px;
            }

            .bannar2 #video-text img {
                width: 288px;
                height: 41px;
            }

            .main2 {
                margin: unset;
                
            }
            #news-backgro {
                height: calc(100vh - 50px);
                min-height: 736px;
                overflow-y: hidden;
            }

            #inside-logo {

                right: 5rem;
                bottom: -250px;

            }

            #inside-logo2 {

                right: 5rem;
                top: -400px;

            }

            .main2 #news {

                font-size: 10vw;
                top: 20px;
                left: 25px;

                opacity: 0.5;

            }

            .main2 #news-eng {

                font-size: 23vw;


                top: 80px;
                left: 25px;

                opacity: 0.5;


            }
            .main2 .container2{
                padding: unset;
            }

            /* #news-backgro #news-box1 {
                padding: unset;
                padding-top: 20px;
            } */

            #news-backgro .container2 {
                display: flex;
            }

            .newspic img {
                width: 300px;
                height: 300px;

            }
            .main2 #news ,.main2 #news-eng {
                left: 25px;
                padding: unset;
            }

            #news-1,
            #news-2,
            #news-3,
            #news-4 {
                left: unset;
                left: 4%;
                margin: unset;
                margin-top: 320px;
                padding: unset;
                font-size: 40px;
            margin-top: 315px;
            position: absolute;
            left: 7%;
            font-size: 24px;
            font-weight: 600;


            }

            #news-box1,
            #news-box3,
            #news-box2,
            #news-box4 {
                padding: unset;
                padding-top: 180px;
                display: flex;
                flex-wrap: wrap;
                margin-right: calc(25px + 3rem);
            }
            #arrow{
         
                top: 600px;
                position: absolute;
                left: -50px;

                
                
              
            }
            #arrow img{
                
                width:110%;
                height: 10px;

        }
        #more{
            font-size: 24px;
            margin-left:20px
        }

            #mday,
            #mday2,
            #mday3,
            #mday4 {
                font-size: 3rem;
                top: calc(50vh - 240px);
                left: -6rem;
                z-index: 2;


            }
            #line{
                width: 150px;
            }
            #birds{
                
            right: 200px;
            bottom: 0px;
            z-index: -1;
        

            }
            .main2 .container3{
                width: 100%;
            }
            .main2 iframe{
                height: 576px;
            }
            #map-pic{
                display: none;
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
                        <img src="./img-index/nav-logo.png" >
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
    <div class="bannar2">

        <!-- <div class="video-box">
            <video src="/timg-index/est.mp4" loop autoplay id="myVideo"></video>
            
        </div> -->
        <div class="container2">
            <div class="row" style="position: relative;width: 100%;margin: unset;padding: unset;overflow: hidden;">
                <div class="col-12" style="padding: unset;margin: unset;">
                    <!-- <img alt="gallery" class="w-full object-cover h-full object-center block"
                        src="https://dummyimage.com/501x301" id="videoplay"> -->
                        <video src="./img-index/test.mp4" loop autoplay id="myVideo"></video>    
                        

                </div>
                <!-- <div class="video-box">
                    <video src="./img-index/test.mp4" loop autoplay id="myVideo"></video>
                    
                </div> -->
                <div class="col-12" id="video-logo">
                    <img src="./img-index/影片-logo.png" alt="">
                </div>
                <div class="col-12" id="video-text">
                    <img src="./img-index/影片-文字.png" alt="">
                </div>
                <div class="row" style="padding: unset;margin:unset;">
                    <div class="col-4" id="inside-logo">
                        <img src="./img-index/地圖-指針圖案.png" alt="">
                    </div>
                </div>

            </div>


        </div>
    </div>

    <div class="main2">
        <div class="row" style="padding: unset;margin:unset;">
            <div class="col-4" id="inside-logo2">
                <img src="./img-index/地圖-指針圖案.png" alt="">
            </div>
        </div>
        <div class="row" style="padding: unset;margin: unset;position:relative">
            <div class="col-6" id="news">
                最新消息
            </div>
            <div class="col-6" id="news-eng">NEWS</div>
            <div class="col-12" id="news-backgro">
                <div class="container2" >
                    <div class="row" id="news-box1">
                        <div class="col-xl-9" id="news-1">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="news-box2">

                        <div class="col-xl-9" id="news-2">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday2"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row" id="news-box3">
                        <div class="col-xl-9" id="news-3">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday3"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="news-box4">

                        <div class="col-xl-9" id="news-4">
                            三月是雙魚和牡羊朋友的大日子
                        </div>
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 newspic" style="position: relative;display: flex;"><img alt="gallery"
                                class="w-full object-cover h-full object-center block"
                                src="https://dummyimage.com/501x301">
                            <div class="row">
                                <div class="col-3" style="padding: unset;">
                                    <span id="mday4"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row" style="height: 150px;width: 100%;"></div>





                </div>

            </div>
            <div class="row" id="arrow">
                <div class="col-8">
                    <a href="" style="text-decoration: none;color: white;">
                        <img src="./img-index/內文-指標1.png" alt=""></a>
                </div>
                <div class="col-3" id="more">More</div>

            </div>

        </div>
        <div class="row" style="margin: unset;padding-top: 110px;">
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
        <div class="row" style="position:relative;margin: unset;margin-top: 40px;">
            <div class="container3">
                <div class="col-12" style="padding: unset;background-color: rgb(223, 188, 223);padding: 40px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1806.200026829416!2d121.86017658530668!3d25.122162344672223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625465980639!5m2!1szh-TW!2stw"
                        width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <!-- <iframe src="htimg-index/tps://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14449.620098497267!2d121.8613609!3d25.1219942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625465632875!5m2!1szh-TW!2stw" width="100%" height="900" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                </div>
            </div>
            <div class="col-4" style="position: absolute;top: 600px;left: -8rem;"><img src="./img-index/地圖-指針圖案.png" alt=""
                    id="map-pic"></div>

        </div>
        <div class="row" style="padding-top: 85px;margin: auto;">
            <div class="col-4"></div>
            <div class="col-4" id="focus-us">關注我們

            </div>
        </div>
        <div class="row" style="margin: unset;margin-top: 25px;">
            <div class="col-xl-4 col-md-2 col-1" style="padding: unset;"></div>
            <div class="col-xl-4 col-md-8 col-10" style="padding: unset;">
                <div class="row">
                    <div class="col-4" style="text-align: right;padding: unset;">
                        <img src="./img-index/fb.png" alt="">
                    </div>
                    <div class="col-4" style="text-align: center;padding: unset;"><img src="./img-index/ig.png" alt=""></div>
                    <div class="col-4" style="text-align: left;padding: unset;"><img src="./img-index/email.png" alt=""></div>
                </div>
            </div>
            <!-- <div class="col-4" style="padding: unset;"></div> -->
        </div>
    </div>
    <footer></footer>



    <script>
        var Today = new Date();
        var yy = Today.getFullYear();
        var mm = Today.getMonth() + 1;
        var dd = Today.getDate();
        var h = Today.getHours();
        var m = Today.getMinutes();
        var s = Today.getSeconds();
        // document.getElementById("mday").innerHTML = yy+" "+mm+" "+dd+" ";
        if (mm < 10) {
            if (dd < 10) {
                document.getElementById("mday").innerHTML = yy + ".0" + mm + ".0" + dd;
                document.getElementById("mday2").innerHTML = yy + ".0" + mm + ".0" + dd;
                document.getElementById("mday3").innerHTML = yy + ".0" + mm + ".0" + dd;
                document.getElementById("mday4").innerHTML = yy + ".0" + mm + ".0" + dd;
            }
            else {
                document.getElementById("mday").innerHTML = yy + ".0" + mm + "." + dd;
                document.getElementById("mday2").innerHTML = yy + ".0" + mm + "." + dd;
                document.getElementById("mday3").innerHTML = yy + ".0" + mm + "." + dd;
                document.getElementById("mday4").innerHTML = yy + ".0" + mm + "." + dd;
            }
        } else {
            if (dd < 10) {
                document.getElementById("mday").innerHTML = yy + "." + mm + ".0" + dd;
                document.getElementById("mday2").innerHTML = yy + "." + mm + ".0" + dd;
                document.getElementById("mday3").innerHTML = yy + "." + mm + ".0" + dd;
                document.getElementById("mday4").innerHTML = yy + "." + mm + ".0" + dd;
            }
            else {
                document.getElementById("mday").innerHTML = yy + "." + mm + "." + dd;
                document.getElementById("mday2").innerHTML = yy + "." + mm + "." + dd;
                document.getElementById("mday3").innerHTML = yy + "." + mm + "." + dd;
                document.getElementById("mday4").innerHTML = yy + "." + mm + "." + dd;
            }
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