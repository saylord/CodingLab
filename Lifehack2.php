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
    <title>PsychoToday - Советы</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
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



    @import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap');

        .bg-primary-color-grayish-blue {
            background: hsl(217, 19%, 35%);
        }
        .bg-primary-color-blue {
            background: hsl(217, 90%, 31%);
        }
        .bg-primary-color-white {
            background: hsl(0, 0%, 100%);
        }

        .primary-color-blackish-blue {
            color: rgb(25,33,46);
        }

        .primary-color-blackish-blue-opacity{
            color: rgba(25,33,46,0.5);
        }

        .color-neutral-light-gray{
            color: hsl(0, 0%, 81%);
        }

        .color-neutral-grayish-blue{
            color: hsl(210, 46%, 95%);
        }

        body{
            font-size: 13px;
            font-family: 'Barlow Semi Condensed', sans-serif;
        }

        h1{
      font-weight: 600;
      }

      h2,p{
        font-weight: 500;
      }

      
@media (max-width: 576px) {
    .content {
        padding-top: 51px;
    }
}

@media (min-width: 577px) {
  .pt-scroll {
    padding-top: 51px;
  }

  .nav-sticky {
    position: fixed!important;
    min-width: 100%;
    top: 0;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
    transition: all .25s ease-in;
    z-index: 1;
  }
}

/* HAMBURGER MENU */

.hamburger {
  cursor: pointer;
  width: 48px;
  height: 48px;
  transition: all 0.25s;
}

.hamburger__top-bun,
.hamburger__bottom-bun {
  content: '';
  position: absolute;
  width: 24px;
  height: 2px;
  background: #000;
  transform: rotate(0);
  transition: all 0.5s;
}

.hamburger:hover [class*="-bun"] {
  background: #333;
}

.hamburger__top-bun {
  transform: translateY(-5px);
}

.hamburger__bottom-bun {
  transform: translateY(3px);
}

.open {
  transform: rotate(90deg);
  transform: translateY(-1px);
}

.open .hamburger__top-bun {
  transform:
    rotate(45deg)
    translateY(0px);
}

.open .hamburger__bottom-bun {
  transform:
    rotate(-45deg)
    translateY(0px);
}

.idk{
  background-image: url('https://images.unsplash.com/photo-1543966888-7c1dc482a810?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80');
}

