<?php
    session_start();
    require('connect.php');
    include("functions.php");
    $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsychoToday</title>
   
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
	  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<style>
 html {
    scroll-behavior: smooth;
}
:root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
    
    *{
        text-decoration:none; 
        list-style:none; 
        margin:0px; 
        padding:0px; 
        outline:none;
      
    }

    body{
        margin:0px;
        padding:0px; 
        font-family: 'Open Sans', sans-serif;
    }

    section{
        width:100%; 
        max-width:1200px; 
        margin:0px auto; 
        display:table; 
        position:relative;
    }

    h1{
        margin:0px auto;
        display:table; 
        font-size:26px; 
        padding:40px 0px; 
        color:#002e5b; 
        
    }

    h1 span{
        font-weight:500;
    }

    header{
        width:100%;
        display:table; 
        background-color:whitesmoke; 
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom:px;
    }

    #logo{
        float:left; 
        font-size:24px; 
        text-transform:uppercase; 
        color:#002e5b; 
        font-weight:600; 
        padding:20px 0px;
    }

    nav{
        width:auto; 
        float:right;
    }

    nav ul{
        display:table; 
        float:right;
    }

    nav ul li{
        float:left;
    }

    nav ul li:last-child{
        padding-right:0px;
    }

    nav ul li a{
        color:#002e5b; 
        font-size:18px; 
        padding: 25px 20px; 
        display:inline-block; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a:hover{
        background-color:#002e5b; 
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a:hover i{
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a i{
        padding-right:10px; 
        color:#002e5b; 
        transition: all 0.5s ease 0s;
    }

    .toggle-menu ul{
        display:table; 
        width:25px;
    }

    .toggle-menu ul li{
        width:100%; 
        height:3px; 
        background-color:#002e5b; 
        margin-bottom:4px;
    }

    .toggle-menu ul li:last-child{
        margin-bottom:0px;
    }

    input[type=checkbox], label{
        display:none;
    }

    .content{
        display:table; 
        margin-bottom:60px; 
        width:900px;
    }

    .content h2{
        font-size:18px; 
        font-weight:500; 
        color:#002e5b; 
        border-bottom:1px solid whitesmoke;
        display:table; 
        padding-bottom:10px; 
        margin-bottom:10px;
    }

    .content p{
        font-size:14px; 
        line-height:22px; 
        color:#7c7c7c; 
        text-align:justify;
    }

    footer{
        display:table;
        padding-bottom:30px;
        width:100%;
    }
    
    .social{
        margin:0px auto; 
        display:table; 
        display:table;
    }

    .social li{
        float:left; 
        padding:0px 10px;
    }

    .social li a{
        color:#002e5b; 
        transition: all 0.5s ease 0s;
    }

    .social li a:hover{
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

    @media only screen and (max-width: 1440px) {
        section{max-width:95%;}
    }

    @media only screen and (max-width: 1250px) {
        header{
            padding:20px 0px;
        }

        #logo{
            padding:0px;
        }

        input[type=checkbox] {
            position: absolute; 
            top: -9999px; 
            left: -9999px; 
            background:none;
        }

        input[type=checkbox]:fous{
            background:none;
        }

        label {
            float:right; 
            padding:8px 0px; 
            display:inline-block; 
            cursor:pointer; 
        }

        input[type=checkbox]:checked ~ nav {
            display:block;
        }

        nav{
            display:none; 
            position:absolute; 
            right:0px; top:53px; 
            background-color:#002e5b;
            padding:0px; 
            z-index:99;
        }

        nav ul{
            width:auto;
        }

        nav ul li{
            float:none; 
            padding:0px;
            width:100%; 
            display:table;
        }

        nav ul li a{
            color:#FFF; 
            font-size:15px; 
            padding:10px 20px; 
            display:block; 
            border-bottom: 1px solid rgba(225,225,225,0.1);
        }
        nav ul li a div{
            color:#FFF; 
            font-size:15px; 
            padding:10px 20px; 
            display:block; 
            border-bottom: 1px solid rgba(225,225,225,0.1);
        }

        nav ul li a i{
            color:whitesmoke;
            padding-right:13px;
        }
    }

    @media only screen and (max-width: 980px) {
        .content{width:90%;}
    }

    @media only screen and (max-width: 568px) {
        h1{padding:25px 0px;}
        h1 span{display:block;}
    }

    @media only screen and (max-width: 480px) {
        section {max-width: 90%;}
    }

    @media only screen and (max-width: 360px) {
        h1{font-size:20px;}
        label{padding:5px 0px;}
        #logo{font-size: 20px;}
        nav{top:47px;}
    }

    @media only screen and (max-width: 320px) {
        h1 {padding: 20px 0px;}
    }

    
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black !important;
        padding: 12px 26px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown-content>a:hover {background-color: white;}

    nav ul a div{
        float:left;
    }

    nav ul li a div{
        color:#002e5b; 
        font-size:18px; 
        padding: 25px 20px; 
        display:inline-block; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a:hover{
        background-color:#002e5b; 
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }



    .gradient-back {
    background: linear-gradient(130deg, #8008e1, #ecb710);
    background-size: 400% 400%;

    -webkit-animation: AnimationName 4s ease infinite;
    -moz-animation: AnimationName 4s ease infinite;
    animation: AnimationName 4s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:13% 0%}
    50%{background-position:88% 100%}
    100%{background-position:13% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:13% 0%}
    50%{background-position:88% 100%}
    100%{background-position:13% 0%}
}
@keyframes AnimationName { 
    0%{background-position:13% 0%}
    50%{background-position:88% 100%}
    100%{background-position:13% 0%}
}

@media (max-width: 700px) {
    .gradient {
        display: none;
    }
}

</style>

<body>



<!--==================================HEADER=====================================-->

<header>
        <section>
            
            <a href="Main.php" id="logo">PsychoToday</a>
    
            <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
            <input type="checkbox" id="toggle-1">
    
                <nav>
                    <ul>
                        
                        <li><a href="Psychology.php" >Психология</a></li>
                        <li><a href="NewsPageNEW.php">Статьи</a></li>
                        <li><a href="Test.php" >Тесты</a></li>
                        <li><a href="BooksPageNEW.php" >Книги</a></li>
                        <li><a href="Lifehack.php" >Советы</a></li>
                        <li><a href="Relax/MainCalm.html" >Релакс</a></li>
                        <li class="dropdown">
                            <a class="dropbtn">                           
                                Глоссарий
                                <div class="dropdown-content">
                                    <a href="Glossary.php" style="font-size:12px;">Словарь основных психологических терминов</a>
                                    <a href="Glossary2.php" style="font-size:12px;">Глоссарий психических заболеваний</a>
                                    <a href="Glossary3.php" style="font-size:12px;">Глоссарий нервных заболеваний</a>
                                </div>
                            </a>
                        </li>
                        <li><a href="Contacts.php" >Контакты</a></li>
                        <li class="dropdown">
                            <?php

                                if(isset($_SESSION['user_id']))
                                {
                                    print "<a class='dropbtn'>";
                                    print $user_data['username'];
                                    print "<div class='dropdown-content'>
                                    <a href='profile.php' style='font-size:12px;'>Профиль</a>
                                    <a href='logout.php' style='font-size:12px;'>Выйти</a>
                                    </div>
                                </a>";

                                } else {
                                    print "<a class='dropbtn'>Вход
                                    <div class='dropdown-content'>
                                        <a href='login.php' style='font-size:12px;'>Войти</a>
                                        <a href='register.php' style='font-size:12px;'>Регистрация</a>
                                    </div>
                                </a>";
                                }


                            ?>
                            
                        </li>
                        
                    </ul>
                </nav>
        </header>
    
    </section>
    
   <div class="flex bg-white" style="height:700px;">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">PSYCHO<span class="text-indigo-600">TODAY</span></h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">Здоровый Разум - здоровое Тело</p>
                    <div class="flex justify-center lg:justify-start mt-6">
                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#aboutUs">Начнем</a>
                        
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover gradient-back">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>

     

    <!-----------------------------------------H E A D E R------------------------------------------->

           
    <!-----------------------------------------A B O U T  U S------------------------------------------->

    <div class="px-4 py-16 mx-auto sm:max-w-xl sm:text-center md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 hideme" id="aboutUs">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              PsychoToday
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            О нас
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            Данный сайт предлагает вам разные виды источников, например как: новости о психологии, книги, термины психологических слов, разные лайфхаки для души, а также список психологов которые могут вам помочь
          </p>
        </div>
        <div class="grid gap-8 row-gap-10 lg:grid-cols-2">
          <div class="max-w-md sm:mx-auto sm:text-center">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-600 sm:mx-auto sm:w-24 sm:h-24">
              
            </div>
            <h6 class="mb-3 text-xl font-bold leading-5"> <a href="#tests">Тесты</a></h6>
            <p class="mb-3 text-sm text-gray-900">
              Узнайте себя чуточку глубже пройдя наши тесты
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800"></a>
          </div>
          <div class="max-w-md sm:mx-auto sm:text-center">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-pink-300 sm:mx-auto sm:w-24 sm:h-24">
              
            </div>
            <h6 class="mb-3 text-xl font-bold leading-5"><a href="#tips">Советы</a></h6>
            <p class="mb-3 text-sm text-gray-900">
              Зарядитесь мотвацией на весь день
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800"></a>
          </div>
          <div class="max-w-md sm:mx-auto sm:text-center">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-blue-300 sm:mx-auto sm:w-24 sm:h-24">
              
            </div>
            <h6 class="mb-3 text-xl font-bold leading-5"><a href="#news">Статьи</a></h6>
            <p class="mb-3 text-sm text-gray-900">
              Будьте в курсе событии из мира психологии
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800"></a>
          </div>
          <div class="max-w-md sm:mx-auto sm:text-center">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-yellow-300 sm:mx-auto sm:w-24 sm:h-24">
              
            </div>
            <h6 class="mb-3 text-xl font-bold leading-5"><a href="#books">Книги</a></h6>
            <p class="mb-3 text-sm text-gray-900">
              Посетите нашу библиотеку и прочтите работы экспертов
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800"></a>
          </div>
        </div>
      </div>

      <!-----------------------------------------A B O U T  U S------------------------------------------->


            
      <!-----------------------------------------T E S T S------------------------------------------->

      <div class="box-content justify-center item-center w-11/12 p-4 border-4 border-purple-400 rounded-xl  bg-purple-400 lg:ml-10 hideme" style="padding-bottom: 150px; padding-top: 100px; justify-content: center;" id="tests">

        <h1 class="text-6xl text-center text-white" style="padding-bottom: 50px;">Тесты</h1>


        <div class="bg-white p-2  sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none">
          <div style="background: url('https://images.unsplash.com/photo-1528459709161-157d86910939?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1016&q=80'); " class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"></div>
          <div class="flex sm:flex-1 flex-col gap-2 p-1">
              <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
                Депрессия
              </h1>
              <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
              Вы, наверняка, задаетесь вопросом: «Если у тебя депрессия, что делать?»
              </p>
              <div class="flex gap-4 mt-auto">
              
              <a href="./tests/main_test1.html"><button class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"></path></svg>
                  <span>Больше</span>
              </button></a>
              <button class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
              <a href="./tests/test1.html"><span>Пройти</span></a>
              </button>
              </div>
          </div>
      </div>
<br>
<div class="bg-white p-2  sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none">
  <div
      style='background: url("https://images.unsplash.com/photo-1583444012262-00185bf33cc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=668&q=80")'
      class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
  ></div>
  <div class="flex sm:flex-1 flex-col gap-2 p-1">
    <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
    Темперамент
  </h1>
  <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
  Темперамент – это врожденная характеристика, основанная на таких свойствах нервной системы, как сила, подвижность и уравновешенность. Он неизменный в течение всей жизни.
  </p>
      <div class="flex gap-4 mt-auto">
        
        <a href="./tests/main_test2.html"><button class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"></path></svg>
            <span>Больше</span>
        </button></a>
        <button class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
          <a href="./tests/test2.html"><span>Пройти</span></a>
        </button>
        </div>
  </div>
</div>

<br>

<div class="bg-white p-2  sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none">
  <div
      style='background: url("https://images.unsplash.com/photo-1516060267783-f090cad05ac8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80")'
      class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
  ></div>
  <div class="flex sm:flex-1 flex-col gap-2 p-1">
    <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
    Межличностные отношения
  </h1>
  <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
  Качественный анализ полученных данных проводится путем сравнения дискограмм, демонстрирующих различие между представлениями разных людей.
  </p>
      <div class="flex gap-4 mt-auto">
        
         <a href='./tests/main_test4.html'><button class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"></path></svg>
            <span>Больше</span>
        </button></a>
        <button class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
        <a href="./tests/test4.html"><span>Пройти</span></a>
        </button>
        </div>
  </div>
</div>

<br>

<div class="bg-white p-2  sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none">
  <div
      style='background: url("https://images.unsplash.com/photo-1619000372803-7a8927682747?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80")'
      class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
  ></div>
  <div class="flex sm:flex-1 flex-col gap-2 p-1">
    <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
    Эмоциональная направленность
  </h1>
  <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
  Методика измеряет общую эмоциональную направленность личности. По данной методике можно изучить эмоциональную направленность, узнать каковы установки и в какой области деятельности можно получить положительные эмоции.
  </p>
      <div class="flex gap-4 mt-auto">
        
        <a href="./tests/main_test5.html"><button class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"></path></svg>
            <span>Больше</span>
        </button></a>
        <button class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
        <a href="./tests/test5.html"><span>Пройти</span></a>
        </button>
        </div>
  </div>
</div>

<br>

<div class="bg-white p-2  sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none">
  <div
      style='background: url("https://images.unsplash.com/photo-1484581400079-58a319a15a2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=676&q=80")'
      class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
  ></div>
  <div class="flex sm:flex-1 flex-col gap-2 p-1">
    <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
    Фрустрация 
  </h1>
  <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
  Каждый ответ оценивается с точки зрения двух критериев: направления реакции и типа реакции.
  </p>
      <div class="flex gap-4 mt-auto">

        <a href="./tests/thirdpage.html"><button class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"></path></svg>
            <span>Больше</span>
        </button></a>
         <button class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
          <a href="./tests/test3.html"><span>Пройти</span></a>
        </button>
        </div>
  </div>
</div>
</div>

    <!-----------------------------------------T E S T S------------------------------------------->
      
     




    <!-----------------------------------------T I P S------------------------------------------->

    <div class="antialiased sans-serif text-gray-600" id="tips">
        <div class="my-10 md:my-24 container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden border-4" x-data="{ testimonialActive: 2 }" x-cloak>
            <div class="relative w-full py-2 md:py-24 bg-indigo-700 md:w-1/2 flex flex-col item-center justify-center">
              
              <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>
              
              <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
                <span class="md:block">Мотивация</span>
                <span class="md-block"></span>
                <span class="block">Дня</span>
              </div>
      
              <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
                <button 
                  class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
                  x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                  &#8592;
                </button><button 
                  class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
                  x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                  &#8594;
                  </button>
              </div>
            </div>
      
            <div class="bg-gray-100 md:w-1/2">
              <div class="flex flex-col h-full relative">
      
                <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                  <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24"><path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z"/></svg>
                </div>
                 
                <div class="h-full relative z-10">
                  <div x-show.immediate="testimonialActive === 1">
                    <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                      «Не ноша тянет вас вниз, а то, как вы ее несете», — Говард Трумэн.
                      <br>
                      «Возможности не приходят сами — вы создаете их», — Крис Гроссер.
                      <br>
                      «Лучший способ взяться за что-то — перестать говорить и начать делать». — Уолт Дисней
                      <br>
                    </p>
                  </div>
                  
                  <div x-show.immediate="testimonialActive === 2">
                    <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                      «Успех — это способность терпеть поражение за поражением без потери энтузиазма», — Уинстон Черчилль.
                      <br>
                      «Хотите знать, кто вы? Не спрашивайте. Действуйте! Действие будет описывать и определять вас», — Томас Джефферсон.
                      <br>
                      «Я не боюсь умереть, но я боюсь не попытаться», — Jay Z.
                    </p>
                  </div>
                  
                  <div x-show.immediate="testimonialActive === 3"> 
                    <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
                      «Не позволяйте дню вчерашнему отнять слишком много у дня сегодняшнего», — Уилл Роджерс.
                      <br>
                      «Прыгай — и сеть появится», — Джон Берроуз.
                      <br>
                      «Если вы думаете, что способны выполнить что-то, или думаете, что не способны на это, вы правы в обоих случаях», — Генри Форд.
                    </p>
                  </div>
                </div>
      
                <div class="flex my-4 justify-center items-center">
                  <button 
                    @click.prevent="testimonialActive = 1" 
                    class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
                    :class="{'h-12 w-12 opacity-25 bg-yellow-400 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-yellow-400 text-white': testimonialActive == 1 }"></button>
                  <button 
                    @click.prevent="testimonialActive = 2" 
                    class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-indigo-600 rounded-full mx-2"
                    :class="{'h-12 w-12 opacity-25 bg-indigo-400 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-indigo-400 text-white': testimonialActive == 2 }"></button>
                  <button 
                    @click.prevent="testimonialActive = 3" 
                    class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-indigo-600 rounded-full mx-2"
                    :class="{'h-12 w-12 opacity-25 bg-pink-400 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-pink-400 text-white': testimonialActive == 3 }"></button>
                </div>
                 
                <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                  <div class="text-center" x-show="testimonialActive == 1">
                    <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight"></h2>
                    <small class="text-gray-500 text-xs md:text-sm truncate"></small>
                  </div>
      
                  <div class="text-center" x-show="testimonialActive == 2">
                    <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight"></h2>
                    <small class="text-gray-500 text-xs md:text-sm truncate"></small>
                  </div>
      
                  <div class="text-center" x-show="testimonialActive == 3">
                    <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight"></h2>
                    <small class="text-gray-500 text-xs md:text-sm truncate"></small>
                  </div>   
                </div>
              </div>
            </div>
          </div>
    </div>

    <!-----------------------------------------T I P S------------------------------------------->


    <!-----------------------------------------N E W S------------------------------------------->

    <?php
    
    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    $news = mysqli_fetch_all($result, MYSQLI_NUM);

    ?>

    <div class="box-content mt-40 h-4/5 w-11/12 p-4 border-4 rounded-xl content-center border-blue-300 bg-blue-300 lg:ml-10 hideme" id="news" style="padding-top: 70px;">
        <div style="margin-bottom: 50px; color: white;">
            <h1 class="text-6xl text-center" style="padding-bottom: 50px;">Статьи</h1>
        <div class="container mx-auto px-6">
            <?php
                print "<form action='newsinfo.php' method='post' class='h-64 rounded-md overflow-hidden bg-cover bg-center' style='background-image: url(";
                print $news[0][4];
                print ")'>";
            ?>
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold"><?php print $news[0][1]; ?></h2><input type='hidden' name='id' value='0'>
                        <p class="mt-2 text-gray-400"></p>
                        <button type='submit' class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <span>Читать</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button>
                    </div>
                </div>
            </form>

            <div class="md:flex mt-8 md:-mx-4">
                <?php
                    print "<form action='newsinfo.php' method='post' class='w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2' style='background-image: url(";
                    print $news[1][4];
                    print ")'>";
                ?>              
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[1][1]; ?></h2><input type='hidden' name='id' value='1'>
                            <p class="mt-2 text-gray-400"></p>
                            <button type='submit' class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print "<form action='newsinfo.php' method='post' class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[2][4];
                    print ")'>";
                ?>  
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[2][1]; ?></h2><input type='hidden' name='id' value='2'>
                            <p class="mt-2 text-gray-400"></p>
                            <button type='submit' class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>   
        </div>
  
        <div class="mt-10 flex justify-center">
          <a href="NewsPageNEW.php" class="border-2 border-blue-500 rounded-lg font-bold text-blue-500 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
              Читать больше
          </a>
          </div>
    </div>
    </div>

    <!-----------------------------------------N E W S------------------------------------------->



    <!-----------------------------------------B O O K S------------------------------------------->
    <?php
        $sql1 = "SELECT * FROM books";
        $result = mysqli_query($conn, $sql1);
        $books = mysqli_fetch_all($result, MYSQLI_NUM);
    ?>

    <div class="box-content mt-40 h-4/5 w-11/12 border-purple-800 bg-purple-800 p-4 border-4 rounded-xl content-center items-center lg:ml-10 hideme" id="books">
        <div style="margin-bottom: 50px; color: white;">
            <h1 class="text-6xl text-center">Книги</h1>
          </div>
          
          <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
          <div class="flex flex-col">
            <div class="bg-white shadow-md  rounded-3xl p-4">
                <div class="flex-none lg:flex">
                    <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                            <?php 
                              
                              print "<img src='";
                              print $books[5][3];
                              print "'
                              alt='Just a flower' class=' w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl'>";
                              
                              ?>
                    </div>
                    <div class="flex-auto ml-3 justify-evenly py-2">
                        <div class="flex flex-wrap ">
                            <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                            Book
                            </div>
                            <h2 class="flex-auto text-lg font-medium"><?php echo $books[5][1]; ?></h2>
                        </div>
                        <p class="mt-3"></p>
                        <div class="flex py-4  text-sm text-gray-600">
                            <div class="flex-1 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <img src="free-icon-user-profile-14660.svg" alt="" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                </svg>
                                <p class=""><?php echo $books[5][2]; ?></p>
                            </div>
                            
                        </div>
                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                        <div class="flex space-x-3 text-sm font-medium">
                            <div class="flex-auto flex space-x-3">
                              <?php 
                              
                              if(isset($_SESSION['user_id']))
                              {
                                  print "
                                      <form action='izbr2.php' method='post' class='mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 '>
                                      <input style='display:none;' type='text' name='id' value='5'>
                                      <button style='background: none; border: none;' type='submit' value='dobavka'>Избранное</button>
                                      </form>
                                  ";                       
                              }    
                              
                              ?>
                                
                            </div>
                            <button
                                class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                type="button" aria-label="like">Больше</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="flex flex-col">
              <div class="bg-white shadow-md  rounded-3xl p-4">
                  <div class="flex-none lg:flex">
                      <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                          <?php 
                              
                              print "<img src='";
                              print $books[1][3];
                              print "'
                              alt='Just a flower' class=' w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl'>";
                              
                              ?>
                      </div>
                      <div class="flex-auto ml-3 justify-evenly py-2">
                          <div class="flex flex-wrap ">
                              <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                              Book
                              </div>
                              <h2 class="flex-auto text-lg font-medium"><?php echo $books[1][1]; ?></h2>
                          </div>
                          <p class="mt-3"></p>
                          <div class="flex py-4  text-sm text-gray-600">
                              <div class="flex-1 inline-flex items-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <img src="free-icon-user-profile-14660.svg" alt="" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  </svg>
                                  <p class=""><?php echo $books[1][2]; ?></p>
                              </div>
                              
                          </div>
                          <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                          <div class="flex space-x-3 text-sm font-medium">
                              <div class="flex-auto flex space-x-3">
                              <?php 
                              
                              if(isset($_SESSION['user_id']))
                              {
                                  print "
                                      <form action='izbr2.php' method='post' class='mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 '>
                                      <input style='display:none;' type='text' name='id' value='1'>
                                      <button style='background: none; border: none;' type='submit' value='dobavka'>Избранное</button>
                                      </form>
                                  ";                       
                              }    
                              
                              ?>
                              </div>
                              <button
                                  class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                  type="button" aria-label="like">Больше</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        </div>

        <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
          <div class="flex flex-col">
            <div class="bg-white shadow-md  rounded-3xl p-4">
                <div class="flex-none lg:flex">
                    <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                            <?php 
                              
                              print "<img src='";
                              print $books[6][3];
                              print "'
                              alt='Just a flower' class=' w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl'>";
                              
                              ?>
                    </div>
                    <div class="flex-auto ml-3 justify-evenly py-2">
                        <div class="flex flex-wrap ">
                            <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                            Book
                            </div>
                            <h2 class="flex-auto text-lg font-medium"><?php echo $books[6][1]; ?></h2>
                        </div>
                        <p class="mt-3"></p>
                        <div class="flex py-4  text-sm text-gray-600">
                            <div class="flex-1 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <img src="free-icon-user-profile-14660.svg" alt="" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                </svg>
                                <p class=""><?php echo $books[6][2]; ?></p>
                            </div>
                            
                        </div>
                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                        <div class="flex space-x-3 text-sm font-medium">
                            <div class="flex-auto flex space-x-3">
                            <?php 
                              
                              if(isset($_SESSION['user_id']))
                              {
                                  print "
                                      <form action='izbr2.php' method='post' class='mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 '>
                                      <input style='display:none;' type='text' name='id' value='6'>
                                      <button style='background: none; border: none;' type='submit' value='dobavka'>Избранное</button>
                                      </form>
                                  ";                       
                              }    
                              
                              ?>
                            </div>
                            <button
                                class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                type="button" aria-label="like">Больше</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
          <div class="bg-white shadow-md  rounded-3xl p-4">
              <div class="flex-none lg:flex">
                  <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                          <?php 
                              
                              print "<img src='";
                              print $books[11][3];
                              print "'
                              alt='Just a flower' class=' w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl'>";
                              
                              ?>
                  </div>
                  <div class="flex-auto ml-3 justify-evenly py-2">
                      <div class="flex flex-wrap ">
                          <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                          Book
                          </div>
                          <h2 class="flex-auto text-lg font-medium"><?php echo $books[11][1]; ?></h2>
                      </div>
                      <p class="mt-3"></p>
                      <div class="flex py-4  text-sm text-gray-600">
                          <div class="flex-1 inline-flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <img src="free-icon-user-profile-14660.svg" alt="" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              </svg>
                              <p class=""><?php echo $books[11][2]; ?></p>
                          </div>
                          
                      </div>
                      <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                      <div class="flex space-x-3 text-sm font-medium">
                          <div class="flex-auto flex space-x-3">
                          <?php 
                              
                              if(isset($_SESSION['user_id']))
                              {
                                  print "
                                      <form action='izbr2.php' method='post' class='mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 '>
                                      <input style='display:none;' type='text' name='id' value='11'>
                                      <button style='background: none; border: none;' type='submit' value='dobavka'>Избранное</button>
                                      </form>
                                  ";                       
                              }    
                              
                              ?>
                          </div>
                          <button
                              class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                              type="button" aria-label="like">Больше</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>

        <div class="mt-10 flex justify-center">
            <a href="BooksPageNEW.php" class="border-2 border-white rounded-lg font-bold text-white px-4 py-3 transition duration-150 ease-in-out hover:bg-indigo-500 hover:text-white mr-6">Больше</a>
        </div>
    </div>

    <!-----------------------------------------B O O K S------------------------------------------->




    <!-----------------------------------------F O O T E R------------------------------------------->

    <div class="bg-gray-100" style="margin-top: 100px;">
        <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-center">
           <div class="p-5 w-48 ">
              <div class="text-xs uppercase text-gray-500 font-medium">Дом</div>
              <a class="my-3 block" href="psychologypage.php">Психология <span class="text-teal-600 text-xs p-1"></span></a>
              <a class="my-3 block" href="NewsPageNEW.php">Статьи <span class="text-teal-600 text-xs p-1"></span></a>
              <a class="my-3 block" href="Test.php">Тесты <span class="text-teal-600 text-xs p-1"></span></a>
              <a class="my-3 block" href="Lifehack.php">Советы <span class="text-teal-600 text-xs p-1"></span></a>
              <a class="my-3 block" href="Relax/MainCalm.html">Релакс <span class="text-teal-600 text-xs p-1"></span></a> 
           </div>
           <div class="p-5 w-48 ">
              <div class="text-xs uppercase text-gray-500 font-medium">Пользователь</div>
              <a class="my-3 block" href="login.php">Войти <span class="text-teal-600 text-xs p-1"></span></a>
              <a class="my-3 block" href="register.php">Новый пользователь <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a> 
           </div>
           <div class="p-5 w-48">
              <div class="text-xs  ">Database разработчик</div>
              <div class="my-3 block" >Айткожа Алия <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block" > <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block"> <span class="text-teal-600 text-xs p-1"></span></div> 
           </div>
           <div class="p-5 w-48 ">
              <div class="text-xs ">Backend разработчики</div>
              <div class="my-3 block">Айгерим Бердимурат <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block" >Бибисара Ондирис <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block" > <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block" > <span class="text-teal-600 text-xs p-1"></span></div> 
           </div>
           <div class="p-5 w-48">
              <div class="text-xs ">Frontend разработчик</div>
              <div class="my-3 block" >Жумабаев Алихан <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block" > <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block" > <span class="text-teal-600 text-xs p-1"></span></div> 
           </div>
           <div class="p-5 w-48 ">
              <div class="text-xs uppercase text-gray-500 font-medium">Наши контакты</div>
              <div class="my-3 block" >8-800-535-35-35 <span class="text-teal-600 text-xs p-1"></span></div><div class="my-3 block">contact@company.com <span class="text-teal-600 text-xs p-1"></span></div> 
           </div>
        </div>
     </div>

      

     <script src="js/nav.js"></script>

     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script type="text/javascript">
$(document).ready(function() {
    $(".nav-toggler").each(function(_, navToggler) {
      var target = $(navToggler).data("target");
      $(navToggler).on("click", function() {
        $(target).animate({
          height: "toggle"
        });
      });
    });
  });
</script>
</body>
</html>