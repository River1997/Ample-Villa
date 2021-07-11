<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完成訂房</title>
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
            border: solid 2px rgb(184, 226, 255);
        }


        main {
            background-color: rgb(184, 226, 255);
            width: 100%;
            min-height: calc(100vh - 100px);
            /* height: 100vh; */
            padding: 200px 100px 100px;
            /* margin-top: 100px; */
            /* padding: calc(10.8vh + 100px) 5.2vw 10.8vh; */
            /* height: 2000px; */

        }

        .container4 {
            width: 81.5%;
            margin: auto;
        }

        #rent-body {
            width: 100%;
            height: 100%;


            background-color: white;
            margin: auto;

        }

        #rent-title {
            font-size: 60px;
            text-align: center;
            font-weight: bold;
            color: rgb(63, 117, 147);
            font-family: 微軟正黑體;
            margin-top: 90px;
        }

        #rent-information {
            font-size: 48px;
            color: rgb(63, 117, 147);
            font-weight: bold;
            font-family: 微軟正黑體;
            margin: 2.2vh 0 3.5vh;
        }

        .room-disc {
            font-family: 微軟正黑體;
            font-size: 24px;
        }
        .rowback{
            justify-content: flex-end;
        }
       
        #back-index {
            width: 100%;
            font-size: 36px;
            font-family: 微軟正黑體;
            font-weight: bold;
            background-color: rgb(138, 185, 223);
            color: white;
            margin: 300px 0 100px 0;
            height: 68px;
        }
        @media(max-width:1272px){
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 170px 70px 70px;
                /* height: 2000px; */

            }
        }
        @media(max-width:960px){
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 160px 60px 60px;
                /* height: 2000px; */

            }
            #back-index {
            /* width: 250px; */
            font-size: 30px;
            font-family: 微軟正黑體;
            font-weight: bold;
            background-color: rgb(138, 185, 223);
            color: white;
            margin: 50px 0 30px 0;
            height: 68px;
        }
        }


        @media(max-width:768px) {
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 160px 60px 60px;
                /* height: 2000px; */

            }



            #rent-body {
                padding: 0px 0px;

            }

            #rent-title {
                font-size: 36pt;
            }





            #rent-information {
                text-align: center;
                font-size: 30pt;
            }
          


        }
        @media(max-width:662px){
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 160px 65px 65px;
                /* height: 2000px; */

            }
            #back-index {
            /* width: 250px; */
            font-size: 30px;
            font-family: 微軟正黑體;
            font-weight: bold;
            background-color: rgb(138, 185, 223);
            color: white;
            margin: 50px 0 0px 0;
            height: 68px;
        }
            
            
        }
        @media(max-width:590px){
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 150px 50px 50px;
                /* height: 2000px; */

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
                               <div class="col-md-4 col-6" style="padding: unset;"> <input type="button" value="回到首頁" id="back-index" class="form-control"><br></div>
                           </div>
                           
                    </div>
                   
                </form>
                




            </div>
        </div>


    </main>






    <script>



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