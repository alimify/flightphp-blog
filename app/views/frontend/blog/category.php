<?php 
$data = [
    'title' => $category->displayName??'ОТДЕЛЕНИЯ',
    'title_prefix' => ' - Blog'
];

Flight::render('frontend/partials/top', $data); 

?>

<section class="bg-[#fff] pt-12">
    <center>
        <span class="bg-[#1F4D85] inline-flex items-center justify-center px-2 py-2 mr-3 text-base font-medium text-center text-white rounded-[5px] bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
           <?php echo $category->displayName??'ОТДЕЛЕНИЯ'; ?>
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








<?php Flight::render('frontend/partials/bottom'); ?>