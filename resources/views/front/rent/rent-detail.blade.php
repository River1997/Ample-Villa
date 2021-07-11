<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上訂房明細</title>
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
        .rdobutton_label {
            position: relative;
            display: block;
            width: 40px;
            height: 40px;
            cursor: pointer;
            border: 5px solid rgb(138, 185, 223);
            border-radius: 100%;
            -moz-transition: background-color 0.2s ease-in;
            -webkit-transition: background-color 0.2s ease-in;
            -o-transition: background-color 0.2s ease-in;
            transition: background-color 0.2s ease-in;
        }

        .rdobutton_label::before {
            content: "";
            position: absolute;
            top: 12%;
            left: 13%;
            width: 22px;
            height: 22px;
            background-color: rgb(138, 185, 223);
            border-radius: 100%;
            opacity: 0;
            -moz-transition: opacity 0.2s ease-in;
            -webkit-transition: opacity 0.2s ease-in;
            -o-transition: opacity 0.2s ease-in;
            transition: opacity 0.2s ease-in;
        }

        input:checked+.rdobutton_label {
            background-color: white;
        }

        .rdobutton_radio:checked+.rdobutton_label::before {
            opacity: 1;
        }

        .rdobutton_radio {
            display: none;
        }

        /* .bot {
            position: relative;
            line-height: 30px;
        }

        .bot input[type="radio"] {
            width: 20px;
            height: 20px;
            opacity: 0;
        }

        .bot label {
            position: absolute;
            left: 5px;
            top: 3px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #999;
        }

        .bot input:checked+label {
            background-color: #0b83a1;
            
            border: 1px solid white 10px;
            cursor: pointer;
           
        }

        .bot input:checked+label::after {
            position: absolute;
            content: "";
            width: 5px;
            height: 10px;
            top: 3px;
            left: 6px;
            border: 2px solid #fff;
            border-top: none;
            border-left: none;
            transform: rotate(45deg)
        } */




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
            padding: calc(10.8vh + 100px) 5.2vw 10.8vh;
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

        .form-group label {
            font-family: 微軟正黑體;
            font-size: 26px;

        }
        .day .form-control{
            padding: unset;
            padding:0 .75rem
        }


        .form-group input,
        .form-group select {
            font-size: 24px;
            height: 50px;
        }

        .col-xl-6 .form-control,
        .col-lg-6 .form-control {
            width: 96%;
        }

        .pass1 label,
        .pass1 input,
        .pass1 select {
            margin-left: 5%;


        }

        .pass2 label,
        .pass2 input,
        .pass2 select {
            margin-left: 5%;


        }

        .pass3 label,
        .pass3 input,
        .pass3 select {
            margin-left: 5%;


        }

        .pass4 label,
        .pass4 input,
        .pass4 select {
            margin-left: 5%;


        }
        #arrivaltime{
            font-family: 微軟正黑體;
            font-size: 20px;
       
        }



        .room {
            text-align: left;
            font-size: 24px;
            font-family: 微軟正黑體;

        }

        .room input {
            font-size: 150%;
        }

        .room-class {

            border: solid 2px rgb(109, 230, 225);

        }

        .room-pic {
            width: 22%;
            height: 0px;
            position: relative;
            padding-bottom: 22%;

            margin: 5px 0 5px 0px;


        }

        .room-pic img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* min-height: 200px; */
        }

        .room-information {
            margin: 5px 0 5px 2rem;
            width: 48%;
            height: 0px;
            font-family: 微軟正黑體;
            position: relative;
            padding-bottom: 22%;

        }

        .room-information .row2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .room-title {
            font-size: 36px;
            font-family: 微軟正黑體;
            /* font-weight: bolder; */
        }

        .room-eng {
            
            letter-spacing: -5px;
        }
        .room-title .col-7{
            text-align: center;
        }

        .peoples {
            background-color: rgb(138, 185, 223);
            color: white;
            font-size: 24px;
            text-align: center;
            height: 50px;
            font-family: 微軟正黑體;
            margin: 0 0 0 -20px;
        }

        .room-line {
            width: 100%;
            height: 4px;
            background-color: rgb(138, 185, 223);
            margin-top: 0.5%;

        }

        .room-first {
            margin-top: 0.5%;
            font-family: 微軟正黑體;
            font-size: 24px;
            font-weight: bold;



        }

        
        .room-target {
            line-height: 40px;
            width: 27%;
            /* margin-right: 3px; */
            position: relative;
            padding-bottom: 22%;

        }

        .room-target .row3 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .empty-room {
            /* text-decoration: line-through; */
            font-size: 24px;
            /* font-weight: 600; */
            margin-bottom: 8%;
            font-family: 微軟正黑體;
        }

        .room-price {
            color: rgb(193, 39, 45);
            font-weight: bold;
            letter-spacing: -5px;
            font-size: 48px;
            margin:8% 0;
            font-family: 微軟正黑體;
        }


        .number-group {
            width: 100%;
            
        }

        .room-number {
            font-family: 微軟正黑體;
            font-size: 26px;
            width: 100%;
            margin-bottom: 8%;
            letter-spacing: -2px;
            /* margin-bottom: 7%;
           
            margin-right: -15px; */


        }
        .room-number1 select{
            border: solid rgb(184, 226, 255);
            font-size: 22px;
        }

        .room-number2 {
            font-family: 微軟正黑體;
            font-size: 24px;
            height: 50px;
            line-height: 42px;
            border: solid black 2px;
            width: 100%;

        }


        .rent-now {
            width: 100%;
            text-align: center;
            height: 68px;
            font-size: 48px;
            font-weight: bold;
            font-family: 微軟正黑體;
            line-height: 3rem;
            background-color: rgb(138, 185, 223);
            color: white;
            border: unset;

        }

        #remark{
            height: 300px;
        }


        .paybox {
            margin: 50px 0 0 0;
        }

        .payword {
            margin: 0 0 0 1rem;
            font-size: 26px;
            font-family: 微軟正黑體;
            /* font-weight: bold; */
            width: 100%;
        }

        .discript-for-pay {

            font-size: 26px;
            /* font-weight: bold; */
            font-family: 微軟正黑體;
            margin: 2rem 0 3rem;
            color: rgb(193, 39, 45);

        }

        .card-type {
            margin: 2rem 0 2rem 0;
        }

        .card-type2 {
            margin: 2rem 0 0 0;
        }

        .card-type .col-md-4 label {
            margin: 0 1rem 0 0;
        }

        .form-group .creditcard {
            font-size: 26px;
            font-family: 微軟正黑體;
            /* font-weight: bold; */
            width: 100%;


        }




        #paypay {
            justify-content: space-between;
            padding-bottom: 5vh;
            margin-top: 100px;
        }

        #back-index {
            font-size: 36px;
            font-family: 微軟正黑體;
            color: rgb(138, 185, 223);
            font-weight: bold;

            /* min-width: 320px; */
        }

        #pay-now {
            font-size: 36px;
            font-family: 微軟正黑體;
            font-weight: bold;
            background-color: rgb(138, 185, 223);
            color: white;

            /* min-width: 320px; */
        }

        @media(max-width:1779px) {
            .room-information {
                margin: 5px 1rem 5px;

            }


            .room-title {
                font-size: 32px;

            }


            .peoples {

                font-size: 20px;

                height: 42px;

                margin-top: 8px;
            }

            .room-line {

                margin-top: 0.5%;
            }

            .room-first {
                margin-top: 0.5%;

                font-size: 20px;




            }

            .empty-room {
                /* text-decoration: line-through; */
                font-size: 24px;
                /* font-weight: 600; */
                margin: 4% 0;
                font-family: 微軟正黑體;
            }

            .room-price {


                font-size: 50px;
                margin-bottom: 6%;
                font-family: 微軟正黑體;
            }

            .number-group {
                width: 100%;
                justify-content: space-between;
            }

            .room-number {
                font-family: 微軟正黑體;
                font-size: 2rem;
                width: 100%;
                line-height: 60px;
                margin-bottom: 2%;
                letter-spacing: 0em;
                /* margin-bottom: 7%;
           
            margin-right: -15px; */


            }

            .form-group .room-target .number-group select {
                font-size: 24px;
                height: 40px;
            }

            .room-number2 {
                font-family: 微軟正黑體;
                font-size: 24px;
                height: 40px;
                line-height: 40px;
                border: solid black 2px;
                width: 100%;
                margin-top: 0.5rem;

            }

        }

        @media(max-width:1653px) {
            .room-information {
                margin: 5px 1rem 5px;

            }


            .room-title {
                font-size: 32px;

            }


            .peoples {

                font-size: 20px;

                height: 42px;

                margin-top: 8px;
            }

            .room-line {

                margin-top: 0.5%;
            }

            .room-first {
                margin-top: 0.5%;

                font-size: 20px;




            }




            #back-index {
                font-size: 40px;


            }

            #pay-now {
                font-size: 40px;

            }

            .empty-room {

                font-size: 18px;

                margin: 1% 0;

            }

            .room-price {

                font-size: 36px;
                margin-bottom: 1%;

            }

            .number-group {
                margin-bottom: 1%;
            }

            .room-number {

                font-size: 20px;





            }

            .room-number2 {
                font-size: 20px;



            }

            .rent-now {

                height: 3.5rem;
                font-size: 32px;

                line-height: 3.5rem;


            }

        }

        @media(max-width:1500px) {

            .room-title {
                font-size: 28px;

            }


            .peoples {

                font-size: 16px;

                height: 36px;

                margin-top: 6px;
            }

            .room-line {

                margin-top: 0.5%;
            }

            .room-first {
                margin-top: 0.5%;

                font-size: 18px;




            }

            .empty-room {

                font-size: 18px;

                margin: 1% 0;

            }

            .room-price {

                font-size: 36px;
                margin-bottom: 1%;

            }

            .number-group {
                margin-bottom: 1%;
            }

            .room-number {

                font-size: 20px;





            }

            .room-number2 {
                font-size: 20px;



            }

            .rent-now {

                height: 3.5rem;
                font-size: 32px;

                line-height: 3.5rem;


            }


            /* .rent-now {

                height: 4rem;
                font-size: 36px;

                line-height: 4rem;


            } */

        }

        @media(max-width:1400px) {
            .room-title {
                font-size: 22px;

            }


            .peoples {

                font-size: 16px;

                height: 36px;

                margin-top: 6px;
            }

            .room-line {

                margin-top: 0.5%;
            }

            .room-first {
                margin-top: 0.5%;

                font-size: 18px;




            }

            .empty-room {

                font-size: 18px;

                margin: 1% 0 3%;

            }

            .room-price {

                font-size: 36px;
                margin: 3% 0%;

            }

            .number-group {
                margin-bottom: -4%;
            }

            .room-number {

                font-size: 18px;
                margin: unset
            }

            .room-number2 {
                font-size: 20px;



            }

            .rent-now {

                height: 3.5rem;
                font-size: 32px;

                line-height: 3.5rem;


            }




            #back-index {
                font-size: 34px;


            }

            #pay-now {
                font-size: 34px;

            }
        }

        @media(max-width:1272px) {
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 170px 70px 70px;
                /* height: 2000px; */

            }
            .container4 {
                width: 99%;
            }

            .form-group label,
            .form-group input,
            .form-group select {
                font-size: 26px;
            }

            #rent-body {
                padding: 60px 80px;

            }


            #rent-title {
                font-size: 60px;
            }

            #rent-information {
                text-align: center;
                font-size: 48px;
            }

            #back-index {
                font-size: 32px;

            }

            #pay-now {
                font-size: 32px;

            }


        }

        @media(max-width:1199px) {
            #rent-title {
                margin-top: 0vh;
            }

            #rent-information {
                margin: 0vh 0 2vh;
            }

            #rent-body {
                padding: 40px 50px;

            }

            .col-xl-6 .form-control {
                width: 100%;
            }

            .pass1 label,
            .pass1 input,
            .pass1 select {
                margin-left: unset;



            }

            .pass2 label,
            .pass2 input,
            .pass2 select {
                margin-left: unset;


            }


            .room-pic {
                width: 22%;
                margin: 2px 0 2px 10px;

            }

            .room {
                /* display: flex; */
                margin-top: 20px;
                font-size: 20px;
            }

            .room-radio {
                justify-content: flex-start;
                /* width: 25%; */

                display: flex;
                margin-top: 20px;
                /* position: absolute;
                right: 0rem; */
            }

            .room-radio input {
                margin-left: 2rem;


            }

            .room .col-12 {
                padding: unset;
            }

            .room-number {
                font-size: 16px;
            }

            .room-title {
                font-size: 22px;

            }


            .peoples {

                font-size: 12px;

                height: 28px;

                margin-top: 8px;
            }

            .room-line {

                margin-top: 0.05%;
            }

            .room-first {
                margin-top: 0.05%;

                font-size: 16px;




            }

            .empty-room {

                font-size: 16px;

                margin: 0% 0 2%;

            }

            .room-price {

                font-size: 26pt;
                margin: 2%;

            }

            .number-group {
                margin: unset;
                height: 30pt;
                margin-bottom: 2%;
            }

            .room-number {


                font-size: 14pt;
                height: 30pt;
                line-height: 30pt;




            }

            .form-group .room-target .number-group select {
                font-size: 24pt;
                height: 35px;
            }

            .room-number2 {
                font-size: 14pt;
                margin-top: 0rem;




            }

            .room-number1 select {

                height: 40px;
            }

            .rent-now {

                height: 2.5rem;
                font-size: 26pt;

                line-height: 2.5rem;


            }





            #back-index {
                font-size: 28pt;

            }

            #pay-now {
                font-size: 28pt;

            }
        }

        @media(max-width:1135px) {
            .empty-room {

                font-size: 16pt;

                margin: 0% 0 2%;

            }

            .room-price {

                font-size: 26pt;
                margin-bottom: 2%;

            }

            .number-group {
                margin: unset;
                height: 30pt;
                margin-bottom: 4%;
            }

            .room-number {


                font-size: 14pt;
                height: 30pt;
                line-height: 30pt;




            }

            .room-number2 {
                font-size: 14pt;




            }

            .room-number1 select {

                height: 40px;
            }

            .rent-now {

                height: 2.5rem;
                font-size: 26pt;

                line-height: 2.5rem;


            }
        }

        @media(max-width:1080px) {
            .empty-room {

                font-size: 16pt;

                margin: 0% 0 2%;

            }

            .room-price {

                font-size: 26pt;
                margin-bottom: 1%;

            }

            .number-group {
                margin: unset;
                height: 30pt;
                margin-bottom: 2%;
            }

            .room-number {


                font-size: 14pt;
                height: 30pt;
                line-height: 30pt;




            }

            .room-number2 {
                font-size: 14pt;




            }

            .form-group .room-target input {
                font-size: 24pt;
                height: 40px;
            }

            .room-number1 select {

                height: 40px;
            }

            .form-group input {
                font-size: 20pt;
            }

            .rent-now {

                height: 1rem;
                /* font-size: 10pt; */

                line-height: 1rem;


            }
        }

        @media(max-width:991px) {
            .col-lg-6 .form-control {
                width: 100%;
            }

            .pass3 label,
            .pass3 input,
            .pass3 select {
                margin-left: unset;



            }

            .pass4 label,
            .pass4 input,
            .pass4 select {
                margin-left: unset;



            }

            .room-target {
                line-height: 40px;
            }

            .form-group .room-target .number-group {
                height: 40px;
            }

            .form-group .room-target input {
                font-size: 24pt;
                height: 40px;
            }

            .number-group {
                margin: unset;
                height: 30pt;
                margin-bottom: 0%;
            }

            .room-number {


                font-size: 14pt;
                height: 30pt;
                line-height: 30pt;




            }

            .room-number2 {
                font-size: 14pt;




            }




        }

        @media(max-width:960px) {
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 160px 60px 60px;
                /* height: 2000px; */

            }
            .room-pic {
                width: 100%;
                margin: 5px 10px;
                padding-bottom: 100%;

            }


            .room-information {
                width: 100%;
                padding-bottom: 50%;


            }

            .room-title {
                font-size: 24pt;
                margin-left: 10px;


            }


            .peoples {

                font-size: 18pt;

                height: 36px;

                margin-top: 8px;
            }

            .room-line {

                margin-top: 12px;

            }

            .room-first {
                margin-top: 8px;
                margin-left: 10px;
                font-size: 18pt;




            }

            .room-target {
                width: 100%;
                padding: 0 10px;
                padding-bottom: 38%;
            }

            .empty-room {

                font-size: 24pt;
                text-align: center;

                margin: 2px 0 1rem 24px;

            }

            .room-price {


                font-size: 36pt;
                margin-bottom: 1rem;
                margin-left: 24px;

            }

            .form-group .room-target .number-group select {
                font-size: 24pt;
                height: 50px;
            }

            .form-group .room-target input {
                font-size: 24pt;
                height: 60px;
            }

            .number-group {
                padding: 0;
                /* margin-left: 24px; */
                justify-content: center;
                margin-bottom: 1rem;

            }

            .room-number {
                font-size: 26pt;
                text-align: right;


                /* margin-left: 10px; */



            }

            .room-number2 {
                font-size: 26pt;
                margin-bottom: 6px;


            }

            .rent-now {
                width: 97%;
                margin-left: 24px;
            }


            #back-index {
                font-size: 24pt;

            }

            #pay-now {
                font-size: 24pt;

            }


        }

        @media(max-width:867px) {
            .room-target {

                padding-bottom: 42%;
            }
        }

        @media(max-width:808px) {

            .room-target {

                padding-bottom: 46%;
            }
        }

        @media(max-width:768px) {
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 150px 50px 50px;
                /* height: 2000px; */

            }

            .form-group label,
            .form-group input,
            .form-group select {
                font-size: 26pt;
            }

            #rent-body {
                padding: 40px 34px;

            }

            #rent-title {
                font-size: 36pt;
            }

            .peoples {
                font-size: 16pt;
            }

         

            #rent-information {
                text-align: center;
                font-size: 30pt;
            }

            .empty-room {

                font-size: 24pt;

                margin: 2px 0 0.5rem 24px;

            }

            .room-price {

                font-size: 36pt;
                margin-bottom: 0.5rem;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            .card-type .col-md-4:nth-child(2) {
                justify-content: flex-start;
            }

            .card-type .col-md-4:nth-child(2) {
                justify-content: center;
            }

            .card-type .col-md-4:nth-child(3) {
                justify-content: flex-end;
            }

            #back-index {
                font-size: 26pt;

            }

            #pay-now {
                font-size: 26pt;

            }


        }

        @media(max-width:662px) {
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 130px 30px 30px;
                /* height: 2000px; */

            }

            .rdobutton_label {
                position: relative;
                display: block;
                width: 25px;
                height: 25px;
                cursor: pointer;
                border: 3px solid rgb(138, 185, 223);
                border-radius: 100%;
                -moz-transition: background-color 0.2s ease-in;
                -webkit-transition: background-color 0.2s ease-in;
                -o-transition: background-color 0.2s ease-in;
                transition: background-color 0.2s ease-in;
            }

            .rdobutton_label::before {
                content: "";
                position: absolute;
                top: 8.15%;
                left: 7%;
                width: 16px;
                height: 16px;
                background-color: rgb(138, 185, 223);
                border-radius: 100%;
                opacity: 0;
                -moz-transition: opacity 0.2s ease-in;
                -webkit-transition: opacity 0.2s ease-in;
                -o-transition: opacity 0.2s ease-in;
                transition: opacity 0.2s ease-in;
            }

            input:checked+.rdobutton_label {
                background-color: white;
            }

            .rdobutton_radio:checked+.rdobutton_label::before {
                opacity: 1;
            }

            .rdobutton_radio {
                display: none;
            }

            /* .peoples{
                font-size: ;
            } */

            .form-group label,
            .form-group input,
            .form-group select {
                font-size: 26pt;
            }

            #rent-body {
                padding: 20px 20px;

            }

            #rent-title {
                font-size: 36pt;
            }

            #rent-information {
                text-align: center;
                font-size: 30pt;
            }

            .form-group label {
                font-size: 24pt;
            }

            .form-group input {
                font-size: 21pt;
            }

            .room-target {

                padding-bottom: 52%;
            }

            .empty-room {

                font-size: 24pt;

                margin: 2px 0 1rem 24px;

            }

            .room-price {

                font-size: 36pt;
                margin-bottom: 1rem;
                margin-left: 24px;

            }


            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            .spare-line {
                margin: 50px 0;
            }
            .forrwd{
                position: absolute;
                left: -40px;
            }

            .payword {
                font-size: 24pt;
                font-weight: unset;
            }

            #payway {
                font-size: 30pt;
                text-align: center;
                margin: 0 0 10px;
            }

            .paybox {
                margin: 10px 0 0 0;
            }

            .discript-for-pay {
                font-weight: 500;
                /* position:absolute;
                left: 0; */

            }

            .form-group .creditcard {
                font-size: 24pt;
                font-weight: unset;

            }
            #paypay{
                margin-top: 1220px;
                padding-bottom: unset;
                margin-bottom: 0px;
            }
            .card-type2 {
    margin: 0rem 0 0 0;
}



            #back-index {
                font-size: 24pt;

            }

            #pay-now {
                font-size: 24pt;

            }

        }

        @media(max-width:606px) {
            .room-target {

                padding-bottom: 56%;
            }
        }

        @media(max-width:590px) {
            .peoples {
                font-size: 15pt;
            }

            .empty-room {

                font-size: 24pt;

                margin: 10px 0 0.5rem 24px;

            }

            .room-price {

                font-size: 36pt;
                margin: 1rem 0;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }


        }

        @media(max-width:575px) {
            .room-title {
                font-size: 18pt;
            }

            .room-eng {
                letter-spacing: -0.1px;
            }

            .peoples {
                font-size: 12pt;
            }

            .room-target {

                padding-bottom: 80%;
            }

            .empty-room {

                font-size: 24pt;

                margin: 0 0 0.4rem 24px;

            }

            .card-type .col-md-4 label {
                margin: unset;
            }

            .room-price {

                font-size: 36pt;
                margin: 20% 0 1rem;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }
        }

        @media(max-width:520px) {
            .room-title {
                font-size: 20pt;
            }

            .room-eng {
                letter-spacing: -0.1px;
            }

            .peoples {
                font-size: 14pt;
            }

            .room-target {

                padding-bottom: 95%;
            }

            .empty-room {

                font-size: 24pt;

                margin: 0 0 0.4rem 24px;

            }

            .room-price {

                font-size: 36pt;
                margin: 30% 0 1rem;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            #back-index {
                font-size: 20pt;

            }

            #pay-now {
                font-size: 20pt;

            }

        }

        


        /* .rdobutton_radio{
  width: 25px;
  height: 25px;
} */



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
                        線上訂房明細
                    </div>
                </div>
                <br>

                <form>
                    <div class="form-row">
                        <div class="form-group col-xl-6 col-12">
                            <label for="inputName">姓名</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name" readonly>
                        </div>
                        <div class="form-group col-xl-6 col-12 pass1">
                            <label for="inputID">身份證號碼/護照號碼</label>
                            <input type="password" class="form-control" id="inputID" placeholder="ID/Passport Number"
                                readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-xl-6 col-12">
                            <label for="inputPhone">電話</label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="Phone"
                                oninput="value=value.replace(/[^\d]/g,'')" readonly>
                        </div>
                        <div class="form-group col-xl-6 col-12 pass2">
                            <label for="inputEmail">信箱</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email@" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAirplane">航班編號</label>
                        <input type="text" class="form-control" id="inputAirplane" placeholder="0000-0000-0000"
                            readonly>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 col-12">
                            <label for="checkintime">入房時間</label>

                            <!-- <input type="datetime-local" name="checkintime" id="timechosen"> -->
                            <input type="datetime-local" class="form-control" id="checkintime"
                                placeholder="2021/07/06 14:00" readonly>
                        </div>
                        <div class="form-group col-lg-6 col-12 pass3">
                            <label for="checkouttime">退房時間</label>

                            <input type="datetime-local" class="form-control" name="checkouttime" id="checkouttime"
                                readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 day">
                            <label for="inputDay">入住天數</label>
                            <input type="text" class="form-control" id="inputDay" placeholder="2"
                                oninput="value=value.replace(/[^\d]/g,'')" readonly>
                            <!-- <select id="inputDay" class="form-control" >
                                <option selected></option>
                              



                            </select> -->
                        </div>
                        <div class="form-group col-lg-6 pass4 day">
                            <label for="people">住宿人數</label>
                            <input type="text" class="form-control" id="people" placeholder="4"
                                oninput="value=value.replace(/[^\d]/g,'')" readonly>
                            <!-- <select id="people" class="form-control">
                                <option selected></option>
                               
                            </select> -->
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="arrivaltime">抵達時間</label>
                        <input type="text" class="form-control" id="arrivaltime" placeholder="2021/07/06 14:00"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="rentroom">預訂房型</label>
                        <input type="text" class="form-control" id="rentroom" placeholder="Venus 豪華房" readonly>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-xl-6 col-12">
                            <label for="count">數量</label>
                            <input type="text" class="form-control" id="count" placeholder="1"
                                oninput="value=value.replace(/[^\d]/g,'')" readonly>
                        </div>
                        <div class="form-group col-xl-6 col-12 pass2">
                            <label for="money">價錢</label>
                            <input type="email" class="form-control" id="money" placeholder="NT $32,795" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="remark">備註</label>
                            <textarea name="remark" id="remark" class="form-control" cols="30" rows="10"
                                style="font-size: 30px;" readonly placeholder="我們會開車抵達"></textarea>

                        </div>

                    </div>
                    <div class="form-row">

                        <div class="col-12 spare-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-12" id="payway">
                            付款方式
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 paybox" style="display: flex;">
                            <input type="radio" name="payway" id="pay-at-time" class="rdobutton_radio">
                            <label for="pay-at-time" class="rdobutton_label"></label>
                            <div class="payword">現場付款</div>
                        </div>
                        <div class="col-12 paybox" style="display: flex;">
                            <input type="radio" name="payway" id="pay-online" class="rdobutton_radio">
                            <label for="pay-online" class="rdobutton_label"></label>
                            <div class="payword" style="position:relative">網路信用卡付款
                                <div class="row forrwd" style="margin: unset;">
                                    <div class="col-12" style="padding: unset;">
                                        <div class="discript-for-pay">
                                            說明:本站採用SSL線上安全收款機制，目前接受VISA、MasterCard、JCB，若您使用其他位用卡，請使用傳真授權書支付訂購金額。</div>
                                        <div class="row">
                                            <div class="col-12">信用卡別:</div>
                                        </div>
                                        <div class="row card-type">
    
                                            <div class="col-xl-6 col-12">
                                                <div class="row">
                                                    <div class="col-md-4 col-4" style="display: flex;padding: unset;"><input
                                                            type="radio" name="paycard" id="pay-visa"
                                                            class="rdobutton_radio">
                                                        <label for="pay-visa" class="rdobutton_label"></label>
                                                        <div class="payword2">VISA</div>
                                                    </div>
                                                    <div class="col-md-4 col-5" style="display: flex;padding: unset;"><input
                                                            type="radio" name="paycard" id="pay-master"
                                                            class="rdobutton_radio">
                                                        <label for="pay-master" class="rdobutton_label"></label>
                                                        <div class="payword2">Master</div>
                                                    </div>
                                                    <div class="col-md-4 col-3" style="display: flex;padding: unset;"><input
                                                            type="radio" name="paycard" id="pay-jcb"
                                                            class="rdobutton_radio">
                                                        <label for="pay-jcb" class="rdobutton_label"></label>
                                                        <div class="payword2">JCB</div>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-xl-6 col-12">
                                                <label for="credit-card" class="creditcard">信用卡號</label>
                                                <input type="text" class="form-control" id="credit-card">
                                            </div>
                                            <div class="form-group col-xl-6 col-12 pass1">
                                                <label for="last3num" class="creditcard">請輸入信用卡背後末3碼驗証</label>
                                                <input type="text" class="form-control" id="last3num">
                                            </div>
                                        </div>
                                        <div class="form-row card-type2">
                                            <div class="form-group col-xl-6 col-12">
    
                                                <label for="credit-time" class="creditcard">卡片效期(ex:4月16日)</label>
                                                <div class="row" id="credit-time">
                                                    <div class="col-5" style="padding: unset;padding-left: 15px;">
                                                        <input type="text" class="form-control" id="card-month">
    
                                                    </div>
                                                    <div class="col-1" style="padding: unset;">月</div>
                                                    <div class="col-5" style="padding: unset;">
                                                        <input type="text" class="form-control" id="card-day">
                                                    </div>
                                                    <div class="col-1" style="padding: unset;">日</div>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-12 pass1">
                                                <label for="readypay" class="creditcard">付款金額</label>
                                                <input type="text" class="form-control" id="readypay" readonly
                                                    placeholder="NT$32,795">
                                            </div>
                                        </div>
                                        <div class="form-row card-type2">
                                            <div class="form-group col-xl-6 col-12">
                                                <label for="card-master" class="creditcard">持卡人</label>
                                                <input type="text" class="form-control" id="card-master">
                                            </div>
                                            <div class="form-group col-xl-6 col-12 pass1">
                                                <label for="master-phone" class="creditcard">持卡人電話</label>
                                                <input type="text" class="form-control" id="master-phone"
                                                    oninput="value=value.replace(/[^\d]/g,'')">
                                            </div>
                                        </div>
                                        <div class="form-group card-type2">
                                            <label for="master-ID" class="creditcard">持卡人身份證號(外國人請輸入*後再輸入護照號碼)</label>
                                            <input type="text" class="form-control" id="master-ID">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="row" id="paypay">
                        <div class="col-xl-3 col-md-5 col-6">
                            <input type="button" value="回上一頁" id="back-index" class="form-control">
                        </div>
                        <!-- <div class="col-xl-6 col-md-4 col-2"></div> -->
                        <div class="col-xl-3 col-md-5 col-6">
                            <input type="button" value="確認付款" id="pay-now" class="form-control">
                        </div>
                    </div>

                </form>


            </div>
        </div>


    </main>
    <!-- <div class="rdobutton">
        <input class="rdobutton_radio" type="radio" id="radioId" name="radioname" value="0"  >
        <label class="rdobutton_label" for="radioId"></label>

        <input class="rdobutton_radio" type="radio" id="radioId2" name="radioname" value="1" />
        <label class="rdobutton_label" for="radioId2"></label>
    </div> -->







    <script>
        var day = [{ d: '1天' }, { d: '2天' }, { d: '3天' }, { d: '4天' }, { d: '5天' }, { d: '6天' }, { d: '7天' }, { d: '8天' }, { d: '9天' }, { d: '10天' }, { d: '11天' }, { d: '12天' }, { d: '13天' }, { d: '14天' }, { d: '15天' }, { d: '16天' }, { d: '17天' }, { d: '18天' }, { d: '19天' }, { d: '20天' }, { d: '21天' }, { d: '22天' }, { d: '23天' }, { d: '24天' }, { d: '25天' }, { d: '26天' }, { d: '27天' }, { d: '28天' }, { d: '29天' }, { d: '30天' }];
        var days = document.querySelector('#inputDay');
        // console.log(days);
        var str = '';

        for (let index = 0; index < day.length; index++) {
            var content = '<option>' + day[index].d + '</option>';
            // console.log(content);
            // str += content;

            days.innerHTML += content;

        }
        var people = document.querySelector('#people');
        var peo = [{ p: '1人' }, { p: '2人' }, { p: '3人' }, { p: '4人' }, { p: '5人' }, { p: '6人' }, { p: '7人' }, { p: '8人' }, { p: '9人' }, { p: '10人' }, { p: '11人' }, { p: '12人' }, { p: '13人' }, { p: '14人' }, { p: '15人' }, { p: '16人' }, { p: '17人' }, { p: '18人' }, { p: '19人' }, { p: '20人' }, { p: '21人' }, { p: '22人' }, { p: '23人' }, { p: '24人' }, { p: '25人' }, { p: '26人' }, { p: '27人' }, { p: '28人' }, { p: '29人' }, { p: '30人' }];
        for (let index = 0; index < peo.length; index++) {
            var person = '<option>' + peo[index].p + '</option>'
            people.innerHTML += person;

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