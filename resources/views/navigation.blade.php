<header class="bg-white w-full fixed z-10">
    <div class="bg-white border-b-2 border-background 2xl:px-72 xl:px-52 lg:px-24">
        <div class="flex flex-row items-center justify-between pr-5 lg:pr-0">
            <div class="px-5 lg:px-0 py-2.5 flex flex-row items-center">
                <div class="pr-5">
                    <img src="imgs/logo.png" alt="logo" class="h-16 min-w-14 lg:h-[100px] lg:min-w-[90px] object-fill">
                </div>
                <div class="text-black text-xs leading-[12px] sm:text-base sm:leading-[16px] lg:text-2xl lg:leading-[24px]">
                    <p class="font-bold pb-1.5">Институт довузовской подготовки</p>
                    <p>МИРЭА — Российского технологического&nbsp;университета</p>
                </div>
            </div>
            <div class="hidden lg:flex lg:flex-row lg:items-center">
                <a href="#" class="bg-pink py-4 px-5 uppercase text-white text-center font-bold
                rounded-lg block duration-300 hover:scale-110 hover:duration-300">
                    заказать&nbsp;звонок
                </a>
                <a href="#" class="block px-8 duration-300 hover:scale-110 hover:duration-300">
                    <img class="max-w-none" src="imgs/search.svg" alt="">
                </a>
                <a href="#" class="block duration-300 hover:scale-110 hover:duration-300">
                    <img class="max-w-none" src="imgs/profile.svg" alt="">
                </a>
            </div>
            <div id="nav" class="cursor-pointer pr-5 lg:hidden">
                <script>console.log("z")</script>
                <div id="icon" role="button" class="relative w-4 h-8 left-2 flex justify-center items-center before:absolute
         before:w-7 before:h-0.5 before:bg-black before:translate-y-[-10px] before:shadow-[0_10px] before:shadow-black
         before:delay-500 after:absolute after:w-7 after:h-0.5 after:bg-black after:translate-y-[10px] after:delay-500">
                </div>
            </div>
        </div>
    </div>
    <nav class="w-full flex flex-row justify-center hidden lg:block">
        <ul class="flex flex-row justify-center list-none text-black text-lg leading-[18px]">
            <li class="p-5">
                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="cursor-pointer" type="button">
                    Программы <img class="inline" src="imgs/programms_after.svg" alt="">
                </button>
                <div id="dropdown" class="z-10 hidden absolute bg-white rounded w-64 m-0"
                     data-popper-placement="bottom" style="inset: 0 auto auto 0; transform: translate3d(351px, 682px, 0px);">
                    <ul aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="block px-4 py-2 p hover:bg-gray-100">Физико-математическая школа</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 p hover:bg-gray-100">Подготовка к ЕГЭ для 11&nbsp;классов</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 p hover:bg-gray-100">Подготовка к ЕГЭ в малых группах</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 p hover:bg-gray-100">Для сдающих творческий экзамен</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 p hover:bg-gray-100">Для поступающих в магистратуру</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="pt-5">
                <a href="#" class="p-5 duration-300 p hover:duration-300 hover:text-white hover:bg-pink">Документы</a>
            </li>
            <li class="pt-5">
                <a href="#" class="p-5 duration-300 p hover:duration-300 hover:text-white hover:bg-pink">FAQ</a>
            </li>
            <li class="pt-5">
                <a href="#" class="p-5 duration-300 p hover:duration-300 hover:text-white hover:bg-pink">Полезно знать</a>
            </li>
            <li class="pt-5">
                <a href="#" class="p-5 duration-300 p hover:duration-300 hover:text-white hover:bg-pink">Медиа</a>
            </li>
            <li class="pt-5">
                <a href="/contacts" class="p-5 duration-300 p hover:duration-300 hover:text-white hover:bg-pink">Контакты</a>
            </li>
        </ul>
    </nav>
</header>