.idk2{
  background-image: url('https://images.unsplash.com/photo-1590608897129-79da98d15969?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80');
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
    


    <div class="flex ml-6 mt-6">
    <a href="lifehack.php">
        <button class="border border-teal-500 text-teal-500 block rounded-md font-bold py-4 px-6 mr-2 flex items-center hover:bg-yellow-400 hover:text-white">
        <svg class="h-5 w-5 mr-2 fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
            <path id="XMLID_10_" d="M438,372H36.355l72.822-72.822c9.763-9.763,9.763-25.592,0-35.355c-9.763-9.764-25.593-9.762-35.355,0 l-115.5,115.5C-46.366,384.01-49,390.369-49,397s2.634,12.989,7.322,17.678l115.5,115.5c9.763,9.762,25.593,9.763,35.355,0 c9.763-9.763,9.763-25.592,0-35.355L36.355,422H438c13.808,0,25-11.193,25-25S451.808,372,438,372z"></path>
        </svg>
        Назад
    </button>
    </a>
</div>

    <section class="blog text-gray-700 body-font">
      <div class="container px-5 py-5 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Категория - советы для родителей подростков</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-base">
            Каждому человеку рано или поздно понадобятся советы в реальной жизни. <br> На данной странице собраны полезные советы от психологов.</p>
        </div>
        
        
      </div>
    </section>
  
  <body class="bg-indigo-100">
    <div class="w-full h-screen">
      <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-4 2xl:row-span-2 2xl:pb-8 ml-2 pt-4 px-6">
        <!-- Beginning of the component about Daniel Clifford -->
        <div class="bg-indigo-500 lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0">
          <div class="mx-6 my-8 2xl:mx-10">
            <img class="w-8 md:w-9 lg:w-10 2xl:w-20 h-8 md:h-9 lg:h-10 2xl:h-20 rounded-full border-2 ml-1 lg:ml-3 2xl:ml-0 md:-mt-1 2xl:-mt-4" src="https://images.unsplash.com/photo-1557682224-5b8590cd9ec5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1615&q=80" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-12 lg:pl-16 2xl:pl-20 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-20 2xl:mx-8">Категория - советы для родителей подростков</h1>
            <h2 class="text-white text-opacity-50 text-xs md:text-base 2xl:text-2xl pl-12 lg:pl-16 2xl:pl-20 2xl:my-2 2xl:mx-8"></h2>
          </div>
          <div class="-mt-6 relative">
            <p class="text-white text-xl 2xl:text-4xl font-bold px-7 lg:px-9 2xl:pt-6 2xl:mx-2">Главное в ваших взаимоотношениях с ребенком – взаимопонимание.</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl px-7 lg:px-9 mb-3 2xl:pb-8 2xl:mx-2">Конечно, вы можете иметь разные увлечения и взгляды, но ровно до тех пор, пока они не вторгаются на территорию ключевых мировоззренческих позиций партнёра. Совместная жизнь сторонника патриархальных взглядов и феминистки, монархиста и либерала и даже болельщиков «Спартака» и ЦСКА вряд ли будет безоблачной. В ключевых вопросах вы должны смотреть, по заветам Экзюпери, в одном направлении.</p>
          </div>
        </div>
        <!-- Ending of the component about Daniel Clifford -->

        <!-- Beginning of the component about Jonathan Walters -->
        <div class="bg-yellow-400 lg:order-2 lg:row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl pb-4 mb-5 lg:mb-0">
          <div class="mx-8 2xl:mx-10 my-10">
            <img class="w-8 md:w-9 2xl:w-20 h-8 md:h-9 2xl:h-20 rounded-full border-2 -ml-1 -mt-2 lg:-mt-4" src="https://images.unsplash.com/photo-1557683311-eac922347aa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1615&q=80" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 2xl:-mt-16">Категория - советы для родителей подростков</h1>
            <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-11 md:pl-12 2xl:pl-24"></h2>
          </div>
          <div class="-mt-8 mx-1 lg:mx-2">
            <p class="text-white text-lg lg:text-xl 2xl:text-4xl font-semibold pt-1 px-6 2xl:px-8 lg:pl-5 lg:pr-8">Устанавливайте правила</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl pl-6 lg:pl-5 pr-4 -mt-1 lg:mt-6 2xl:mt-2 2xl:px-8">Договорённости — это не стремление ограничить чью-то свободу, это попытка выработать общий язык, на котором разговаривает ваша пара. Взгляды партнёра на распределение обязанностей, финансовые вопросы, совместный и раздельный отдых и даже на то, кто утром идёт первым в душ, могут кардинально отличаться от ваших. Не обязательно дожидаться крупной ссоры, чтобы выяснить, что он думает по этому поводу. Установите правила заранее и следуйте им.</p>
          </div>
        </div>
        <!-- Ending of the component about Jonathan Walters -->

        <!-- Beginning of the component about Jeanette Harmon -->
        <div class="bg-primary-color-white lg:order-3 lg:row-span-2 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8">
          <div class="mx-8 my-10 lg:my-8">
            <img class="w-8 md:w-9 lg:w-11 2xl:w-20 h-8 md:h-9 lg:h-11 2xl:h-20 rounded-full border-2 -mt-3 -ml-1 lg:-ml-0" src="https://images.unsplash.com/photo-1579546929662-711aa81148cf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" />
            <h1 class="primary-color-blackish-blue text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 lg:pl-14 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-16">Категория - советы для родителей подростков</h1>
            <h2 class="primary-color-blackish-blue-opacity text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 lg:pl-14 2xl:pl-24"></h2>
          </div>
          <div class="-mt-4 ml-5 mr-11">
            <p class="primary-color-blackish-blue text-xl 2xl:text-4xl font-bold px-2 lg:px-3 -mt-6 lg:-mt-5 2xl:mt-12 2xl:pb-6">Решайте проблемы без привлечения третьей стороны</p>
            <br />
            <p class="primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl pl-2 lg:pl-3 lg:pr-4 mb-6 2xl:pt-2 -mt-3">Не нужно бежать за советом к родителям, друзьям или анонимам на форуме. Вам всегда виднее, что происходит в отношениях, так как именно вы знаете все обстоятельства конфликта.<br><br>

Допустим, вы всё-таки обратились за поддержкой к маме и она согласилась, что ваш партнёр не прав и вообще нехороший человек. Только вы с обидчиком потом помиритесь, а для вашей мамы (друга, всего интернета) он так и останется негодяем.</p>
          </div>
        </div>
        <!-- Ending of the component about Jeanette Harmon -->

        <!-- Beginning of the component about Patrick Abrams -->
        <div class="bg-purple-500 lg:order-4 lg:row-span-2 2xl:row-span-1 col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8 lg:pb-14 2xl:pb-20">
          <div class="mx-8 my-8">
            <img class="w-8 md:w-9 lg:w-10 2xl:w-20 h-8 md:h-9 lg:h-10 2xl:h-20 rounded-full border-2 lg:-mt-3" src="https://images.unsplash.com/photo-1614852206758-0caebadbba66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-12 md:pl-14 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-16">Категория - советы для родителей подростков</h1>
            <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-12 md:pl-14 2xl:pl-24"></h2>
          </div>
          <div class="px-3 -mt-3 mb-5 lg:mb-0">
            <p class="text-white text-lg 2xl:text-4xl font-semibold px-4 -mt-3 lg:-mt-6 2xl:mt-8">Не требуйте от партнёра телепатических способностей</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl px-4 mt-1 lg:-mt-3 2xl:mt-6">Природа подарила человеку речевой аппарат, используйте его по назначению. Говорите партнёру, что вам нравится и не нравится, чего вы ждёте, какие поступки вас расстраивают. И уж точно не стоит обвинять человека в том, что он не догадывается, на что вы обижаетесь. <br><br><br>Если ваша любовная история целиком состоит из трудностей, преодоления, ссор и редких, но ярких приступов счастья — это нездоровые отношения. Люди довольно быстро привыкают к эмоциональным качелям, когда чередуются отчаяние и восторг, и могут считать себя вполне довольными при этом.

Но ответьте себе честно: партнёр делает вашу жизнь проще или усложняет её? Вы чувствуете себя счастливым чаще, чем несчастным? Не ждите, пока «Титаник» вашей любви пойдёт ко дну, садитесь в шлюпку. В противном случае именно вам может не хватить места на спасительной двери.</p>
          </div>
        </div>
        <!-- Ending of the component about Patrick Abrams -->

        <!-- Beginning of the component about Kira Whittle -->
        <div class="bg-primary-color-white lg:order-2 lg:row-span-4 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:pb-4 2xl:h-screen">
          <div class="mx-8 my-8 lg:pl-1">
            <img class="w-8 md:w-9 lg:w-12 2xl:w-20 h-8 md:h-9 lg:h-12 2xl:h-20 rounded-full border-2 lg:-mt-4 -ml-1 lg:-ml-4" src="https://images.unsplash.com/photo-1614850523527-08bd62441994?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80" />
            <h1 class="primary-color-blackish-blue text-xs md:text-base 2xl:text-2xl pl-10 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-12 2xl:-mt-16">Категория - советы для родителей подростков</h1>
            <h2 class="primary-color-blackish-blue-opacity text-xs md:text-base 2xl:text-2xl pl-10 md:pl-12 2xl:pl-24"></h2>
          </div>
          <div class="px-3 lg:px-5 lg:-mt-4 mb-5 lg:mb-0">
            <p class="primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0">Не игнорируйте тревожные сигналы</p>
            <br />
            <p class="primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64">В большинстве отношений есть презентационный период, когда оба партнёра пытаются казаться лучше, чем они есть на самом деле. И если уже на конфетно-букетном этапе вы видите сигналы опасности, не игнорируйте их, доверяйте своей интуиции.
<br><br><br>
Необоснованные всплески агрессии, грубость в адрес официантов, нелестные высказывания о бывших и прочие вещи, которые вас беспокоят, легко списать на «показалось» и «он / она исправится». Скорее всего, вам не показалось и ваш партнёр не исправится. Трезво подумайте, готовы ли вы сталкиваться с такими негативными проявлениями регулярно.<br><br><br>Не всё, с чем люди приходят в отношения, становится общим. Оставьте за собой право вести приватную переписку, иметь личные накопления, которые вы тратите на нужные только вам вещи, заниматься любимым хобби. И главное, ваш партнёр тоже может всё это делать. Просто примите это.</p>
          </div>
        </div>
        <!-- Ending of the component about Kira Whittle -->
      </div>


      <section class="blog text-gray-700 body-font">
      <div class="container px-5 py-5 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Советы от психологов</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-base">
          для родителей подростков</p>
        </div>
        
        
      </div>
    </section>



      <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-4 2xl:row-span-2 2xl:pb-8 ml-2 pt-4 px-6">
        <!-- Beginning of the component about Daniel Clifford -->
        <div class="bg-pink-400 lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0">
          <div class="mx-6 my-8 2xl:mx-10">
            <img class="w-8 md:w-9 lg:w-10 2xl:w-20 h-8 md:h-9 lg:h-10 2xl:h-20 rounded-full border-2 ml-1 lg:ml-3 2xl:ml-0 md:-mt-1 2xl:-mt-4" src="https://n1s1.hsmedia.ru/75/f9/6d/75f96dd7bae3d1317fc52264fd997e1c/160x160_21_49b1c8a03da3844ae63f8ce5c515cda7@1144x1144_0xac120003_10183884591561959897.jpg" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-12 lg:pl-16 2xl:pl-20 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-20 2xl:mx-8">Ирина Савенкова</h1>
            <h2 class="text-white text-opacity-50 text-xs md:text-base 2xl:text-2xl pl-12 lg:pl-16 2xl:pl-20 2xl:my-2 2xl:mx-8">Психотерапевт, психолог</h2>
          </div>
          <div class="-mt-6 relative">
            <p class="text-white text-xl 2xl:text-4xl font-bold px-7 lg:px-9 2xl:pt-6 2xl:mx-2">Увлекаясь, мы склонны обманывать себя не только по поводу недостатков партнера, которого мы выбираем.</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl px-7 lg:px-9 mb-3 2xl:pb-8 2xl:mx-2">Вы должны четко представлять себе, как ваш мужчина смотрит на мир: что он думает об отношениях, чего хочет от жизни, каковы его планы и как он намерен их осуществлять. Дамы, склонные оперировать своими иллюзиями вместо точной информации, тратят годы на ожидание перемен к лучшему и оказываются не готовыми ко множеству разочарований.
            </p>
          </div>
        </div>
        <!-- Ending of the component about Daniel Clifford -->

        <!-- Beginning of the component about Jonathan Walters -->
        <div class="bg-blue-400 lg:order-2 lg:row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl pb-4 mb-5 lg:mb-0">
          <div class="mx-8 2xl:mx-10 my-10">
            <img class="w-8 md:w-9 2xl:w-20 h-8 md:h-9 2xl:h-20 rounded-full border-2 -ml-1 -mt-2 lg:-mt-4" src="https://images.unsplash.com/photo-1554188248-986adbb73be4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 2xl:-mt-16">Наталья Копылова</h1>
            <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-11 md:pl-12 2xl:pl-24">Психолог</h2>
          </div>
          <div class="-mt-8 mx-1 lg:mx-2">
            <p class="text-white text-lg lg:text-xl 2xl:text-4xl font-semibold pt-1 px-6 2xl:px-8 lg:pl-5 lg:pr-8">Услышьте чужое «нет»</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl pl-6 lg:pl-5 pr-4 -mt-1 lg:mt-6 2xl:mt-2 2xl:px-8">Не нужно делать «как лучше», если партнёр чётко выразил своё несогласие с чем-либо. «Нет» не означает «может быть» или «да, но я хочу, чтобы меня уговорили».

</p>
          </div>
        </div>
        <!-- Ending of the component about Jonathan Walters -->

        <!-- Beginning of the component about Jeanette Harmon -->
        <div class="bg-green-400 text-white lg:order-3 lg:row-span-2 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8">
          <div class="mx-8 my-10 lg:my-8">
            <img class="w-8 md:w-9 lg:w-11 2xl:w-20 h-8 md:h-9 lg:h-11 2xl:h-20 rounded-full border-2 -mt-3 -ml-1 lg:-ml-0" src="https://images.unsplash.com/photo-1523895665936-7bfe172b757d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80" />
            <h1 class="primary-color-blackish-blue text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 lg:pl-14 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-16">Дирк Айлерт</h1>
            <h2 class="primary-color-blackish-blue-opacity text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 lg:pl-14 2xl:pl-24">Психолог</h2>
          </div>
          <div class="-mt-4 ml-5 mr-11">
            <p class="primary-color-blackish-blue text-xl 2xl:text-4xl font-bold px-2 lg:px-3 -mt-6 lg:-mt-5 2xl:mt-12 2xl:pb-6">Общение, ориентированное на эмоции</p>
            <br />
            <p class="primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl pl-2 lg:pl-3 lg:pr-4 mb-6 2xl:pt-2 -mt-3">Эмпатия очень важна. Если я правильно истолковываю эмоции своего партнера, то могу тщательнее выбирать выражения

</p>
          </div>
        </div>
        <!-- Ending of the component about Jeanette Harmon -->

        <!-- Beginning of the component about Patrick Abrams -->
        <div class="bg-purple-600 lg:order-4 lg:row-span-2 2xl:row-span-1 col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8 lg:pb-14 2xl:pb-20">
          <div class="mx-8 my-8">
            <img class="w-8 md:w-9 lg:w-10 2xl:w-20 h-8 md:h-9 lg:h-10 2xl:h-20 rounded-full border-2 lg:-mt-3" src="https://images.unsplash.com/photo-1536401490150-689044db7e6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1647&q=80" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-12 md:pl-14 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-16">Бонни Ли</h1>
            <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-12 md:pl-14 2xl:pl-24">Психолог</h2>
          </div>
          <div class="px-3 -mt-3 mb-5 lg:mb-0">
            <p class="text-white text-lg 2xl:text-4xl font-semibold px-4 -mt-3 lg:-mt-6 2xl:mt-8">Тот, кто пытается успокоить или не скрывает своего стыда, дает понять партнеру, что чувства другого для него важны</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl px-4 mt-1 lg:-mt-3 2xl:mt-6">Даже самые счастливые пары не обходятся без конфликтов. В спорах с партнерами существуют две возможности. Первая: через гнев и презрение сигнализировать уверенность в своей правоте. Вторая: если вы демонстрируете стыд или чувство вины, то предпринимаете невербальную попытку исправить ситуацию.</p>
          </div>
        </div>
        <!-- Ending of the component about Patrick Abrams -->

        <!-- Beginning of the component about Kira Whittle -->
        <div class="bg-purple-400 text-white lg:order-2 lg:row-span-4 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:pb-4 2xl:h-screen">
          <div class="mx-8 my-8 lg:pl-1">
            <img class="w-8 md:w-9 lg:w-12 2xl:w-20 h-8 md:h-9 lg:h-12 2xl:h-20 rounded-full border-2 lg:-mt-4 -ml-1 lg:-ml-4" src="https://images.unsplash.com/photo-1525605131152-d0d171450b47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80" />
            <h1 class="primary-color-blackish-blue text-xs md:text-base 2xl:text-2xl pl-10 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-12 2xl:-mt-16">Елена Любченко</h1>
            <h2 class="primary-color-blackish-blue-opacity text-xs md:text-base 2xl:text-2xl pl-10 md:pl-12 2xl:pl-24">Психолог</h2>
          </div>
          <div class="px-3 lg:px-5 lg:-mt-4 mb-5 lg:mb-0">
            <p class="primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0">Ежедневные процедуры для счастливых отношений</p>
            <br />
            <p class="primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64">Масштабное немецкое исследование показало, что люди ценят все хорошее, что дает им жизнь с другим человеком, первые два года, потом все принимается как должное. И это существенно влияет на качество совместной жизни! Умение восхищаться партнером и видеть его лучшие черты важно сохранять не только во время эйфории первых месяцев знакомства, а и в течение всей жизни. А если ваши комплексы, амбиции, детские потребности, желания быть круче или отстоять свою правоту берут верх, спросите себя: «Я хочу быть счастливым или правым?» Некоторым помогает.

</p>
          </div>
        </div>
        <!-- Ending of the component about Kira Whittle -->
      </div>

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


    

    
    <script type="text/javascript">
    	var nav = document.getElementById('site-menu');
var header = document.getElementById('top');

window.addEventListener('scroll', function() {
  if (window.scrollY >=400) { // adjust this value based on site structure and header image height
    nav.classList.add('nav-sticky');
    header.classList.add('pt-scroll');
  } else {
    nav.classList.remove('nav-sticky');
    header.classList.remove('pt-scroll');
  }
});

function navToggle() {
        var btn = document.getElementById('menuBtn');
        var nav = document.getElementById('menu');

        btn.classList.toggle('open');
        nav.classList.toggle('flex');
        nav.classList.toggle('hidden');
    }
    </script>









    </body>