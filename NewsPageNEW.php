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
    
   
    
<div style="margin-top: 150px;">
      <h1 class="text-6xl text-center">Статьи</h1>
    </div>


    <?php
    
    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    $news = mysqli_fetch_all($result, MYSQLI_NUM);
    

    print "<main class='my-8'>
    <div class='container mx-auto px-6'>

        <div class='md:flex mt-8 mb-8 md:-mx-4 box-content h-4/5 w-11/12 p-4 border-4 rounded-xl content-center bg-blue-200 lg:ml-10'>
            <form action='newsinfo.php' method='post' class='w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2' style='background-image: url(";
            print $news[0][4];
            print ")'>
            <div class='bg-gray-900 bg-opacity-50 flex items-center h-full'>
                <div class='px-10 max-w-xl'>
                    <h2 class='text-2xl text-white font-semibold'><input type='hidden' name='id' value='0'>";
            print $news[0][1];
            print "</h2><button type='submit' class='flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none'>
            <span>Читать</span>
            <svg class='h-5 w-5 mx-2' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'><path d='M17 8l4 4m0 0l-4 4m4-4H3'></path></svg>
        </button>
    </div>
</div>
</form>";

            print "<form action='newsinfo.php' method='post' class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
            print $news[1][4];
            print ")'>
            <div class='bg-gray-900 bg-opacity-50 flex items-center h-full'>
                <div class='px-10 max-w-xl'>
                    <h2 class='text-2xl text-white font-semibold'><input type='hidden' name='id' value='1'>";
            print $news[1][1];
            print "</h2><button type='submit' class='flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none'>
            <span>Читать</span>
            <svg class='h-5 w-5 mx-2' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'><path d='M17 8l4 4m0 0l-4 4m4-4H3'></path></svg>
        </button>
    </div>
</div>
</form>";

            print "<form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
            print $news[2][4];
            print ")'>
            <div class='bg-gray-900 bg-opacity-50 flex items-center h-full'>
                <div class='px-10 max-w-xl'>
                    <h2 class='text-2xl text-white font-semibold'><input type='hidden' name='id' value='2'>";
            print $news[2][1];
            print "</h2><button type='submit' class='flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none'>
            <span>Читать</span>
            <svg class='h-5 w-5 mx-2' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'><path d='M17 8l4 4m0 0l-4 4m4-4H3'></path></svg>
        </button>
    </div>
</div>
</form>
</div>";
            print "<form action='newsinfo.php' method='post'  class='box-content h-4/5 w-11/12 p-4 border-4 rounded-xl content-center bg-blue-200 lg:ml-10'>
            <div class='h-64 mt-8 rounded-md overflow-hidden bg-cover bg-center' style='background-image: url(";
            print $news[3][4];
            print ")'>
            <div class='bg-gray-900 bg-opacity-50 flex items-center h-full'>
                <div class='px-10 max-w-xl'>
                    <h2 class='text-2xl text-white font-semibold'><input type='hidden' name='id' value='3'>";
            print $news[3][1];
            print "</h2> <button type='submit' class='flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none'>
            <span>Читать</span>
            <svg class='h-5 w-5 mx-2' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'><path d='M17 8l4 4m0 0l-4 4m4-4H3'></path></svg>
        </button>
</div>
</div>
</form>";

            print "<form action='newsinfo.php' method='post'  class='md:flex mt-8 mb-8 md:-mx-4'>
            <div class='w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2' style='background-image: url(";
            print $news[4][4];
            print ")'>
            <div class='bg-gray-900 bg-opacity-50 flex items-center h-full'>
                <div class='px-10 max-w-xl'>
                    <h2 class='text-2xl text-white font-semibold'><input type='hidden' name='id' value='4'>";
            print $news[4][1];
            print "</h2><button type='submit' class='flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none'>
            <span>Читать</span>
            <svg class='h-5 w-5 mx-2' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'><path d='M17 8l4 4m0 0l-4 4m4-4H3'></path></svg>
        </button>
    </div>
</div>
</form>
<form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
            print $news[5][4];
            print ")'>
            <div class='bg-gray-900 bg-opacity-50 flex items-center h-full'>
                <div class='px-10 max-w-xl'>
                    <h2 class='text-2xl text-white font-semibold'><input type='hidden' name='id' value='5'>";
                print $news[5][1];
                print "</h2>
                <p class='mt-2 text-gray-400'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                <button type='submit' class='flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none'>
                    <span>Читать</span>
                    <svg class='h-5 w-5 mx-2' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'><path d='M17 8l4 4m0 0l-4 4m4-4H3'></path></svg>
                </button>
            </div>
        </div>
    </form>
</div>
</div>";

          


    
    ?>
    

<div class="md:flex mt-8 mb-8 md:-mx-4 box-content h-4/5 w-11/12 p-4 border-4 rounded-xl content-center bg-blue-200 lg:ml-10">
              
                <?php
                    print "<form action='newsinfo.php' method='post' class='w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2' style='background-image: url(";
                    print $news[6][4];
                    print ")'>";
                ?>
                
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[6][1]; ?></h2><input type='hidden' name='id' value='6'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print "<form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[7][4];
                    print ")'>";
                ?>
                
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[7][1]; ?></h2><input type='hidden' name='id' value='7'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print "<form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[8][4];
                    print ")'>";
                ?>
                
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[8][1]; ?></h2><input type='hidden' name='id' value='8'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print " <form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[9][4];
                    print ")'>";
                ?>
               
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[9][1]; ?></h2><input type='hidden' name='id' value='9'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          


        <div class="box-content h-4/5 w-11/12 p-4 border-4 rounded-xl content-center bg-blue-200 lg:ml-10">
        <?php
                    print " <form action='newsinfo.php' method='post'  class='h-64 mt-8 rounded-md overflow-hidden bg-cover bg-center' style='background-image: url(";
                    print $news[10][4];
                    print ")'>";
        ?>
           
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold"><?php print $news[10][1]; ?></h2><input type='hidden' name='id' value='10'>
                        <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                    </div>
                </div>
            </form>
        </div>




<div class="box-content mt-8 h-4/5 w-11/12 p-4 border-4 rounded-xl content-center bg-blue-200 lg:ml-10">
            <div class="md:flex mt-8 md:-mx-4">
                <?php
                    print " <form action='newsinfo.php' method='post'  class='w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2' style='background-image: url(";
                    print $news[11][4];
                    print ")'>";
                ?>
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[11][1]; ?></h2><input type='hidden' name='id' value='11'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print " <form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[12][4];
                    print ")'>";
                ?>
            
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[12][1]; ?></h2><input type='hidden' name='id' value='12'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print "<form action='newsinfo.php' method='post' class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[13][4];
                    print ")'>";
                ?>
                
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[13][1]; ?></h2><input type='hidden' name='id' value='13'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="md:flex mt-8 md:-mx-4">
                <?php
                    print "<form action='newsinfo.php' method='post'  class='w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2' style='background-image: url(";
                    print $news[14][4];
                    print ")'>";
                ?>
                
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[14][1]; ?></h2><input type='hidden' name='id' value='14'>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                    print "<form action='newsinfo.php' method='post'  class='w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2' style='background-image: url(";
                    print $news[15][4];
                    print ")'>";
                ?>
               
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold"><?php print $news[15][1]; ?></h2><input type='hidden' name='id' value='15'>
                            <p class="mt-2 text-gray-400"></p>
                            <button type='submit' class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Читать</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
</div>

          
        </div>
    </main>


   
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