<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="psychologypage.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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

    <div class="flex ml-6 mt-6">
        <a href="psychologypage.html">
            <button class="border border-teal-500 text-teal-500 block rounded-md font-bold py-4 px-6 mr-2 flex items-center hover:bg-blue-400 hover:text-white">
            <svg class="h-5 w-5 mr-2 fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                <path id="XMLID_10_" d="M438,372H36.355l72.822-72.822c9.763-9.763,9.763-25.592,0-35.355c-9.763-9.764-25.593-9.762-35.355,0 l-115.5,115.5C-46.366,384.01-49,390.369-49,397s2.634,12.989,7.322,17.678l115.5,115.5c9.763,9.762,25.593,9.763,35.355,0 c9.763-9.763,9.763-25.592,0-35.355L36.355,422H438c13.808,0,25-11.193,25-25S451.808,372,438,372z"></path>
            </svg>
            Назад
        </button>
        </a>
    </div>

    <div class="mt-6">
        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between"><span class="font-light text-gray-600">Июнь 1,
                    2020</span><a href="#"
                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Любовь</a>
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
                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Любовь</a>
            </div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti deserunt rerum, quia eligendi illo facilis unde aut nostrum ipsa ab at sint asperiores dicta dolor obcaecati adipisci ullam quam recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quisquam quibusdam maxime dolor, consequatur nam laborum placeat omnis adipisci dolorem ipsum? Ab voluptates officiis reprehenderit assumenda numquam, nihil perferendis eaque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus expedita nihil nam voluptatum aut architecto magni maiores asperiores id, ratione sapiente eos quos praesentium tenetur facilis illum, perspiciatis quasi!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dignissimos veritatis corrupti molestias ratione dolorem deleniti obcaecati provident dicta incidunt necessitatibus ducimus saepe, vero, in blanditiis possimus iure. Repellendus, ipsam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor corporis facere voluptas libero aperiam, commodi eaque officia, praesentium ex laboriosam, repudiandae repellat tempore. At culpa eius eaque quibusdam obcaecati molestias?
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, at, dolorum corrupti quo voluptatibus omnis saepe, natus rerum magnam id tenetur eligendi! Esse perferendis magni voluptate dolore deleniti numquam eum.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quaerat aspernatur voluptatem minus vero. Aperiam totam ipsa, autem aliquid provident numquam nostrum! Asperiores sunt veniam dignissimos odio officia fuga ab.</p>
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
                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Любовь</a>
            </div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam dolorem suscipit eligendi iure nulla. Facilis exercitationem laboriosam voluptatum minima quaerat sed error, minus cumque optio ducimus excepturi assumenda omnis.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, corrupti nisi! Cupiditate, delectus ipsam velit iure aspernatur nostrum. Quidem, ullam. Magni nihil, temporibus libero distinctio culpa suscipit reprehenderit autem alias.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia quod ipsum magni iure delectus laudantium dignissimos aspernatur itaque eius libero eveniet, veniam consequuntur reiciendis vel quidem. Ut id quae asperiores.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae assumenda, quidem odit unde, eum repellendus tempore minus consequatur accusantium hic eaque rem aut, dicta fuga impedit at! Temporibus, illo excepturi.</p>
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
                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Любовь</a>
            </div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate voluptates, hic recusandae vitae quam eos, minima assumenda impedit similique animi asperiores? Ex hic maxime accusamus modi sunt quam, optio magnam.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui nobis non tenetur voluptatibus saepe ratione iusto facilis sunt est dolorem voluptas aspernatur, praesentium ipsa unde nesciunt sequi ducimus officia molestiae.</p>
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
                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Любовь</a>
            </div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Мой отчим изменяет бобру с дуплом!</a>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum aspernatur dignissimos illum unde, ratione accusantium, perspiciatis quo cupiditate reiciendis delectus minus quod ipsa doloribus eos voluptate quidem architecto qui.</p>
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

    <div class="mt-6 bg-gray-100 pt-12">
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
</body>
</html>