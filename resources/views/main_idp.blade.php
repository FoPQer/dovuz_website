
<main class="bg-background pt-1">
    <div class="h-20 lg:h-44">

    </div>
    <!-- Боковое меню -->
    <section id="side_bar" class="fixed hidden w-max h-0 z-10 bg-background px-5">
        <div>
            <a href="#" class="block text-black pt-8 font-bold uppercase underline">заказать звонок</a>
            <a href="/lk" class="block text-black py-5 font-bold uppercase underline">Личный кабинет</a>
            <label>
                <input name="search" type="text" placeholder="Я ищу..."
                       class="w-full px-2.5 h-7 border border-grey rounded-lg placeholder:text-grey">
            </label>
            <ul class="list-none text-black text-lg leading-[18px]">
                <li>
                    <details class="duration-500 py-5 ">
                        <summary class="list-none flex cursor-pointer open:after:rotate-180 after:content-[url('imgs/programms_after.svg')]
                                    after:pl-4 after:block">
                            Программы
                        </summary>
                        <ul class="pl-5">
                            <li class="py-5">
                                <a href="#" class="block p underline">Физико-математическая школа</a>
                            </li>
                            <li class="pb-5">
                                <a href="#" class="block p underline">Подготовка к ЕГЭ для 11 классов</a>
                            </li>
                            <li class="pb-5">
                                <a href="#" class="block p underline">Подготовка к ЕГЭ в малых группах</a>
                            </li>
                            <li class="pb-5">
                                <a href="#" class="block p underline">Для сдающих творческий экзамен</a>
                            </li>
                            <li>
                                <a href="#" class="block p underline">Для поступающих в магистратуру</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <a href="#" class="p underline">Документы</a>
                </li>
                <li class="pt-5">
                    <a href="#" class="p underline">FAQ</a>
                </li>
                <li class="pt-5">
                    <a href="#" class="p underline">Полезно знать</a>
                </li>
                <li class="pt-5">
                    <a href="#" class="p underline">Медиа</a>
                </li>
                <li class="py-5">
                    <a href="/contacts" class="p underline">Контакты</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Блок "Слушай Решай Поступай" -->
    <section class="p-5 lg:flex lg:flex-row justify-between 2xl:px-72 xl:px-52 lg:px-24">
        <div class="w-full lg:pr-5 xl:pr-8 lg:w-1/2">
            <article class="rounded-lg min-h-208 h-auto lg:h-full bg-cover bg-center bg-[url('imgs/main_background.png')]">
                <div class="font-medium text-2xl leading-6 lg:text-4xl uppercase pl-9 pt-9">
                    <h2 class="text-dark_yellow font-rubik">Слушай</h2>
                    <h2 class="text-pink font-rubik">Решай</h2>
                    <h2 class="text-purple font-rubik">Поступай</h2>
                </div>
            </article>
        </div>
        <div class="w-full pt-5 lg:pt-0 lg:w-1/2">
            <a href="#" class="bg-purple block text-center rounded-lg py-14 w-full px-5 duration-300 hover:scale-[1.03] hover:duration-300">
                <span class="text-white uppercase font-bold">Физико-математическая школа</span>
            </a>
            <div class="flex flex-row flex-wrap w-full justify-between">
                <div class="w-full pt-5 sm:pr-3.5 xl:pt-8 sm:w-1/2">
                    <a href="#" class="bg-dark_red flex justify-center items-center h-full text-center rounded-lg py-14 px-5 duration-300 hover:scale-105 hover:duration-300">
                        <span class="text-white uppercase font-bold">Для сдающих творческий экзамен</span>
                    </a>
                </div>
                <div class="w-full pt-5 sm:pl-3.5 xl:pt-8 sm:w-1/2">
                    <a href="#" class="bg-pink flex justify-center items-center h-full text-center rounded-lg py-14 px-5 duration-300 hover:scale-105 hover:duration-300">
                        <span class="text-white uppercase font-bold">Подготовка к ЕГЭ для 11&nbsp;классов</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-row flex-wrap w-full justify-between">
                <div class="w-full pt-5 sm:pr-3.5 xl:pt-8 sm:w-1/2">
                    <a href="#" class="bg-orange flex justify-center items-center h-full text-center rounded-lg py-14 px-5 duration-300 hover:scale-105 hover:duration-300">
                        <span class="text-white uppercase font-bold">Подготовка к ЕГЭ в малых группах</span>
                    </a>
                </div>
                <div class="w-full pt-5 sm:pl-3.5 xl:pt-8 sm:w-1/2">
                    <a href="#" class="bg-dark_yellow flex justify-center items-center h-full text-center rounded-lg py-14 px-5 duration-300 hover:scale-105 hover:duration-300">
                        <span class="text-white uppercase font-bold">Для поступающих в магистратуру</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Блок Об институте -->
    <section class="w-full bg-white">
        <article class="p-5 2xl:px-72 xl:px-52 lg:px-24">
            <h2 class="font-bold text-black lg:text-5xl pb-5">Об институте довузовской подготовки</h2>
            <p class="text-black">Институт довузовской подготовки — структурное подразделение
                ведущего государственного вуза МИРЭА — Российского технологического университета. Обучение по программам
                Института помогает абитуриентам поступить в наш университет и другие крупные государственные вузы уже
                более 30 лет
            </p>
        </article>
        <article class="bg-dark_red w-full 2xl:px-72 xl:px-52 lg:px-24">
            <div class="swiper"> <!-- TODO: Кнопки перехода за границами -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide p-5">
                        <div class="rounded-lg bg-cover bg-center flex flex-col justify-end h-52
                         bg-[url('imgs/chats_telegram.png')]">
                            <h3 class="uppercase text-xl leading-[20px] text-white font-bold block p-4 rounded-b-lg shadow">Координационные
                                чаты в telegram
                            </h3>
                        </div>
                        <p class="text-white pt-5">
                            Для связи слушателей, их родителей и администрации для решения координационных вопросов,
                            отправки домашних заданий и т.д.
                        </p>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide p-5">
                        <div class="rounded-lg bg-cover bg-center flex flex-col justify-end h-52
                         bg-[url('imgs/advantages.png')]">
                            <h3 class="uppercase text-white font-bold block p-4 rounded-b-lg
                            shadow">
                                Преимущества при поступлении на бюджет
                            </h3>
                        </div>
                        <p class="text-white pt-5">
                            Сертификат выпускника Института довузовской подготовки даёт преимущественное право при
                            поступлении при прочих равных условиях
                        </p>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide p-5">
                        <div class="rounded-lg bg-cover bg-center flex flex-col justify-end h-52
                         bg-[url('imgs/discounts.png')]">
                            <h3 class="uppercase text-dark_yellow font-bold block p-4
                            rounded-b-lg shadow">
                                Скидки при поступлении на договорной основе
                            </h3>
                        </div>
                        <p class="text-white pt-5">
                            Сертификат выпускника Института довузовской подготовки даёт право на максимально возможную
                            скидку до 20% при поступлении на программы бакалавриата или специалитета (скидка фиксируется
                            на весь срок обучения и не зависит от успеваемости студента)
                        </p>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide p-5">
                        <div class="rounded-lg bg-cover bg-center flex flex-col justify-end h-52
                         bg-[url('imgs/teachers.png')]">
                            <h3 class="uppercase text-white font-bold block p-4 rounded-b-lg
                            shadow">
                                Преподавательский состав
                            </h3>
                        </div>
                        <p class="text-white pt-5">
                            В числе преподавателей – сотрудники вуза и приглашённые специалисты с большим опытом работы,
                            в том числе члены экспертных комиссий ЕГЭ, разработчики заданий и члены оргкомитетов,
                            методических комиссий и жюри олимпиад
                        </p>
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide p-5">
                        <div class="rounded-lg bg-cover bg-center flex flex-col justify-end h-52
                         bg-[url('imgs/results.png')]">
                            <h3 class="uppercase text-dark_yellow font-bold block p-4
                            rounded-b-lg shadow">
                                Результаты подготовки к экзаменам
                            </h3>
                        </div>
                        <p class="text-white pt-5">
                            65% выпускников Института довузовской подготовки подают документы в
                            МИРЭА — Российский технологический университет
                        </p>
                    </div>
                    <!-- Slide 6 -->
                    <div class="swiper-slide p-5">
                        <div class="rounded-lg bg-cover bg-center flex flex-col justify-end h-52
                         bg-[url('imgs/programms.png')]">
                            <h3 class="uppercase text-dark_yellow font-bold block p-4
                            rounded-b-lg shadow">
                                Официальные программы РТУ МИРЭА
                            </h3>
                        </div>
                        <p class="text-white pt-5">
                            Договор заключается непосредственно с МИРЭА — Российским технологическим университетом.
                            Возможно оформление налогового вычета за обучение
                        </p>
                    </div>
                </div>
                <div class="static">
                    <div class="swiper-button-prev bg-dark_yellow text-white2 rounded-full w-10 h-10 absolute top-32
                    left-0 lg:left-[-10] after:content-[url('imgs/prev.svg')] after:leading-[14px] duration-300
                    hover:scale-105 hover:duration-300"></div>
                    <div class="swiper-button-next bg-dark_yellow text-white2 rounded-full w-10 h-10 absolute top-32
                    right-0 after:content-[url('imgs/next.svg')] after:leading-[14px] duration-300
                    hover:scale-105 hover:duration-300"></div>
                </div>
            </div>
        </article>
    </section>
    <!-- Блок Новости -->
    <section class="px-5 py-5 2xl:px-72 xl:px-52 lg:px-24">
        <h2 class="lg:text-5xl text-black font-bold py-5 md:py-8">Новости</h2>
        <div class="md:flex md:flex-row pb-5 md:pb-8">
            <div class="pr-0 md:pr-4 w-full md:w-1/2">
                <article class="bg-white rounded-lg h-full">
                    <img src="imgs/news_1.png" alt="">
                    <div class="p-4 font-bold p-5 text-sm">
                        <span class="text-grey">30 марта 2020</span>
                        <span class="uppercase text-black py-4">информация по дистанционному обучению для
                            подготовительных курсов егэ
                        </span>
                        <a href="#" target="_blank" class="text-pink underline uppercase
                        after:content-[url('imgs/continue.svg')] after:pl-1.5">
                            Подробнее
                        </a>
                    </div>
                </article>
            </div>
            <div class="pl-0 md:pl-4 w-full md:w-1/2">
                <article class="bg-white rounded-lg my-5 md:my-0 h-full">
                    <img src="imgs/news_2.png" alt="">
                    <div class="p-4 font-bold py-5 text-sm">
                        <span class="text-grey">17 марта 2020</span>
                        <span class="uppercase text-black py-4">созданы обсуждения по первым заданиям для слушателей
                            фмш
                        </span>
                        <a href="#" target="_blank" class="text-pink underline uppercase
                        after:content-[url('imgs/continue.svg')] after:pl-1.5">
                            Подробнее
                        </a>
                    </div>
                </article>
            </div>
        </div>
        <div class="md:pb-12">
            <a href="#"
               class="bg-pink py-4 px-5 block md:inline-block uppercase text-white text-center
               font-bold rounded-lg duration-300 hover:scale-110 hover:duration-300">
                все новости
            </a>
        </div>
    </section>
