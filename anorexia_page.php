<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анорексия</title>
    <link rel="stylesheet" href="psychologypage.css">
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
    </style>

</head>
<body>
    <nav class="bg-white shadow-lg">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="Main.html">PsychoToday</a>
               </div>
                <div class="md:hidden">
                    <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row hidden md:block -mx-2">
              <ul>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2"></a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Психология</a>
                <a href="NewsPageNEW.php" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Статьи</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Тесты</a>
                <a href="BooksPageNEW.php" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Книги</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Советы</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Релакс</a>
                <!--<a href="Glossary.php" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Глоссарий</a>-->
                <div class="dropdown text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">
                    <button class="dropbtn">Глоссарий</button>
                    <div class="dropdown-content">
                        <a href="Glossary.php">Словарь основных психологических терминов</a>
                        <a href="Glossary2.php">Глоссарий психических заболеваний</a>
                        <a href="Glossary3.php">Глоссарий нервных заболеваний</a>
                    </div>
                </div>
                <a href="Contacts.php" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Контакты</a>
                <div class="dropdown text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">
                    <button class="dropbtn">Войти</button>
                    <div class="dropdown-content">
                        <a href="Glossary.php">Войти</a>
                        <a href="Glossary2.php">Регистрация</a>
                    </div>
                </div>
                </ul>
            </div>
        </div>
    </nav>
<div class="overflow-x-hidden bg-gray-100">


<div class="px-6 py-8">
    <div class="container flex justify-between mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Посты</h1>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between">
                        <span class="font-light text-gray-600">Июнь 1, 2020</span>
                        <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-400">Насилие</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                            reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
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
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-400">Насилие</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                            reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
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
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-400">Насилие</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                            reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
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
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-400">Насилие</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                            reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
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
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-400">Насилие</a>
                    </div>
                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                            reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
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
            <div class="mt-8">
                <div class="flex">
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                        назад
                    </a>
                
                    <a href="./violence_page.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-pink-500 hover:text-white">
                        1
                    </a>
                
                    <a href="./violence_page2.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-pink-500 hover:text-white">
                        2
                    </a>
                
                    <a href="psychologypage3.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-pink-500 hover:text-white">
                        3
                    </a>
                
                    <a href="./violence_page2.php" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-pink-500 hover:text-white">
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

<div class="bg-gray-100 pt-12">
<div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-center">
  <div class="p-5 w-48 ">
     <div class="text-xs uppercase text-gray-500 font-medium">Дом</div>
     <a class="my-3 block" href="/#">Психология <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Статьи <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Тесты <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Советы <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Релакс <span class="text-teal-600 text-xs p-1"></span></a> 
  </div>
  <div class="p-5 w-48 ">
     <div class="text-xs uppercase text-gray-500 font-medium">Пользователь</div>
     <a class="my-3 block" href="/#">Войти <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Новый пользователь <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a> 
  </div>
  <div class="p-5 w-48">
     <div class="text-xs uppercase ">Database разработчик</div>
     <a class="my-3 block" href="/#">Айткожа Алия <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a> 
  </div>
  <div class="p-5 w-48 ">
     <div class="text-xs ">Backend разработчики</div>
     <a class="my-3 block" href="/#">Айгерим Бердимурат <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Бибисара Ондирис <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a> 
  </div>
  <div class="p-5 w-48">
     <div class="text-xs ">Frontend разработчик</div>
     <a class="my-3 block" href="/#">Жумабаев Алихан <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#"> <span class="text-teal-600 text-xs p-1"></span></a> 
  </div>
  <div class="p-5 w-48 ">
     <div class="text-xs uppercase text-gray-500 font-medium">Наши контакты</div>
     <a class="my-3 block" href="/#">8-800-535-35-35 <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">contact@company.com <span class="text-teal-600 text-xs p-1"></span></a> 
  </div>
</div>
</div>
</div>
</body>
</html>