<footer class="bg-[#1F4D85] max-[830px]:hidden">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                <div class="md:flex md:justify-between">
                    <div class="flex">
                        <div class="mb-6 md:mb-0">
                            <a href="https://flowbite.com/" class="flex items-center">
                                <img src="<?php echo get_url('/assets/frontend/Logo/flogo.png'); ?>" class="w-[160px]" alt="FlowBite Logo">
                            </a>
                        </div>
                        <div class="flex flex-col mt-3 ml-4 mb-6 md:mb-0 justify-start">
                            <span class=" text-[18px] font-bold text-white">МБАЛ "Д-р Атанас Дафовски" АД-Кърджали</span>
                            <span class="text-[20px] text-white">вашето място за здраве и грижа</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-[#D6B361]">Научи повече</h2>
                            <ul class="text-white font-medium">
                              <li><a href="/about" class="hover:underline">За нас</a></li>
                              <li><a href="/history" class="hover:underline">История</a></li>
                              <li><a href="/photogallery" class="hover:underline">Фото галерия</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-[#D6B361]">Полезни страници</h2>
                            <ul class="text-white font-medium">
                                <li><a href="/separate" class="hover:underline">Отделения</a></li>
                                <li><a href="/structure" class="hover:underline">Структура на болницата</a></li>
                                <li><a href="/maps" class="hover:underline">Карта</a></li>
                                <li><a href="/management" class="hover:underline">Ръководство</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="bg-[#1F4D85] w-full pl-5 py-10 min-[830px]:hidden">
            <div class="w-full min-[600px]:flex">
                <div class="flex min-[600px]:w-[60%]">
                    <div class="mb-6">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="<?php echo get_url('/assets/frontend/Logo/flogo.png'); ?>" class="w-[160px]" alt="FlowBite Logo">
                        </a>
                    </div>
                    <div class="flex flex-col ml-4 mr-2 mb-6 justify-center">
                        <span class=" text-[14px] font-normal text-white">МБАЛ "Д-р Атанас Дафовски" АД-Кърджали</span>
                        <span class="text-[13px] text-white">вашето място за здраве и грижа</span>
                    </div>
                </div>

                <div class="w-full flex flex-col min-[600px]:w-[40%]">
                    <div class="flex">
                        <div><img src="<?php echo get_url('/assets/frontend/subFooterIcons/PhoneCall.svg'); ?>"></div>
                        <div class="flex flex-col pl-[10px]">
                            <span class="text-[11px] text-white">Свържете се с нас</span>
                            <span class="text-[13px] text-white">+359 361 683 48</span>
                        </div>
                    </div>
                    <div class="flex mt-4">
                        <div><img src="<?php echo get_url('/assets/frontend/subFooterIcons/GmaiIcon.svg'); ?>"></div>
                        <div class="flex flex-col pl-[10px]">
                            <span class="text-[11px] text-white">Email us</span>
                            <span class="text-[13px] text-white">hospital_kj@abv.bg</span>
                        </div>
                    </div>
                    <div class="flex mt-4">
                        <div><img src="<?php echo get_url('/assets/frontend/subFooterIcons/blueLocation.svg'); ?>"></div>
                        <div class="flex flex-col pl-[10px]">
                            <span class="text-[11px] text-white">Адрес</span>
                            <span class="text-[13px] text-white">бул. „Беломорски“ 53</span>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="grid grid-cols-2 mt-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-[#D6B361]">Научи повече</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li><a href="/about" class="hover:underline">За нас</a></li>
                      <li><a href="/history" class="hover:underline">История</a></li>
                      <li><a href="/photogallery" class="hover:underline">Фото галерия</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-[#D6B361]">Полезни страници</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li><a href="/separate" class="hover:underline">Отделения</a></li>
                        <li><a href="/structure" class="hover:underline">Структура на болницата</a></li>
                        <li><a href="/maps" class="hover:underline">Карта</a></li>
                        <li><a href="/management" class="hover:underline">Ръководство</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            function toggleMenu() 
            {
              document.getElementById("menu").classList.toggle("hidden");
              document.getElementById("menuIcon").classList.toggle("hidden");
              document.getElementById("closeIcon").classList.toggle("hidden");
            }

            function toggleSubMenu(id) 
            {
                document.getElementById("submenu-" + id).classList.toggle("hidden");
                document.getElementById("changebg-" + id).classList.toggle("bg-white");
                document.getElementById("changebg-" + id).classList.toggle("text-[#1F4D85]");
                document.getElementById("changebg-" + id).classList.toggle("text-white");
                document.getElementById("dropdown-" + id).classList.toggle("stroke-[#1F4D85]");
                document.getElementById("dropdown-" + id).classList.toggle("stroke-white");
            }
        </script>
    </body>
</html>