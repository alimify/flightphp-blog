<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?> <?php echo $title_prefix; ?></title>
        <!-- <link rel="stylesheet" href="/output.css"> -->
        <link rel="stylesheet" href="/style.css"> 
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/x-icon" href="<?php echo get_url('/assets/frontend/Logo/logo.svg'); ?>">
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
        <style>
            .topbar{
                width: 100%;
                height: 142px;            
                display: flex;
                justify-content: end;
                align-items:center;
                /* background-color: aqua; */
            }
            *{
                text-decoration: none;
                list-style: none;
                font-family: "IBM Plex Serif", serif;
            }

            .custom_content a:link,
            .custom_content a:visited,
            .custom_content a:hover,
            .custom_content a:active {
              color: blue !important;
              text-decoration:  underline;
            }

            body{
                padding: 0;
                margin: 0;            
            }  
            .tb-p{
                color: #1F4D85;
                font-size: 20px;
                font-weight: 700;
            }
            .topbardata{
                /* background-color: blueviolet; */
                width: fit-content;
                margin-right: 10dvw;
                display: flex;
                flex-direction: column;
                
            }
            .topbarIconDiv{
                display: flex;
                justify-content: space-between;
                padding-top: 8px;
            }
            .iconboxText{
                color: #1F4D85;
                font-size: 15px;
                font-weight: 600;
            }
            .hover-icon:hover .icon path {
                stroke: #fff; 
            }
        </style>
    </head>
    <body>
        <div class="w-full max-[768px]:h-auto flex justify-end items-center pt-[20px] pb-[20px]">
            <div class="w-fit max-[768px]:w-[300px] max-[375px]:w-[200px] mr-[10dvw] max-[768px]:mr-[2dvw]  flex flex-col">
                <div class="z-[1]">
                    <p class=" text-[#1F4D85] max-[490px]:text-[13px] max-[375px]:text-[12px] max-[490px]:font-extrabold text-lg font-bold  text-right max-[768px]:text-[15px]">МБАЛ "Д-р Атанас Дафовски" АД-Кърджали</p>
                </div>
                <div class="flex justify-between pt-[8px] max-[768px]:hidden">
                    <div>
                        <a target="_blank" href="https://www.facebook.com/hospitaldafovski"><img class="w-[20px]" src="<?php echo get_url('/assets/frontend/icons/facebook.svg'); ?>" alt="facebook"> </a>
                    </div>
                    <div class="flex">
                        <img class="w-[22px] pr-2" src="<?php echo get_url('/assets/frontend/icons/phone.svg'); ?>" alt="phone">
                        <p class="iconboxText"><a href="tel:+35936168266">+359 361 682 66</a></p>
                    </div>
                    <div class="flex">
                        <img class="w-[22px] pr-2" src="<?php echo get_url('/assets/frontend/icons/adtherate.svg'); ?>" alt="adarate">
                        <p class="iconboxText"><a href="mailto:hospital_kj@abv.bg">hospital_kj@abv.bg</a></p>
                    </div>
                </div>
            </div>
        </div>

        <nav class="flex items-center justify-end flex-wrap  max-lg:pt-[5px] max-lg:pb-[5px] max-md:pr-[0px] max-md:pl-[0px] bg-[#1F4D85]">
            <div class="block lg:hidden">
              <button onclick="toggleMenu()" class="flex items-center px-3 py-2 rounded text-black-500 hover:text-blackw-400">
                <svg id="menuIcon" class="fill-[#fff] w-[20px]" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
                <svg id="closeIcon" class="fill-[#fff] w-[15px] hidden" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <path xmlns="http://www.w3.org/2000/svg" opacity="0.9" d="M9 1.63687L7.36312 0L4.5 2.86313L1.63687 0L0 1.63687L2.86313 4.5L0 7.36312L1.63687 9L4.5 6.13688L7.36312 9L9 7.36312L6.13688 4.5L9 1.63687Z" fill="white"/>
                </svg>
              </button>
            </div>
            <div id="menu" class="max-lg:w-full max-[2560px]:w-[70%] max-[1900px]:w-[75%] max-[1400px]:w-[80%] max-[1250px]:w-[85%] lg:flex lg:items-center hidden max-[1024px]:pt-4 pr-[8%] max-[1500px]:pr-[3%] max-[1250px]:pr-[0%] pl-0">
              <div class="text-sm lg:flex-grow max-[1023px]:block flex justify-between max-[1250px]:justify-end">
                
          

                <div class="relative">
                  <a href="#" onclick="toggleSubMenu(100)" id="changebg-100" class="text-white flex justify-between lg:mt-0 max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-3 lg:py-4 max-[1023px]:py-[10px] font-bold">
                    ЗА НАС 
                    <svg id="dropdown-100" class="pl-[10px]  max-[1023px]:block fill-[transparent] stroke-white" width="20"  viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M7 1L4 4L1 1"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>  
                  </a>
                  <div id="submenu-100" class="z-50 lg:w-max max-[1023px]:static absolute hidden max-lg:bg-[#E6E6E6] lg:bg-white text-[#1F4D85] max-[1023px]:py-0 max-[1023px]:px-0 lg:mt-[0px]">
                    <a href="/history" class="hover:bg-[#1F4D85] hover:text-[#fff] flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>">ИСТОРИЯ</a>
                    <a href="/management" class="hover:bg-[#1F4D85] hover:text-[#fff] min-[1023px]:mt-2 flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:hover:bg-[#1F4D85] hover:text-[#fff] max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>">РЪКОВОДСТВО</a>
                    <a href="/structure" class="hover:bg-[#1F4D85] hover:text-[#fff] min-[1023px]:mt-2 flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:hover:bg-[#1F4D85] hover:text-[#fff] max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>">СТРУКТУРА</a>
                    <a href="/otherstructure" class="hover:bg-[#1F4D85] hover:text-[#fff] min-[1023px]:mt-2 flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:hover:bg-[#1F4D85] hover:text-[#fff] max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>">ДЪЩЕРНИ ДРУЖЕСТВА</a>
                    <a href="http://www.zop.hospital-kj.com"  class="hover:bg-[#1F4D85] hover:text-[#fff] min-[1023px]:mt-2 flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:hover:bg-[#1F4D85] hover:text-[#fff] max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>">ПРОФИЛ НА КУПУВАЧА</a>
                    <a href="/donation" class="hover:bg-[#1F4D85] hover:text-[#fff] min-[1023px]:mt-2 flex px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>">ДАРИТЕЛСКА СМЕТКА</a>
                  </div>
                </div>
            
                <div class="relative">
                  <a href="#" onclick="toggleSubMenu(500)" id="changebg-500" class="text-white flex justify-between lg:mt-0 max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-4 lg:py-4 max-[1023px]:py-[10px] font-bold">
                    АКТУАЛНО
                    <svg id="dropdown-500" class="pl-[10px]  max-[1023px]:block fill-[transparent] stroke-white" width="20"  viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M7 1L4 4L1 1"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                  <div id="submenu-500" class="z-50 lg:w-max max-[1023px]:static absolute hidden max-lg:bg-[#E6E6E6] lg:bg-white text-[#1F4D85] max-[1023px]:py-0 max-[1023px]:px-0 lg:mt-[0px]">
                    <?php foreach (["/news" => "НОВИНИ", "/about1" => 'ПАЦИЕНТИТЕ ЗА НАС', "/about2" => 'МЕДИИТЕ ЗА НАС', "/contests" => 'ТЪРГОВЕ И КОНКУРСИ ПО ППЗПП',"/specialist" => 'ЗАПОВЕДИ, ПРАВИЛА, НАРЕДБИ', '/btsor' => 'БОЛНИЧЕН ЦЕНТЪР ЗА ОБУЧЕНИЕ И РАЗВИТИЕ / БЦОР', '/otherstructure/view/12' => 'ЗДРАВНО-КОНСУЛТАТИВНИЯТ ЦЕНТЪР ЗА МАЙЧИНО И ДЕТСКО ЗДРАВЕ']  as $url => $name2)  {  ?>
                        <a href="<?php echo $url ?>" class="hover:bg-[#1F4D85] hover:text-[#fff] flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>"><?php echo $name2 ?></a>
                   <?php } ?>

                  </div>
                </div>


                <a href="/separate" class="block lg:inline-block lg:mt-0 text-white max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-3 lg:py-4 max-[1023px]:py-[10px] font-bold"> 
                    ОТДЕЛЕНИЯ
                </a>

                <a href="/patient" class="block lg:inline-block lg:mt-0 text-white max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-3 lg:py-4 max-[1023px]:py-[10px] font-bold">
                    ЗА ПАЦИЕНТА
                </a>

                <div class="relative">
                  <a href="#" onclick="toggleSubMenu(700)" id="changebg-700" class="text-white flex justify-between lg:mt-0 max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-4 lg:py-4 max-[1023px]:py-[10px] font-bold">
                    УСЛУГИ
                    <svg id="dropdown-700" class="pl-[10px]  max-[1023px]:block fill-[transparent] stroke-white" width="20"  viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M7 1L4 4L1 1"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                  <div id="submenu-700" class="z-50 lg:w-max max-[1023px]:static absolute hidden max-lg:bg-[#E6E6E6] lg:bg-white text-[#1F4D85] max-[1023px]:py-0 max-[1023px]:px-0 lg:mt-[0px]">
                    <?php foreach ([ "/page/view/18" => "ПЛАТЕНИ УСЛУГИ ЦЕНОРАЗПИС", "/page/view/17" => "АДМИНИСТРАТИВНИ УСЛУГИ", "/procurement3" => 'СТАР АРХИВ']  as $url => $name2)  {  ?>
                        <a href="<?php echo $url ?>" class="hover:bg-[#1F4D85] hover:text-[#fff] flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>"><?php echo $name2 ?></a>
                   <?php } ?>
                  </div>
                </div>

                <div class="relative">
                  <a href="#" onclick="toggleSubMenu(600)" id="changebg-600" class="text-white flex justify-between lg:mt-0 max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-4 lg:py-4 max-[1023px]:py-[10px] font-bold">
                    КАРИЕРИ
                    <svg id="dropdown-600" class="pl-[10px]  max-[1023px]:block fill-[transparent] stroke-white" width="20"  viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M7 1L4 4L1 1"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                  <div id="submenu-600" class="lg:w-max max-[1023px]:static absolute hidden max-lg:bg-[#E6E6E6] lg:bg-white text-[#1F4D85] max-[1023px]:py-0 max-[1023px]:px-0 lg:mt-[0px]">

                    <?php foreach ([ "/joblistings" => 'ОБЯВИ ЗА РАБОТА', "/joblistings2" => 'КОНКУРСИ', "/joblistings3" => 'СПЕЦИАЛИЗАНТИ']  as $url => $name2)  {  ?>
                        <a href="<?php echo $url ?>" class="hover:bg-[#1F4D85] hover:text-[#fff] flex max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] px-3 py-[8px]"><img class="pr-[10px] hidden max-[1023px]:block" src="<?php echo get_url('/assets/frontend/icons/right.svg'); ?>"><?php echo $name2 ?></a>
                   <?php } ?>

                  </div>
                </div>


                <a href="/contacts" class="block lg:inline-block lg:mt-0 text-white max-[1023px]:border-solid max-[1023px]:border-b-[1px] max-[1023px]:border-[#a2a2a2] max-[1250px]:px-2 px-3 lg:py-4 max-[1023px]:py-[10px] font-bold">
                    КОНТАКТИ
                </a>
              </div>
            </div>
        </nav>

        <div class="absolute max-[768px]:top-[15px] max-[768px]:left-[15px] max-[768px]:w-[130px] max-lg:top-[15px] max-lg:left-[50px] max-lg:w-[140px] top-[1px] left-[10%] w-[160px] max-[1400px]:left-[6%] max-[1250px]:left-[2%]">
            <a href="<?php echo get_url('/'); ?>"><img  src="<?php echo get_url('/assets/frontend/Group 485.png'); ?>"></a>
        </div>