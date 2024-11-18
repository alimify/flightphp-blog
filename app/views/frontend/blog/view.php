<?php

use app\records\MediaRecord;

$top_article = [
    'title' => $article->name??'View',
    'title_prefix' => '- Blog'
];

Flight::render('frontend/partials/top', $top_article); 

?>


<?php
    if (empty($article->pic))
    {
        $article->pic = 'assets/frontend/HeroSection/h.png';
    }

    $article->desc = article_media_content_filter($article);
?>

<section class="bg-white  bg-[url('<?php echo get_url($article->pic); ?>')] bg-no-repeat bg-cover max-lg:h-[250px] 2xl:h-[500px] xl:h-[500px] lg:h-[330px] max-[320px]:h-[200px] max-[375px]:h-[230px] max-[490px]:h-[240px] flex">
     <div class="hidden lg:mt-0 lg:col-span-5 lg:flex"> </div>
</section> 

<section class="bg-[#1F4D85] py-4 mt-6 max-sm:mt-8 max-md:mt-10 max-lg:mt-12 max-xl:mt-14">
    <center>
         <p class=" inline-flex items-center justify-center px-2 py-2 mr-3 max-sm:text-[10px] max-md:text-[14px] max-lg:text-[18px] text-[23px] font-medium text-center text-white">
            <?php echo mb_strtoupper($article->name); ?> 
         </p>  
     </center>
</section>

<section class="w-full flex justify-center mt-4 max-sm:mt-8 max-md:mt-10 max-lg:mt-12 max-xl:mt-14">
    <div class="w-[80%] max-[1360px]:w-[90%] max-[1075px]:w-[95%] flex max-md:flex-col ">
      
        <div class="custom_content w-[80%] max-[1160px]:w[70%] max-md:w-[95%] pl-16 max-[1200px]:pl-6 max-md:pl-0 py-2">
          <?php echo $article->desc; ?>
            <?php if (!empty($article->desc)) { ?>
                <div class="py-4">Публикувано на: <b><?php echo $article->date; ?></b></div>
            <?php } else { ?>
                 <div class="py-2"> </div>
            <?php } ?>
        </div>

    </div>
</section>
<?php Flight::render('frontend/partials/bottom'); ?>