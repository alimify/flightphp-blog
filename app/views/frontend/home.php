<?php 
$data = [
    'title' => 'МБАЛ "Д-р Атанас Дафовски" АД-Кърджали',
    'title_prefix' => ''
];

Flight::render('frontend/partials/top', $data); 

?>
<section class="bg-white dark:bg-gray-900 bg-[url('<?php echo asset('assets/frontend/HeroSection/h.png'); ?>')] bg-no-repeat bg-cover max-lg:h-[500px] lg:h-[70dvh] max-[320px]:h-[300px] max-[375px]:h-[340px] max-[490px]:h-[400px] flex">
    <div class="ml-[8%] mr-auto place-self-center lg:col-span-7">

        <p class="text-[#1F4D85] max-w-2xl mb-4 text-2xl md:text-3xl xl:text-4xl"><span class="font-extrabold ">Грижа за живота</span><br> за теб и за твоите<br>близки</p>            
    </div>
    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex"> </div>                
</section>

<section class="bg-[#f7f7f7] pt-8 pb-8">
    <center>
        <a href="#" class="bg-[#1F4D85] inline-flex items-center justify-center px-2 py-2 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
            ПОСЛЕДНИ НОВИНИ                    
        </a>  
    </center>
</section>


<section class="w-full bg-[#f7f7f7] flex justify-center pb-12">
    <div class="max-[2560px]:w-[70dvw] max-[1440px]:w-[90dvw] max-lg:w-[100dvw]  flex max-lg:block justify-center">
        <div class="flex justify-start max-lg:justify-center lg:w-[50%]">
            <div class="bg-white border border-gray-200 rounded-lg shadow w-[90%]">
                <a href="<?php echo get_url('/news/view/1066'); ?>">
                    <img class="rounded-t-lg w-[100dvw]" src="<?php echo asset('assets/frontend/news_logo.png'); ?>">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#1F4D85]">Проф.д-р Тодор Черкезов д.м за пореден път бе удостоен с високото  отличие,,Лекарите,на които вярваме"</h5>
                        <p class="mb-3 font-normal text-[#3B3B3B] text-[13px]">На 05.11.24г.в зала,,Мусала" на х-л ,,Хилтън" редакцията на в-к,,24 часа" обяви края на ежегодната кампания ,,Лекарите,на които вярваме", която се провежда вече за четиринадесети път.Отличени бяха 700&nbsp; лекари&nbsp; от цялата страна за техните постижения в областта на медицината и за доверието на пациентите в тях. Те бяха поздравени от мин.-председателя-Димитър Главчев,министъра на здравеопазв...</p>
                        <span class="inline-flex items-center px-3 py-2 text-sm font-bold text-center  text-[12px]  rounded-lg  text-[#1F4D85] border-solid border-[#1F4D85] border-[1px]">
                            Прочети още
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" viewBox="0 0 8 10" fill="none" class="ml-[8px] mt-[1px]">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.28509 4.48618C7.46578 4.61441 7.56609 4.78759 7.56395 4.96764C7.56181 5.14769 7.45741 5.31987 7.27369 5.44632L1.73007 9.26061C1.63965 9.32502 1.53179 9.37623 1.41279 9.41123C1.2938 9.44624 1.16604 9.46435 1.03698 9.4645C0.907927 9.46465 0.780152 9.44684 0.661115 9.41211C0.542077 9.37738 0.434161 9.32643 0.343663 9.26223C0.253166 9.19803 0.181899 9.12186 0.134022 9.03817C0.0861446 8.95448 0.0626154 8.86495 0.0648069 8.77479C0.0669985 8.68464 0.0948671 8.59567 0.146787 8.51307C0.198706 8.43048 0.273636 8.35591 0.367206 8.29373L5.218 4.95614L0.446996 1.57139C0.271477 1.44245 0.175551 1.27045 0.179879 1.09242C0.184206 0.914396 0.288441 0.744589 0.470133 0.619575C0.651825 0.494562 0.896437 0.424343 1.15128 0.424045C1.40613 0.423748 1.65082 0.493394 1.83266 0.617982L7.28509 4.48618Z" fill="#1F4D85"/>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-col justify-between items-center lg:w-[50%]">
            <div class="max-lg:w-[90%] max-lg:mt-[40px]">
                <a href="<?php echo get_url('/news/view/1065'); ?>" class="flex items-center bg-white border border-gray-200 rounded-lg shadow max-lg:flex-col hover:bg-gray-100s">
                    <img class="rounded-t-lg w-[50%] max-lg:w-[100%] md:rounded-none md:rounded-s-lg" src="<?php echo asset('assets/frontend/news_logo.png'); ?>">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-[17px] font-bold tracking-tight text-[#1F4D85] ">Стартира  изграждането  на хеликоптерна площадка в МБАЛ "Д-р Атанас Дафовски“АД</h5>
                        <p class="mb-3 font-normal text-[#3B3B3B] text-[11px]">Стартира &nbsp;изграждането &nbsp;на хеликоптерна площадка в МБАЛ "Д-р
Атанас Дафовски“АД...</p>
                        
                        <button class="w-max inline-flex items-center px-2 py-1 text-sm font-bold text-center text-[12px] rounded-lg  text-[#1F4D85] border-solid border-[#1F4D85] border-[1px]">
                            Прочети още
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" viewBox="0 0 8 10" fill="none" class="ml-[8px] mt-[1px]">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.28509 4.48618C7.46578 4.61441 7.56609 4.78759 7.56395 4.96764C7.56181 5.14769 7.45741 5.31987 7.27369 5.44632L1.73007 9.26061C1.63965 9.32502 1.53179 9.37623 1.41279 9.41123C1.2938 9.44624 1.16604 9.46435 1.03698 9.4645C0.907927 9.46465 0.780152 9.44684 0.661115 9.41211C0.542077 9.37738 0.434161 9.32643 0.343663 9.26223C0.253166 9.19803 0.181899 9.12186 0.134022 9.03817C0.0861446 8.95448 0.0626154 8.86495 0.0648069 8.77479C0.0669985 8.68464 0.0948671 8.59567 0.146787 8.51307C0.198706 8.43048 0.273636 8.35591 0.367206 8.29373L5.218 4.95614L0.446996 1.57139C0.271477 1.44245 0.175551 1.27045 0.179879 1.09242C0.184206 0.914396 0.288441 0.744589 0.470133 0.619575C0.651825 0.494562 0.896437 0.424343 1.15128 0.424045C1.40613 0.423748 1.65082 0.493394 1.83266 0.617982L7.28509 4.48618Z" fill="#1F4D85"/>
                            </svg>
                        </button>
                    </div>
                </a>
            </div>
            <div class="max-lg:w-[90%] mt-[40px]">
                <a href="<?php echo get_url('/news/view/1064'); ?>" class="flex items-center bg-white border border-gray-200 rounded-lg shadow max-lg:flex-col hover:bg-gray-100s">
                    <img class="rounded-t-lg w-[50%] max-lg:w-[100%] md:rounded-none md:rounded-s-lg" src="<?php echo asset('assets/frontend/news_logo.png'); ?>">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-[17px] font-bold tracking-tight text-[#1F4D85] ">Прегледай се за Сънна апнея от 28 октомври до 01 ноември 2024г....</h5>
                        <p class="mb-3 font-normal text-[#3B3B3B] text-[11px]">Прегледай се за Сънна апнея от 28 октомври до 01 ноември 2024г.Седмица на отворените врати ще се проведе от 28 октомври до 01 ноември в Отделението по пневмология и фтизиатрия на МБАЛ„ Д-р Атанас Дафо</p>
                        <button class="w-max inline-flex items-center px-2 py-1 text-sm font-bold text-center text-[12px] rounded-lg text-[#1F4D85] border-solid border-[#1F4D85] border-[1px]">
                            Прочети още
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" viewBox="0 0 8 10" fill="none" class="ml-[8px] mt-[1px]">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.28509 4.48618C7.46578 4.61441 7.56609 4.78759 7.56395 4.96764C7.56181 5.14769 7.45741 5.31987 7.27369 5.44632L1.73007 9.26061C1.63965 9.32502 1.53179 9.37623 1.41279 9.41123C1.2938 9.44624 1.16604 9.46435 1.03698 9.4645C0.907927 9.46465 0.780152 9.44684 0.661115 9.41211C0.542077 9.37738 0.434161 9.32643 0.343663 9.26223C0.253166 9.19803 0.181899 9.12186 0.134022 9.03817C0.0861446 8.95448 0.0626154 8.86495 0.0648069 8.77479C0.0669985 8.68464 0.0948671 8.59567 0.146787 8.51307C0.198706 8.43048 0.273636 8.35591 0.367206 8.29373L5.218 4.95614L0.446996 1.57139C0.271477 1.44245 0.175551 1.27045 0.179879 1.09242C0.184206 0.914396 0.288441 0.744589 0.470133 0.619575C0.651825 0.494562 0.896437 0.424343 1.15128 0.424045C1.40613 0.423748 1.65082 0.493394 1.83266 0.617982L7.28509 4.48618Z" fill="#1F4D85"/>
                            </svg>
                        </button>
                    </div>
                </a>    
            </div>
        </div>
    </div>
</section>

<section class="bg-[#fff] pt-12">
    <center>
        <span class="bg-[#1F4D85] inline-flex items-center justify-center px-2 py-2 mr-3 text-base font-medium text-center text-white rounded-[5px] bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
        ОТДЕЛЕНИЯ
        </span>  
    </center>
</section>

<section class="bg-[#fff] pb-10 flex justify-center mt-10">
    <div class="max-[2560px]:w-[70dvw] max-[1440px]:w-[90dvw]">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm  text-[#1F4D85] border-[2px] border-[#1F4D85]">
                <tbody>
                    <?php 
                         foreach ($articles as $v) 
                         {
                            ?> 
                                <tr class="bg-white  border-b-[2px] border-[#1F4D85] w-full">
                                    <th class="px-0 py-0 border-r-[2px] border-[#1F4D85]">
                                        <a href='<?php echo route('view_blog',[
                                            'category_slug' => $v->aliasName,
                                            'id' => $v->id
                                        ]); ?>'>
                                            <div class="px-6 py-3 text-[#1F4D85] hover:bg-[#1F4D85] hover:text-[#fff] flex justify-between hover-icon text-left">
                                                <?php echo $v->name; ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"  width="14" height="13" viewBox="0 0 14 13" fill="none">
                                                    <path d="M7.54705 11.2559L12.1624 6.25586M12.1624 6.25586L7.54705 1.25586M12.1624 6.25586H1.3291" stroke="#1F4D85" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </th>
                               
                                </tr>
                            <?php
                         } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<section class="w-full bg-[#E9E9E9] flex flex-col justify-center pt-4">
    <div class="flex justify-center">
        <div class="flex flex-col justify-between items-center p-4 leading-normal md:w-[740px]">
            <h5 class="mb-2 text-[17px] font-bold  text-[#1F4D85]">Отлично място за получаване на грижи</h5>
            <p class="mb-3 font-normal text-[#3B3B3B] text-center text-[13px]">Отлично място за грижи с изключителен медицински екип, индивидуален подход и модерни технологии. Тук се чувствате обичани, защитени, и атмосферата подпомага бързото възстановяване.</p>
            <a href="<?php echo get_url('/about'); ?>" class="w-max inline-flex items-center px-2 py-1 text-sm font-normal text-center text-[12px] text-[#1F4D85]">
                ЗA HAC
                <svg xmlns="http://www.w3.org/2000/svg" width="14"  viewBox="0 0 14 13" fill="none" class="ml-[8px] mt-[1px]">
                    <path d="M7.54705 11.2559L12.1624 6.25586M12.1624 6.25586L7.54705 1.25586M12.1624 6.25586H1.3291" stroke="#1F4D85" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <!-- <img src=".assets/frontend/Blackdoctors 1.png"> -->
        <img src="<?php echo asset('assets/frontend/doctors-homepage.jpg'); ?>">    
    </div>
</section>

<section class="bg-[#fff] pt-12 pb-6">
    <center>
        <p class="items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-[#1F4D85]">Свържи се.</p>
        <a href="#" class="bg-[#1F4D85] inline-flex items-center justify-center px-2 py-2 mr-3 text-base font-medium text-center text-white rounded-[5px] bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">КОНТАКТИ</a>  
    </center>
</section>

<section class="bg-[#fff] pt-12 pb-10 flex justify-center">
    <div class="w-[80%] max-[1800px]:w-[90%] max-[1600px]:w-[100%] flex justify-evenly max-md:items-center max-md:flex-col">
        <div class="bg-[#A2B6CD] max-sm:w-[80%]  max-md:w-[70%] max-[1300px]:w-[250px] max-[1300px]:h-[250px] max-[1080px]:w-[220px] max-[1080px]:h-[220px] max-[940px]:w-[190px] max-[940px]:h-[240px] w-[300px] h-[320px]  rounded-[5px] flex max-md:mt-4 max-md:justify-center">
            <div class="flex flex-col items-start max-md:items-center justify-center">
                <div>
                    <img class="pl-5 max-md:pl-0 py-2" src="<?php echo asset('assets/frontend/subFooterIcons/locationss.svg'); ?>">
                </div>
                <div>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  max-md:text-center text-base font-medium text-[#1F4D85]">Локация</p>
                </div>
                <div>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2 max-md:text-center text-base font-medium text-[#1F4D85]">гр. Кърджали, 6600</p>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2 max-md:text-center text-base font-medium text-[#1F4D85]">бул. „Беломорски“ 53</p>
                </div>
            </div>
        </div>
        
        <div class="bg-[#1F4D85] max-sm:w-[80%]  max-md:w-[70%] max-[1300px]:w-[250px] max-[1300px]:h-[250px] max-[1080px]:w-[220px] max-[1080px]:h-[220px] max-[940px]:w-[190px] max-[940px]:h-[240px] w-[300px] h-[320px]  rounded-[5px] flex max-md:justify-center max-md:mt-4">
            <div class="flex flex-col items-start max-md:items-center justify-center">
                <div>
                    <img class="pl-5 max-md:pl-0 py-2" src="<?php echo asset('assets/frontend/subFooterIcons/mail.svg'); ?>">
                </div>
                <div>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  text-base font-medium max-md:text-center text-white">EMAIL</p>
                </div>
                <div>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  text-base font-medium max-md:text-center text-white">hospital_kj@abv.bg</p>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  text-base font-medium max-md:text-center text-white"> &nbsp; </p>
                </div>
            </div>
        </div>
        <div class="bg-[#A2B6CD] max-sm:w-[80%]  max-md:w-[70%] max-[1300px]:w-[250px] max-[1300px]:h-[250px] max-[1080px]:w-[220px] max-[1080px]:h-[220px] max-[940px]:w-[190px] max-[940px]:h-[240px] w-[300px] h-[320px]  rounded-[5px] flex items-center max-md:mt-4 max-md:justify-center">
            <div class="flex flex-col items-start justify-center max-md:items-center">
                <div>
                    <img class="pl-5 max-md:pl-0 py-2" src="<?php echo asset('assets/frontend/subFooterIcons/time.svg'); ?>">
                </div>
                <div>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  text-base font-medium max-md:text-center text-[#1F4D85]">Регистратура</p>
                </div>
                <div>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  text-base font-medium max-md:text-center text-[#1F4D85]">+359 361 682 66</p>
                    <p class="items-center justify-center pl-5 max-md:pl-0 py-2  text-base font-medium max-md:text-center text-[#1F4D85]"> &nbsp; </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="w-full bg-[#E9E9E9] flex flex-col justify-center mt-12">
    <div class="flex justify-center">

        <div class="flex flex-col justify-between items-right p-4 leading-normal md:w-[150px]">
              <img class="w-[90px]" src="<?php echo asset('assets/frontend/mgGlobal.png'); ?>">
        </div>

        <div class="flex flex-col justify-between p-4 leading-normal md:w-[490px]">

            <h5 class="mb-2 text-[17px] font-bold text-[#1F4D85]">Сертификати и награди</h5>
            <p class="mb-3 font-normal text-[#3B3B3B] text-[11px]">МБАЛ "Д-р Атанас Дафовски" АД-Кърджали има ISO 9001. Виж останалите сертификати и награди.</p>
            <a href="<?php echo get_url('/about'); ?>" class="w-max inline-flex px-2 py-1 text-sm font-normal text-center text-[12px] text-[#1F4D85]">
                Виж други серфикати и награди.
                <svg xmlns="http://www.w3.org/2000/svg" width="14"  viewBox="0 0 14 13" fill="none" class="ml-[8px] mt-[1px]">
                    <path d="M7.54705 11.2559L12.1624 6.25586M12.1624 6.25586L7.54705 1.25586M12.1624 6.25586H1.3291" stroke="#1F4D85" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>


    </div>
</section>

<section class="bg-[#fff] pt-12 pb-10 flex justify-center">
    <div class="w-[80%] max-[1800px]:w-[90%] max-[1600px]:w-[100%] flex justify-center items-center">
 
    </div>
</section>

<section class="bg-[#1F4D85] pt-12 pb-2 flex justify-center max-[830px]:hidden">
    <div class="w-[80%] flex justify-evenly max-[1500px]:justify-between max-md:items-center max-md:flex-col">
        <div class="flex max-md:justify-center">
            <div><img src="<?php echo asset('assets/frontend/subFooterIcons/PhoneCall.svg'); ?>"></div>
            <div class="flex flex-col pl-[10px]">
                <span class=" text-[11px]  text-white">Свържете се с нас</span>
                <span class="text-[13px] text-white">+359 361 683 48</span>
            </div>
        </div>
        <div class="flex max-md:mt-4 max-md:justify-center">
            <div><img src="<?php echo asset('assets/frontend/subFooterIcons/GmaiIcon.svg'); ?>"></div>
            <div class="flex flex-col pl-[10px]">
                <span class=" text-[11px]  text-white">Email us</span>
                <span class="text-[13px] text-white">hospital_kj@abv.bg</span>
            </div>
        </div>
        
        <div class="flex max-md:justify-center max-md:mt-4">
            <div><img src="<?php echo asset('assets/frontend/subFooterIcons/blueLocation.svg'); ?>"></div>
            <div class="flex flex-col pl-[10px]">
                <span class=" text-[11px]  text-white">Адрес</span>
                <span class="text-[13px] text-white">бул. „Беломорски“ 53</span>
            </div>
        </div>
    </div>
</section> 

<?php Flight::render('frontend/partials/bottom'); ?>