<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://fonts.cdnfonts.com/css/century-schoolbook" rel="stylesheet">

    <style>
        @import url('http://fonts.cdnfonts.com/css/century-schoolbook');

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        /* nav */
        nav {
            width: 100%;

            height: 100px;
            font-size: 46.6px;
            font-family: 'Century Schoolbook', sans-serif;
            color: rgb(184, 226, 255);
            /* background-color: blue */

        }

        nav .container {
            max-width: 1720px;
            height: 100px;
            margin: auto;

        }

        .logo {
            position: relative;
        }

        .logo-picture {
            width: 70px;
            height: 70px;
            float: left;

        }

        .logo-text {
            height: 70px;
            float: left;
            position: absolute;
            top: 8px;
            left: 94px;
        }

        /* 漢堡 */
        .barger {
            float: right;

        }

        label img {
            width: 70px;
            height: 40px;

            transform: translate(316px, 22px);
        }

        input {
            display: none;
        }

        .menu {
            /* display: none; */
            list-style: none;
            margin: unset;
            padding: unset;
            max-height: 0;
            overflow: hidden;
        }

        input:checked~.menu {
            max-height: 800px;
            transition: all 0.5s ease-out;

        }

        .menu li {
            width: 387px;
        }

        .menu a {
            text-decoration: none;
            color: rgb(184, 226, 255);

        }

        .menu .logoin {
            margin-top: 35px;
        }

        .menu .burgar-link {
            margin-bottom: 30px;
            text-align: center;
        }

        .barger img {
            width: 70px;
            height: 40px;
        }

        /* main測試 */
        .p {
            max-width: 1719px;
            height: 968px;
            background-color: turquoise;
            margin: auto;
        }

        /* footer */
        /* footer {
            width: 100vh;
            font-family: 'Century Schoolbook', sans-serif;
        } */

        /* footer-map */
        .footer-map {
            max-width: 1720px;
        }

        .footer-map .text {
            font-size: 70px;
            height: 365px;
            text-align: center;
            line-height: 365px;


            position: relative;
        }

        .footer-map .text::after {
            content: " ";
            position: absolute;
            top: 72%;
            right: 44%;
            width: 200px;
            height: 5px;
            background-color: rgb(184, 226, 255);
            border: 1rpx solid lightgray;
        }

        .seagull {
            position: absolute;
            top: -20px;
            right: 206px;
            transition-delay: 5s;
        }

        .footer-map {

            margin: auto;
            position: relative;
        }

        .footer-map .picture {
            max-width: 1920px;
            height: 870px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-map .picture iframe {
            width: 90%;
            height: 870px;
            border-width: 40px;
            border-color: rgb(247, 241, 231);
            border-style: solid;

            position: absolute;
            top: 0;
            left: calc (50% - 435px);
            /* transform: translate(-50%, 25%);
            border-style:solid; */
        }

        .footer-map .picture .compass {
            position: absolute;
            top: 429px;
            left: -81px;

        }

        .compass img {
            max-width: 600px;
        }

        .footer-map .write {
            font-size: 32px;
            margin-top: 85px;
            text-align: center;
        }

        .footer-map .photo {
            height: 61px;

            margin: 25px 0 88px 0;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .footer-map .photo .middle {
            margin:0 50px 0;

        }

        /* footer-content */

        .footer-content {
            max-width: 1920px;
            height: 395px;
            background-color: rgba(63,117,147,255);
        }

        .footer-content .text {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .text-left {
            display: flex;
            padding-top: 105px;
            padding-left: 100px;
            width: auto;
        }

        .text-left span {
            list-style: none;
            font-size: 22px;
            padding: 0px;
            display: block;

        }

        .text-left span a {
            text-decoration: none;
            color: white;
            width: auto;


        }

        .text-left .ample-villa {
            margin-right: 60px;
        }

        .text-left .item {
            margin-bottom: 27px;
        }

        .text-right {
            display: flex;
            justify-content: flex-end;
            padding-top: 85px;
            padding-right: 150px;
            width: auto;
        }

        .text-right ul {
            list-style: none;
            text-decoration: none;
            font-size: 22px;
            color: white;
            text-align: right;
            margin-right: 50px;
            width: auto;
        }


        .text-right .hotel-name,
        .text-right .phone {
            padding-left: 264px;
            margin-bottom: 27px;
        }

        .text-right {
                padding-right: 50px;

            }

        .copyright{
            position: relative;
        }


        .copyright .textarea {
            font-size: 14px;
            /* position: absolute; */
            /* top: 36px;
            left: 42%; */
            text-align: center;
            color: white;
            margin-top: 50px;
        }

        .copyright::after {
            content: " ";
            position: absolute;
            top: -200%;
            right: 4%;
            width: 90%;
            height: 5px;

            background-color: white;
            border: 1rpx solid lightgray;

            margin-bottom: 10px;
        }

        .phone-photo {
                display: block;
                position: relative;
            }

            .ship-img-b {
                position: absolute;
                right: 410px;
                top: 100px;
            }

            .ship-img-m {
                position: absolute;
                right: 620px;
                top: 20px;
            }

            .ship-img-s {
                position: absolute;
                right: 480px;
                top: -47px;
            }


        @media(max-width: 1008px) {
            .text-left {
                display: block;
                padding-right: 0px;
                padding-bottom: 0px;
                margin-right: 45px;
                position: relative;
            }

            .copyright::after{
                display: none;
            }

            /* .text-left::after {
            content: " ";
            position: absolute;
            top: 110%;
            right: -8%;
            width: 100%;
            height: 5px;

            background-color: white;
            border: 1rpx solid lightgray;

            margin-bottom: 10px;
        } */

            .footer-content {
                display: block;
                background-image: none;
                height: auto;
                background-color: rgba(63, 117, 147, 255);
            }

            .footer-content .text {
                display: block;
                text-align: center;
                color: black;

            }

            .footer-content .text li {
                text-align: center;
                padding: 0;

            }

            .text-right {
                display: block;
                padding: 50px;
            }

            .footer-content {
                height: 800px;
                width: auto;
            }

            .copyright{
                position: relative;
                margin: auto;
                
            }

            .copyright .textarea {
                text-align: center;
                margin-top: 20px;

            }

            .copyright .textarea::after {
            content: " ";
            position: absolute;
            top: -1470%;
            right: 5%;
            width: 88%;
            height: 5px;

            background-color: white;
            border: 1rpx solid lightgray;

            margin-bottom: 10px;
        }

        .copyright .textarea::before {
            content: " ";
            position: absolute;
            top: -180%;
            right: 5%;
            width: 88%;
            height: 5px;

            background-color: white;
            border: 1rpx solid lightgray;

            margin-bottom: 10px;
        }

            .phone-photo {
                display: block;
                position: relative;
            }

            .ship-img-b {
                position: absolute;
                right: 10px;
                top: 150px;
            }

            .ship-img-m {
                position: absolute;
                left: 60px;
                top: 50px;
            }

            .ship-img-s {
                position: absolute;
                right: 130px;
                top: -47px;
            }


        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <div class="logo-picture">
                        <img style="width: 70px;height: 70px;" src="./img/logo.jpg" alt="">
                    </div>
                    <div class="logo-text">Ample Villa</div>
                </div>
                <div class="barger">

                    <label for="burger-menu"><img class="three-line" src="./img/nav-barger.png">
                    </label>
                    <input type="checkbox" id="burger-menu">
                    <ul class="menu">
                        <li class="burgar-link  logoin"><a href="">會員登入/註冊</a></li>
                        <li class="burgar-link"><a href="">關於Ample Villa</a></li>
                        <li class="burgar-link"><a href="">最新消息</a></li>
                        <li class="burgar-link"><a href="">房型一覽</a></li>
                        <li class="burgar-link"><a href="">服務及設施</a></li>
                        <li class="burgar-link"><a href="">附近風景</a></li>
                        <li class="burgar-link"><a href="">線上訂房</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="p"></div>
    </main>

    <footer>
        <div class="footer-map">
            <div class="container">
                <div class="text">
                    Getting Here
                    <div class="seagull"><img src="./img/海鷗.png" alt=""></div>
                </div>
                <div class="picture">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.405025099367!2d121.85917221500794!3d25.121994183931204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d44fecf95855b%3A0x8b917afc400df58b!2sAmple%20Villa!5e0!3m2!1szh-TW!2stw!4v1625459934102!5m2!1szh-TW!2stw"
                        allowfullscreen="" loading="lazy"></iframe>
                    <div class="compass"><img src="./img/地圖-指針圖案.png" alt="" style="max-width:414px;"></div>

                </div>
                <div class="lookme">
                    <div class="write">關注我們</div>
                    <div class="photo">
                        <div class="img"><img src="./img/fb.png" alt=""></div>
                        <div class="img middle"><img src="./img/ig.png" alt=""></div>
                        <div class="img"><img src="./img/email.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="phone-photo">
            <img src="./img/footer-船-大.png" alt="" class="ship-img-b">
            <img src="./img/footer-船-中.png" alt="" class="ship-img-m">
            <img src="./img/footer-船-小.png" alt="" class="ship-img-s">
        </div>
        <div class="footer-content">
            <div class="text">
                <div class="text-left">
                    <div class="ample-villa">
                        <span class="item"><a href="">關於Ample Villa</a></span>
                        <span class="item"><a href="">房型一覽</a></span>
                        <span class="item"><a href="">附近風景</a></span>
                    </div>

                    <div class="ample-villa">
                        <span class="item"><a href="">最新消息</a></span>
                        <span class="item"><a href="">服務及設施</a></span>
                        <span class="item"><a href="">線上訂房</a></span>
                    </div>
                </div>

                <div class="text-right">
                    <ul>
                        <li class="hotel-name">Ample Villa</li>
                        <li class="phone">02 2496 2888</li>
                        <li>224 新北市瑞芳區洞頂路155-9號</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <div class="textarea">Copyright © 2021 有事請燒紙 All rights reserved</div>
            </div>

        </div>
    </footer>

    <script>

        var b = document.querySelector('.three-line')
        var a = document.querySelector('#burger-menu')

        function adv() {
            if (a.checked) {
                b.src = "./img/nav-x.png"
            } else {
                b.src = "./img/nav-barger.png"
            }
        }
        a.addEventListener('change', adv)

    </script>
</body>

</html>