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
    <link rel="stylesheet" href="css/member-profile-2.css">
    
    
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
                <div class="title-1 ">會員專區</div>
                <div class="btn-group-1">
                    <a href="" class="small-button active">會員資料 </a>
                    <a href="" class="small-button">訂房查詢</a>
                    <a href="" class="small-button">聯絡我們</a>
                </div>
                <form class="profile-form " action="">
                    <div class="form-group  ">
                        <label class="word" for="account">帳號</label>
                        <input type="account" style="height: 50px;" class="form-control account" id="account"  >
                    </div>
                    <div class="form-group">
                        <label class="word" for="password">密碼</label>
                        <input type="password" style="height: 50px;" class="form-control password" id="password" >
                    </div>
                    <div class="form-row form-number">
                        <div class="form-group col-sm-4 ">
                          <label class="word" for="internation">國際號碼</label>
                          <select class="form-control internation" style="height: 50px;" id="internation" >
                            <option>台灣(+886)</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-8">
                          <label class="word" for="cellphone">手機號碼</label>
                          <input type="cellphone" style="height: 50px;" class="form-control cellphone" id="cellphone"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="word" for="email">電子信箱</label>
                        <input type="email" style="height: 50px;" class="form-control email" id="email">
                    </div>
                    <div class="form-row  form-number-date">
                        <div class="form-group col-sm-6 ">
                          <label class="word" for="birthday">出生年</label>
                          <select class="form-control birthday" style="height: 50px;" id="birthday">
                            <option>1991年</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-4 ">
                          <label class="word" for="month" >月份</label>
                          <select class="form-control month" style="height: 50px;" id="month">
                            <option>1月</option>
                            <option>2月</option>
                            <option>3月</option>
                            <option>4月</option>
                            <option>5月</option>
                            <option>6月</option>
                            <option>7月</option>
                            <option>8月</option>
                            <option>9月</option>
                            <option>10月</option>
                            <option>11月</option>
                            <option>12月</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-2 ">
                          <label class="word" for="date">日期</label>
                          <select class="form-control date" style="height: 50px;" id="date">
                            <option>1日</option>
                            <option>2日</option>
                            <option>3日</option>
                            <option>4日</option>
                            <option>5日</option>
                            <option>6日</option>
                            <option>7日</option>
                            <option>8日</option>
                            <option>9日</option>
                            <option>10日</option>
                            <option>11日</option>
                            <option>12日</option>
                            <option>13日</option>
                            <option>14日</option>
                            <option>15日</option>
                            <option>16日</option>
                            <option>17日</option>
                            <option>18日</option>
                            <option>19日</option>
                            <option>20日</option>
                            <option>21日</option>
                            <option>22日</option>
                            <option>23日</option>
                            <option>24日</option>
                            <option>25日</option>
                            <option>26日</option>
                            <option>27日</option>
                            <option>28日</option>
                            <option>29日</option>
                            <option>30日</option>
                            <option>31日</option>

                          </select>
                        </div>
                    </div>
                 
                </form>
                <div class="button-5  ">
                    <a class="btn btn-primary  profile-size profile-1 word " href="#" role="button">取消編輯</a>
                    <a class="btn btn-primary  profile-size profile-2 word " href="#" role="button">確認送出</a>
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
        var box1 = document.querySelector('.small-button')
        // console.log(box1);
        function adv() {
            if (a.checked) {
                b.src = "./img/nav-x.png"
            } else {
                b.src = "./img/nav-barger.png"
            }
        }
        a.addEventListener('change', adv)


        box1.onclick = function(){
            
            if ( box1.classList.contains('checked')) {
                box1.classList.remove('checked')
            }else{
                box1.classList.add('checked')
            }
        } 

    </script>
</body>

</html>
<html>