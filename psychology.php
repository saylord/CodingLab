<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Психология</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .tab {
        overflow: hidden;
        }
        .tab-content {
        max-height: 0;
        transition: all 0.5s;
        }
        input:checked + .tab-label .test {
            background-color: #6366F1;
        }
        input:checked + .tab-label .test svg {
            transform: rotate(180deg);
            stroke: #fff;
        }
        input:checked + .tab-label::after {
        transform: rotate(90deg);
        }
        input:checked ~ .tab-content {
        max-height: 100vh;
        padding: 20px;
        }




        .section_nav{
        width:100%; 
        max-width:1200px; 
        margin:0px auto; 
        display:table; 
        position:relative;
    }

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

    </style>

</head>
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
<div class="overflow-x-hidden bg-gray-100">


<div class="px-6 py-8">
    <div class="container flex justify-between mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Посты</h1>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="./love_page.html"
                            class="px-2 py-1 font-bold text-gray-100 bg-pink-500 rounded hover:bg-pink-400">Психоматика</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Как вернуть ребенка к учебе?</a>
                        <p class="mt-2 text-gray-600">Не было печали, как дочь (9 класс) влюбилась, явно безответно. Это грустно само по себе, но еще печальнее, что ей стало не до учебы. Это в 9-то классе, когда на носу ОГЭ! Как повернуть ребенка к учебе, я не знаю, посоветуйте,что делать?</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <div><a href="#" class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">Аноним</h1>
                            </a></div>
                    </div>
                </div>
            </div>


            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Март 4,
                            2019</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-purple-500 rounded hover:bg-purple-400">Психосоматика</a>
                    </div>
                    <div class="mt-2"><a href="#"
                            class="text-2xl font-bold text-gray-700 hover:underline">О наркотиках для школьников
</a>
                        <p class="mt-2 text-gray-600">Нужно ли проводить беседы или лекции о наркотиках для школьников 6-7 классов? Или отложить эти мероприятия на 8-9 класс, когда они начнут воспринимать эти беседы серьезно?</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <div><a href="#" class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">Аноним</h1>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Февраль 14, 2019</span>
                        <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Сресс:
                    КАК ВЫЙТИ В РЕАЛЬНОСТЬ И НЕ ЖИТЬ ИЛЛЮЗИЕЙ?</a>
                        <p class="mt-2 text-gray-600">Здравствуйте! Как выйти в реальность? А не жить в иллюзии. </p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <div><a href="#" class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">Аноним</h1>
                            </a></div>
                    </div>
                    
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Декабрь 23, 2018</span>
                        <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">У молодого человека странное поведение, я не понимаю: он такой всегда или все из-за стрессов?</a>
                        <p class="mt-2 text-gray-600">Познакомилась с парнем, ему 23, отношения завязались быстро. Изначально был адекватный и спокойный. А спустя время он начал показывать свой вспыльчивый характер. Если что-то идёт не так, его первый порыв - уйти и закончить отношения. Я всегда вывозила все и разруливала ситуацию, успокаивала и поддерживала. А он лишь срывается. Дело в том, что он человек очень серьезный и…</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <div><a href="#" class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">Аноним</h1>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Август 10,
                            2018</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-yellow-500 rounded hover:bg-yellow-400">Стресс</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Страхи и ожидание несчастья. Как вернуть покой в жизнь?</a>
                        <p class="mt-2 text-gray-600">Мне 35 лет, живу в гражданском браке с хорошей девушкой, думаем расписаться. Но мне последнее время очень тревожно на душе. Постоянно думаю о том, что может произойти что то плохое, могут уволить с должности, обидеть вечером возле подъезда, что может упасть самолет, когда надо срочно лететь по делам в другой город. Стал страдать бессонницей. Года два назад у меня был плохой опыт –…</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <a href="#" class="text-blue-500 hover:underline"></a>
                        <div><a href="#" class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">Аноним</h1>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <div class="flex">
                    <a href="psychology.php" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                        назад
                    </a>
                
                    <a href="psychology.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-indigo-500 hover:text-white">
                        1
                    </a>
                
                    <a href="psychologypage2.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-indigo-500 hover:text-white">
                        2
                    </a>
                
                    <a href="psychologypage3.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-indigo-500 hover:text-white">
                        3
                    </a>
                
                    <a href="psychologypage2.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-indigo-500 hover:text-white">
                        вперед
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden w-4/12 -mx-8 lg:block">
            <div class="px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Психологи</h1>
                <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                    <ul class="-mx-4">
                        <li class="flex items-center"><img
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                            <p><a href="/Employeepage/profile.html" class="mx-1 font-bold text-gray-700 hover:underline">Федр Иванов</a><span
                                    class="text-sm font-light text-gray-700"></span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                            <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Петр Палыч</a><span
                                    class="text-sm font-light text-gray-700"></span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                            <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Константин Орехов</a><span
                                    class="text-sm font-light text-gray-700"></span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                            <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Услада Любовна</a><span
                                    class="text-sm font-light text-gray-700"></span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                            <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Теть Галя</a><span class="text-sm font-light text-gray-700"></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-8 mt-10">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Темы</h1>
                <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <ul>
                        <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-blue-500 hover:underline">-
                                Насилие</a></li>
                        <li class="mt-2"><a href="./love_page.html"
                                class="mx-1 font-bold text-gray-700 hover:text-pink-500 hover:underline">-
                                Любовь</a></li>
                        <li class="mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-purple-500 hover:underline">- Психосоматика</a>
                        </li>
                        <li class="mt-2"><a href="./stress_page.html"
                                class="mx-1 font-bold text-gray-700 hover:text-red-500 hover:underline">-
                                Стресс</a></li>
                        <li class="flex items-center mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-yellow-500 hover:underline">-
                                Анерексия</a></li>
                        <li class="flex items-center mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-indigo-500 hover:underline">- Все</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-8 mt-10">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Новое</h1>
                <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-center"><a href="#"
                            class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">Психосоматика</a>
                    </div>
                    <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">Название Темы</a></div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center"><img
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                                class="mx-3 text-sm text-gray-700 hover:underline">Аноним</a></div><span
                            class="text-sm font-light text-gray-600">Июнь 1, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
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