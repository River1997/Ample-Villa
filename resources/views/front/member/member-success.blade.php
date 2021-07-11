<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://fonts.cdnfonts.com/css/century-schoolbook" rel="stylesheet">
    <link rel="stylesheet" href="css/sample.css">
    <link rel="stylesheet" href="css/member-login.css">
    <link rel="stylesheet" href="css/member-success.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <div class="logo-picture">
                        <img src="./img/nav-logo.png" alt="">
                    </div>
                    <!-- <div class="logo-text">Ample Villa</div> -->
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
                        <li class="burgar-link room"><a href="">線上訂房</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="row m-auto login no-gutters">
            <div class="col  white   ">
                <div class="title ">註冊完成</div>
                <div class="welcome success-pad">歡迎來到 Ample Villa</div>
                <div class="text-1 success-pad">恭喜您完成註冊</div>
                <div class="text-2 success-pad">請到您的信箱啟動驗證信件</div>
                <div class="text-3 success-pad">若您未能收到驗證信件</div>
                <div class="text-4 success-pad">1.請確認電件帳號是否正確</div>
                <div class="text-5 success-pad">2.請確認郵件是否被分到垃圾信件夾內</div>
                <div class="text-6 success-pad">3.請確認完以上兩項內容之後，若人無法收到驗證信件，請嘗試下列的方法</div>
                <div class="text-7 success-padmore "><a href="">重傳郵件</a></div>
                <div class="button-4 ">
                    <a class="btn btn-primary success  " href="#" role="button">回首頁</a>
                </div>
            </div>



            

        </div>

    </main>

    <footer>

        <div class="phone-photo">
            <img src="./img/footer-船-大.png" alt="" class="ship-img-b">
            <img src="./img/footer-船-中.png" alt="" class="ship-img-m">
            <img src="./img/footer-船-小.png" alt="" class="ship-img-s">
        </div>
        <div class="footer-content">
            <div class="text">
                <div class="text-left-1">
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

    <!-- bootstrap js  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
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
<html>