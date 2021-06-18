<?php
    session_start();
    require('connect.php');
    include("functions.php");
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsychoToday - Статьи</title>
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
    

    
    <?php
    
    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    $news = mysqli_fetch_all($result, MYSQLI_NUM);

    $id = $_POST['id'];

    ?>

<div class="flex ml-6 mt-6">
    <a href="NewsPageNEW.php">
        <button class="border border-teal-500 text-teal-500 block rounded-md font-bold py-4 px-6 mr-2 flex items-center hover:bg-yellow-400 hover:text-white">
        <svg class="h-5 w-5 mr-2 fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
            <path id="XMLID_10_" d="M438,372H36.355l72.822-72.822c9.763-9.763,9.763-25.592,0-35.355c-9.763-9.764-25.593-9.762-35.355,0 l-115.5,115.5C-46.366,384.01-49,390.369-49,397s2.634,12.989,7.322,17.678l115.5,115.5c9.763,9.762,25.593,9.763,35.355,0 c9.763-9.763,9.763-25.592,0-35.355L36.355,422H438c13.808,0,25-11.193,25-25S451.808,372,438,372z"></path>
        </svg>
        Назад
    </button>
    </a>
</div>

    <main class="mt-10 max-w-screen-lg mx-auto w-full">
        

      <div class="mb-4 md:mb-0 w-full mx-auto relative">
        <div class="px-4 lg:px-0">
          <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
            <?php print $news[$id][1]; ?>
          </h2>
          <a 
            href="#"
            class="py-2 text-green-700 inline-flex items-center justify-center mb-2"
          >
            
          </a>
        </div>
        <?php
        
        print "<img src='";
        print $news[$id][4];
        print "' class='w-full object-cover lg:rounded' style='height: 28em;'/>";
        ?>
        
      </div>

      <div class="flex flex-col lg:flex-row lg:space-x-12">

        <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
        <?php 
        $id2 = $id+1;
        if(isset($_SESSION['user_id']))
        {   
            print "<div class='flex-1 inline-flex items-center' style='width: 50px;'>
            <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5 mr-3' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
            <img src='heart.svg' alt='' class='h-5 w-5 mr-3' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
            <p>
                <form action='izbr2.php' method='post'>
                <input style='display:none;' type='text' name='id' value='". $id2 ."'>
                <button style='background: none; border: none;' type='submit' value='dobavka'>Избранное</button>
                </form>
            </p>
        </svg>
        </div>";                       
        }    
        ?>
        <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">Автор: <?php print $news[$id][2]; ?></h2>
        <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">Дата: <?php print $news[$id][3]; ?></div>
          <p class="pb-6"><?php print $news[$id][5]; ?></p>

        </div>

        

      </div>
    </main>
    <!-- main ends here -->

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