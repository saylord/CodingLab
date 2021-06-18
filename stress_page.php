<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стресс</title>
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
                <div>
                    <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option>Последние</option>
                        <option>Прошлоя неделя</option>
                    </select>
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between">
                        <span class="font-light text-gray-600">Июнь 1, 2020</span>
                        <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
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
                    <footer class="mt-6 border-t border-grey-lighter text-sm flex">
                        <a href="#" class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                          </svg>
                          <span>Liked</span>
                        </a>
                        <a href="comment.html" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle h-6 w-6 mr-1">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                          </svg>
                          <span>Ответить</span>
                        </a>
                      </footer>
                </div>
            </div>

            <section class="shadow row mt-6 bg-white rounded-lg">
                <div class="tabs">
                    <div class="border-b tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                            <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label" for="chck1">
                                <span class="text-grey-darkest font-bold text-xl">
                                    Вы можете задать свой вопрос
                                </span>
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>
                            </header>
                            <div class="tab-content">
                                <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                                    <div class="relative inline-block w-full text-gray-800 mb-6">
                                        <select class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 bg-gray-100 border  appearance-none focus:shadow-outline" placeholder="Выберите категорию">
                                          <option>Выберите категорию</option>
                                          <option>Любовь</option>
                                          <option>Стресс</option>
                                          <option>Анорексия</option>
                                          <option>Психосоматика</option>
                                          <option>Насилие</option>
                                          <option>Другое</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                          <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                                        </div>
                                      </div>
                                    <input class="title bg-gray-100 border border-indigo-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Оглавление" type="text">
                                    <textarea class="description border-indigo-300 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Описание"></textarea>                                    
                                    <!-- buttons -->
                                    <div class="buttons flex m-2">
                                      <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Отмена</div>
                                      <div class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Опубликовать</div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
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
                    <footer class="mt-6 border-t border-grey-lighter text-sm flex">
                        <a href="#" class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                          </svg>
                          <span>Liked</span>
                        </a>
                        <a href="comment.html" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle h-6 w-6 mr-1">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                          </svg>
                          <span>Ответить</span>
                        </a>
                      </footer>
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
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
                    <footer class="mt-6 border-t border-grey-lighter text-sm flex">
                        <a href="#" class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                          </svg>
                          <span>Liked</span>
                        </a>
                        <a href="comment.html" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle h-6 w-6 mr-1">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                          </svg>
                          <span>Ответить</span>
                        </a>
                      </footer>
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
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
                    <footer class="mt-6 border-t border-grey-lighter text-sm flex">
                        <a href="#" class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                          </svg>
                          <span>Liked</span>
                        </a>
                        <a href="comment.html" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle h-6 w-6 mr-1">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                          </svg>
                          <span>Ответить</span>
                        </a>
                      </footer>
                </div>
            </div>
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                            2020</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100 bg-red-500 rounded hover:bg-red-400">Стресс</a>
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
                    <footer class="mt-6 border-t border-grey-lighter text-sm flex">
                        <a href="#" class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                          </svg>
                          <span>Liked</span>
                        </a>
                        <a href="comment.html" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle h-6 w-6 mr-1">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                          </svg>
                          <span>Ответить</span>
                        </a>
                      </footer>
                </div>
            </div>
            <div class="mt-8">
                <div class="flex">
                    <a href="psychologypage.html" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                        назад
                    </a>
                
                    <a href="psychologypage.html" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        1
                    </a>
                
                    <a href="psychologypage2.html" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        2
                    </a>
                
                    <a href="psychologypage3.html" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        3
                    </a>
                
                    <a href="psychologypage2.html" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
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
                        <li class="mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-pink-500 hover:underline">-
                                Любовь</a></li>
                        <li class="mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-purple-500 hover:underline">- Психосоматика</a>
                        </li>
                        <li class="mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-red-500 hover:underline">-
                                Стресс</a></li>
                        <li class="flex items-center mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-yellow-500 hover:underline">-
                                Анерексия</a></li>
                        <li class="flex items-center mt-2"><a href="#"
                                class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Все</a>
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