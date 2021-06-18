<?php
    session_start();
    require('connect.php');
    include("functions.php");
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PsychoToday - Глоссарий</title>
	<meta charset="utf-8">
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
    
	

    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(https://images.unsplash.com/photo-1526378787940-576a539ba69d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80);">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
    <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font mb-4" style="color:#EDFEFF;">
            Глоссарий
          </h1>
          
        </div>
    </div>
  </div>


<div>
    <section class="text-gray-700">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
            Глоссарий психических заболеваний
          </p>
        </div>
          
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">

            <?php

                $sql = "SELECT * FROM glossary";
                $result = mysqli_query($conn, $sql);
                $terms = mysqli_fetch_all($result, MYSQLI_NUM);
                $j = 0;
                
                function compareByName($a, $b) {
                    return strcmp($a[2], $b[2]);
                }
                usort($terms, 'compareByName');

                print "<div class='w-full lg:w-1/2 px-4 py-2'>";
                for ($i = 0; $i < count($terms); $i++) {
                    if ($terms[$i][1] == 2) {
                        if ($j % 2 == 0) {
                            print "
                                        <details class='mb-4'>
                                            <summary class='font-semibold  bg-gray-200 rounded-md py-2 px-4'>";
                            print $terms[$i][2];
                            print "         </summary>
                                            <span>";
                            print $terms[$i][3];
                            print "         </span>
                                        </details>";
                        }
                        $j++;
                    }
                }
                print "</div>";
                
                $j = 0;
                print "<div class='w-full lg:w-1/2 px-4 py-2'>";
                for ($i = 0; $i < count($terms); $i++) {
                    if ($terms[$i][1] == 2) {
                        if ($j % 2 == 1) {
                            print "
                                        <details class='mb-4'>
                                            <summary class='font-semibold  bg-gray-200 rounded-md py-2 px-4'>";
                            print $terms[$i][2];
                            print "         </summary>
                                            <span class='px-4 py-2'>";
                            print $terms[$i][3];
                            print "         </span>
                                        </details>";
                        }
                        $j++;
                    }
                }
                print "</div>";
            ?>

        </div>
      </div>
    </section>
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


</body>
</html>