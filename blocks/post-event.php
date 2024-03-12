<div class="events-page">

<main>
    <?php
    $image = get_field('header_image');
    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
    $post_id = get_the_ID();
    ?>
    <!-- HEADER -->
    <section class="h-[350px] md:h-[calc(100vh-103px)] relative flex">
        <img class="absolute w-full h-full top-0 right-0 z-0 object-cover"
            src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        <div class="hero_block absolute w-full h-full top-0 right-0 z-[1]"></div>
        <div class="container relative z-[2] my-auto">
            <h1 class="text-white text-65 leading-65 md:text-75 md:leading-75 font-medium row-center max-w-[448px]"><?php echo get_field('header_title');?></h1>
            <p class=" text-28 leading-38  text-white hidden md:block mt-4 max-w-[450px]"><?php echo get_field('header_subtitle');?></p>
        </div>
    </section>
    <section class="bg-[#202020] md:hidden">
        <div class="container py-3">
            <p class=" text-28 leading-38  text-white text-center"><?php echo get_field('header_subtitle');?></p>
        </div>
    </section>

    <section class="py-6 md:py-10 bg-[#DAD4CB]">
        <!-- EVENT INFORMATION -->
        <div class="container max-w-[773px] grid grid-cols-2 gap-2">
            <div class="col-span-1  rounded-3xl flex flex-col items-center bg-lightcreme max-w-[374px] py-2">
                <p class="text-25 leading-35 md:text-30 md:leading-40 font-medium text-[#202020] mx-auto mb-[5px]">Time</p>
                <div class="text-[#202020] flex text-22 leading-28 md:text-28 md:leading-28">
                    <p class="flex justify-center flex-col items-center ">
                        <span class="text-20 leading-20 md:text-24 md:leading-24"><?php echo get_field('start_hour', $post_id);?>.<?php echo get_field('start_minutes', $post_id);?></span>
                        <span class="text-16 leading-18 md:text-18 md:leading-18 mt-[5px]"><?php echo get_field('start_am_pm', $post_id);?></span>
                    </p>
                    <span class="mx-[5px]">-</span>
                    <p class="flex justify-center flex-col items-center">
                        <span class="text-20 leading-20 md:text-24 md:leading-24"><?php echo get_field('end_hour', $post_id);?>.<?php echo get_field('end_minutes', $post_id);?></span>
                        <span class="text-16 leading-18 md:text-18 md:leading-18 mt-[5px]"><?php echo get_field('end_am_pm', $post_id);?></span>
                    </p>
                </div>
            </div>
            <div class="col-span-1  rounded-3xl flex flex-col items-center bg-[#E87A2E] max-w-[374px] py-2">
                <p class="text-25 leading-35 md:text-30 md:leading-40 font-medium text-[#202020] mx-auto mb-[5px]">Day</p>
                <div class="text-[#202020] flex text-22 leading-28 md:text-28 md:leading-28">
                    <p class="flex justify-center flex-col items-center">
                        <span class="text-20 leading-20 md:text-24 md:leading-24"><?php echo get_field('day_number', $post_id);?> <?php echo get_field('month', $post_id);?></span>
                        <span class="text-16 leading-18 md:text-18 md:leading-18 mt-[5px]"><?php echo get_field('year', $post_id);?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="container py-3 md:py-5">
            <p class="text-24 leading-34 md:text-40 md:leading-50 font-medium w-full md:max-w-[773px] mx-auto text-center text-[#202020] items-center"><?php echo get_field('information_introduction_text');?></p>
        </div>
        <?php
        $image2 = get_field('information_image');
        $image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
        $image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
        ?>
        <!-- EVENT INFORMATION TEXT -->
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-[25px] md:gap-6 pb-4 md:pb-6">
            <div class="col-span-1">
                <img class="w-full h-full aspect-video md:aspect-square rounded-3xl object-cover" src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>">
            </div>
            <div class="col-span-1 md:py-4 flex justify-center flex-col items-center md:items-start">
                <h2 class="text-oranje text-40 leading-40 font-medium pt-1.5 md:pt-0 text-center md:text-start"><?php echo get_field('information_title');?></h2>
                <p class="w-full max-w-[400px] lg:max-w-[420px] text-18 leading-28 lg:text-24 lg:leading-34 font-dmsans text-diepgrijs pt-2 text-center md:text-start"><?php echo get_field('information_text');?></p>
            </div>
        </div>
        <?php if (get_field('information_clients_repeater')): ?>  
        <!-- CLIENTS -->
        <div class="container flex justify-center flex-wrap px-0">
            <?php
            if( have_rows('information_clients_repeater') ):
                while( have_rows('information_clients_repeater') ) : the_row(); ?>
                <?php
                $image4 = get_sub_field('information_clients_repeater_client');
                $image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
                $image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
                ?>
                <div class="basis-[46%] md:basis-[22%] m-[10px] rounded-[40px] bg-lightcreme rounded-40 h-8 flex items-center justify-center ">
                    <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-[60px]">
                </div>
                <?php
                endwhile;
            else :
            endif;
            ?>      
        </div>
        <?php endif; ?>

            

    </section>


    <section class="bg-lightcreme py-6 md:py-10">
        <?php if (get_field('speakers_title')): ?>   
        <div class="pb-4 md:pb-9">
            <h2 class="text-[#202020] text-33 leading-33 md:text-55 md:leading-55 font-medium mb-3 md:mb-4 text-center"><?php echo get_field('speakers_title');?></h2>
            <?php if (get_field('speakers_repeater')): ?>   
            <!-- SPEAKERS -->
            <div class="container flex justify-center flex-wrap px-0">
                <?php
                if( have_rows('speakers_repeater') ):
                    while( have_rows('speakers_repeater') ) : the_row(); ?>
                    <?php
                    $image3 = get_sub_field('speakers_repeater_image');
                    $image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
                    $image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
                    ?>
                     <div class="basis-[100%] md:basis-[22%] m-[10px] flex items-center justify-center flex-col max-w-[316px]">
                        <img class="rounded-[20px] aspect-square object-cover" src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>">
                            <h5 class="text-22 leading-32 text-oranje text-center mt-1 font-medium"><?php echo get_sub_field('speakers_repeater_name');?></h5>
                            <p class="text-18 leading-26 text-[#202020] text-center"><?php echo get_sub_field('speakers_repeater_function');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
 
            </div>
            <?php endif; ?>


        </div>
        <?php endif; ?>

        <!-- REGISTER -->
        <div id="scroll" class="container flex flex-col items-center">
            <h2 class="text-[#202020] text-33 leading-33 md:text-55 md:leading-55 font-medium mb-3 md:mb-4 text-center"><?php echo get_field('register_after_title');?></h2>
            <div id="register" class="<?php echo get_field('register_after_toggle');?> bg-[#202020] w-full max-w-[773px] rounded-[40px] relative py-5 px-2 sm:px-4 contact-form scale-up-register m-auto">
                <?php echo get_field('register_after_form');?>
            </div>
        </div>

         <!-- VIDEO -->
        <div id="movie" class="<?php echo get_field('register_after_toggle');?> md:container px-0 md:px-8">
            <iframe class="aspect-video z-[9999]" width="100%" height="auto" src="https://www.youtube-nocookie.com/embed/<?php echo get_field('register_after_movie');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>



    </section>


</div>