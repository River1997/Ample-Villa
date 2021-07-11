<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>預訂房型</title>
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


            /* .room-title {
                font-size: 32px;

            } */
            .room-title .col-7{
                line-height: unset;
            }


            .peoples {

                font-size: 20px;

                height: 42px;

                /* margin-top: 18px; */
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
                /* justify-content: space-between; */
            }

            .room-number {
                font-family: 微軟正黑體;
                font-size: 22px;
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
                margin: 5px 0.5rem 5px 1rem;

            }


            .room-title {
                font-size: 32px;

            }


            .peoples {

                font-size: 20px;

                height: 42px;

                /* margin-top: 16px; */
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
            .room-information{
                margin-right: -1rem;
            }
            .room-target{
                width: 28%;
            }

            .room-title {
                font-size: 30px;

            }
            .room-title .col-7{
                line-height: 40px;
            }


            .peoples {

                font-size: 16px;

                height: 36px;

                margin: 0 0 0 -2px;
                
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
                font-size: 28px;

            }


            .peoples {

                font-size: 16px;

                height: 36px;

                /* margin-top: 14px; */
            }

            .room-line {

                margin-top: 0.5%;
            }

            .room-first {
                margin-top: 0.2%;

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
            .room-title{
                font-size: 26px;
            }
            .room-eng{
                letter-spacing: -2px;
            }
            .room-title .col-7{
                line-height: 30px;
            }
            .peoples{
                margin:10px 0 0 -2px
            }
            .room-first{
                margin-top: 0;
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
                font-size: 24px;

            }


            .peoples {

                font-size: 20px;

                height: 32px;

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

                font-size: 30px;
                margin: 2%;

            }

            .number-group {
                margin: unset;
                height: 30px;
                margin-bottom: 2%;
            }

            .room-number {


                font-size: 14px;
                height: 30px;
                line-height: 30px;




            }

            .form-group .room-target .number-group select {
                font-size: 24px;
                height: 35px;
            }

            .room-number2 {
                font-size: 14px;
                margin-top: 0rem;




            }

            .room-number1 select {

                height: 40px;
            }

            .rent-now {

                height: 2.5rem;
                font-size: 26px;

                line-height: 2.5rem;


            }





            #back-index {
                font-size: 28px;

            }

            #pay-now {
                font-size: 28px;

            }
        }

        @media(max-width:1135px) {
            .empty-room {

                font-size: 16px;

                margin: 0% 0 2%;

            }

            .room-price {

                font-size: 26px;
                margin-bottom: 2%;

            }

            .number-group {
                margin: unset;
                height: 30px;
                margin-bottom: 4%;
            }

            .room-number {


                font-size: 14px;
                height: 30px;
                line-height: 30px;




            }

            .room-number2 {
                font-size: 14px;




            }

            .room-number1 select {

                height: 40px;
            }

            .rent-now {

                height: 2.5rem;
                font-size: 26px;

                line-height: 2.5rem;


            }
        }

        @media(max-width:1080px) {
            .empty-room {

                font-size: 16px;

                margin: 0% 0 2%;

            }

            .room-price {

                font-size: 26px;
                margin-bottom: 1%;

            }

            .number-group {
                margin: unset;
                height: 30px;
                margin-bottom: 2%;
            }

            .room-number {


                font-size: 14px;
                height: 30px;
                line-height: 30px;




            }

            .room-number2 {
                font-size: 14px;




            }

            .form-group .room-target input {
                font-size: 24px;
                height: 40px;
            }

            .room-number1 select {

                height: 40px;
            }

            .form-group input {
                font-size: 20px;
            }

            .rent-now {

                height: 1rem;
                /* font-size: 10px; */

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
                font-size: 24px;
                height: 40px;
            }
            .number-group {
                margin: unset;
                height: 30px;
                margin-bottom: 0%;
            }

            .room-number {


                font-size: 14px;
                height: 30px;
                line-height: 30px;




            }

            .room-number2 {
                font-size: 14px;




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
                font-size: 24px;
                margin-top: 15px;
                margin-left: 10px;


            }


            .peoples {

                font-size: 18px;

                height: 32px;

                margin-top: 15px;
            }

            .room-line {

                margin-top: unset;

            }

            .room-first {
                margin-top: 8px;
                margin-left: 10px;
                font-size: 18px;




            }

            .room-target {
                width: 100%;
                padding: 0 10px;
                padding-bottom: 38%;
            }

            .empty-room {

                font-size: 24px; 
                text-align: center;

                margin: 2px 0 1rem 24px;

            }

            .room-price {
               

                font-size: 36px;
                margin-bottom: 1rem;
                margin-left: 24px;

            }

            .form-group .room-target .number-group select {
                font-size: 24px;
                height: 50px;
            }

            .form-group .room-target input {
                font-size: 24px;
                height: 60px;
            }

            .number-group {
                padding: 0;
                /* margin-left: 24px; */
                justify-content: center;
                margin-bottom: 1rem;

            }

            .room-number {
                font-size: 26px;
                text-align: right;
                margin-top: 10px;


                /* margin-left: 10px; */



            }

            .room-number2 {
                font-size: 26px;
                margin-bottom: 6px;


            }

            .rent-now {
                width: 97%;
                margin-left:0.2rem;
            }


            #back-index {
                font-size: 24px;

            }

            #pay-now {
                font-size: 24px;

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
                padding: 140px 40px 40px;
                /* height: 2000px; */

            }

            .form-group label,
            .form-group input,
            .form-group select {
                font-size: 26px;
            }

            #rent-body {
                padding: 40px 34px;

            }
            .peoples{
                font-size: 16px;
            }

            #rent-title {
                font-size: 36px;
            }

            #rent-information {
                text-align: center;
                font-size: 30px;
            }
            .room-target{
                margin-top: 0px;
            }

            .empty-room {

                font-size: 24px;

                margin: 2px 0 0.5rem 24px;

            }

            .room-price {

                font-size: 36px;
                margin-bottom: 0.5rem;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            #back-index {
                font-size: 26px;

            }

            #pay-now {
                font-size: 26px;

            }


        }

        @media(max-width:662px) {
            main {
                background-color: rgb(109, 230, 225);
                width: 100%;
                padding: 130px 30px 30px;
                /* height: 2000px; */

            }
            /* .peoples{
                font-size: ;
            } */

            .form-group label,
            .form-group input,
            .form-group select {
                font-size: 26px;
            }

            #rent-body {
                padding: 40px 20px;

            }

            #rent-title {
                font-size: 36px;
            }

            #rent-information {
                text-align: center;
                font-size: 30px;
            }

            .room-target {
                /* margin-top: 10px; */

                padding-bottom: 52%;
            }

            .empty-room {

                font-size: 24px;

                margin: 2px 0 1rem 24px;

            }

            .room-price {

                font-size: 36px;
                margin-bottom: 1rem;
                margin-left: 24px;

            }


            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            #back-index {
                font-size: 24px;

            }

            #pay-now {
                font-size: 24px;

            }

        }

        @media(max-width:606px) {
            .room-target {

                padding-bottom: 56%;
            }
        }

        @media(max-width:590px) {
            .peoples{
                font-size:15px ;
            }
            .empty-room {

                font-size: 24px;

                margin: 10px 0 0.5rem 24px;

            }

            .room-price {

                font-size: 36px;
                margin: 0.5rem 0;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }


        }

        @media(max-width:575px) {
            .room-title{
                font-size: 24px;
            }
            
            .peoples{
                font-size:18px ;
            }
            .room-target {

                padding-bottom: 60%;
            }

            .empty-room {

                font-size: 24px;

                margin: 0 0 0.4rem 24px;

            }

            .room-price {

                font-size: 36px;
                margin: 0 0 1rem;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }
        }

        @media(max-width:520px) {
            .room-title{
                font-size: 24px;
            }
            
            .peoples{
                font-size:18px ;
            }
            
            .room-target {

                padding-bottom: 67%;
            }

            .empty-room {

                font-size: 24px;

                margin: 0 0 0.4rem 24px;

            }

            .room-price {

                font-size: 36px;
                margin: 15px 0 1rem;
                margin-left: 24px;

            }

            .number-group {
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            #back-index {
                font-size: 20px;

            }

            #pay-now {
                font-size: 20px;

            }

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
                        預訂房型
                    </div>
                </div>
                <br>

                <form>
                    
                    <div class="form-group">
                        
                        <div class="row" style="margin: unset;">
                            
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Venus</div>
                                                            <div class="col-5" style="padding: unset;">豪華房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰4人</div>
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
                                        <div class="row row3" style="margin:unset">
                                            <div class="col-12" style="padding: unset;">
                                                
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 32,795
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <div class="row form-row number-group" style="padding: unset;">
                                                            <div class="col-md-5 col-5 room-number"
                                                                style="padding: unset;">訂房數量︰
                                                            </div>
                                                            <div class="col-md-5 col-6 room-number1"
                                                                style="padding:unset;">
                                                                <select class="rooms room-number2">
                                                                    <option selected></option>
                                                                </select>


                                                                <!-- <select class="rooms form-control"> -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 empty-room" style="padding: unset;">空房數量︰2間
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <input type="submit" value="立即預訂" class="col-12 rent-now"
                                                            style="padding:unset;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="form-group">
                        
                        <div class="row" style="margin: unset;">
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Demeter</div>
                                                            <div class="col-5" style="padding: unset;">海景房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰2人</div>
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
                                        <div class="row row3" style="margin: unset;">
                                            <div class="col-12" style="padding: unset;">
                                                
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 16,441
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <div class="row form-row number-group" style="padding: unset;">
                                                            <div class="col-md-5 col-5 room-number"
                                                                style="padding: unset;">訂房數量︰
                                                            </div>
                                                            <div class="col-md-5 col-6 room-number1"
                                                                style="padding:unset;">
                                                                <select class="rooms2 room-number2">
                                                                    <option selected></option>
                                                                </select>


                                                                <!-- <select class="rooms form-control"> -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 empty-room" style="padding: unset;">空房數量︰2間
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <input type="submit" value="立即預訂" class="col-12 rent-now"
                                                            style="padding:unset;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="form-group">
                        
                        <div class="row" style="margin: unset;">
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Epona</div>
                                                            <div class="col-5" style="padding: unset;">雙人房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰2人</div>
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
                                        <div class="row row3" style="margin: unset;">
                                            <div class="col-12" style="padding: unset;">
                                                
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 7,652
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <div class="row form-row number-group" style="padding: unset;">
                                                            <div class="col-md-5 col-5 room-number"
                                                                style="padding: unset;">訂房數量︰
                                                            </div>
                                                            <div class="col-md-5 col-6 room-number1"
                                                                style="padding:unset;">
                                                                <select class="rooms3 room-number2">
                                                                    <option selected></option>
                                                                </select>


                                                                <!-- <select class="rooms form-control"> -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 empty-room" style="padding: unset;">空房數量︰2間
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <input type="submit" value="立即預訂" class="col-12 rent-now"
                                                            style="padding:unset;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="form-group">
                        
                        <div class="row" style="margin: unset;">
                            <div class="col-12 room-class form-control" style="height: unset;">
                                <div class="row" style="margin: unset;">
                                    <div class="room-pic"><img src="https://dummyimage.com/501x301" alt=""></div>
                                    <div class="room-information">
                                        <div class="row row2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-7 col-6 room-title" style="padding:unset">
                                                        <div class="row">
                                                            <div class="col-6 room-eng">Standard</div>
                                                            <div class="col-5" style="padding: unset;">標準房</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-5 peoples">適合人數︰2人</div>
                                                </div>
                                            </div>
                                            <div class="col-12 room-line"></div>
                                            <div class="col-12 room-first" style="padding: unset;">1張大床與1張日式床墊</div>
                                            <div class="col-12 room-first" style="padding: unset;">1間浴室</div>
                                            <!-- <div class="col-12 room-first" style="padding: unset;">私人泳池</div> -->
                                            <div class="col-12 room-first" style="padding: unset;">免費早餐</div>
                                        </div>
                                    </div>
                                    <div class="room-target">
                                        <div class="row row3" style="margin:unset">
                                            <div class="col-12" style="padding: unset;">
                                                
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 room-price" style="padding: unset;">NT 6,588
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <div class="row form-row number-group" style="padding: unset;">
                                                            <div class="col-md-5 col-5 room-number"
                                                                style="padding: unset;">訂房數量︰
                                                            </div>
                                                            <div class="col-md-5 col-6 room-number1"
                                                                style="padding:unset;">
                                                                <select class="rooms4 room-number2">
                                                                    <option selected></option>
                                                                </select>


                                                                <!-- <select class="rooms form-control"> -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12 empty-room" style="padding: unset;">空房數量︰2間
                                                    </div>

                                                </div>
                                                <div class="row" style="margin: unset;">
                                                    <div class="col-12" style="padding: unset;">
                                                        <input type="submit" value="立即預訂" class="col-12 rent-now"
                                                            style="padding:unset;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="remark">備註</label>
                            <textarea name="remark" id="remark" class="form-control" cols="30" rows="10"
                                style="font-size: 30px;"></textarea>

                        </div>

                    </div>
                    <div class="row" id="paypay">
                        <div class="col-xl-3 col-md-5 col-6">
                            <input type="button" value="回上一頁" id="back-index" class="form-control">
                        </div>
                        <!-- <div class="col-xl-6 col-md-4 col-2"></div> -->
                        <div class="col-xl-3 col-md-5 col-6">
                            <input type="button" value="填寫資料" id="pay-now" class="form-control">
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </main>











    <script>
        // var day = [{ d: '1天' }, { d: '2天' }, { d: '3天' }, { d: '4天' }, { d: '5天' }, { d: '6天' }, { d: '7天' }, { d: '8天' }, { d: '9天' }, { d: '10天' }, { d: '11天' }, { d: '12天' }, { d: '13天' }, { d: '14天' }, { d: '15天' }, { d: '16天' }, { d: '17天' }, { d: '18天' }, { d: '19天' }, { d: '20天' }, { d: '21天' }, { d: '22天' }, { d: '23天' }, { d: '24天' }, { d: '25天' }, { d: '26天' }, { d: '27天' }, { d: '28天' }, { d: '29天' }, { d: '30天' }];
        // var days = document.querySelector('#inputDay');
       
        // var str = '';

        // for (let index = 0; index < day.length; index++) {
        //     var content = '<option>' + day[index].d + '</option>';
            

        //     days.innerHTML += content;

        // }
        // var people = document.querySelector('#people');
        // var peo = [{ p: '1人' }, { p: '2人' }, { p: '3人' }, { p: '4人' }, { p: '5人' }, { p: '6人' }, { p: '7人' }, { p: '8人' }, { p: '9人' }, { p: '10人' }, { p: '11人' }, { p: '12人' }, { p: '13人' }, { p: '14人' }, { p: '15人' }, { p: '16人' }, { p: '17人' }, { p: '18人' }, { p: '19人' }, { p: '20人' }, { p: '21人' }, { p: '22人' }, { p: '23人' }, { p: '24人' }, { p: '25人' }, { p: '26人' }, { p: '27人' }, { p: '28人' }, { p: '29人' }, { p: '30人' }];
        // for (let index = 0; index < peo.length; index++) {
        //     var person = '<option>' + peo[index].p + '</option>'
        //     people.innerHTML += person;

        // }
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