<?php
/**
 * Template name: Events Details
 */


get_header(''); ?>
<div class="events-page">

<main>

    <section class="h-[350px] md:h-[calc(100vh-103px)] relative flex">
        <img class="absolute w-full h-full top-0 right-0 z-0 object-cover"
            src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="hero-careers">
        <div class="hero_block absolute w-full h-full top-0 right-0 z-[1]"></div>
        <div class="container relative z-[2] my-auto">
            <h1 class="text-white text-65 leading-65 md:text-75 md:leading-75 font-medium row-center max-w-[448px]">Join us for the party</h1>
            <p class=" text-28 leading-38  text-white hidden md:block mt-4 max-w-[500px]">
                We had an amazing time taking over Port City Colombo with our epic party.
            </p>
        </div>
    </section>
    <section class="bg-[#202020] md:hidden">
        <div class="container py-3">
            <p class=" text-28 leading-38  text-white text-center">We had an amazing time taking over
                Port City Colombo with our epic party.
            </p>
        </div>
    </section>

    <section class="py-6 md:py-10 bg-[#DAD4CB]">
        <div class="container max-w-[773px] grid grid-cols-2 gap-2">
            <div class="col-span-1  rounded-3xl flex flex-col items-center bg-lightcreme max-w-[374px] py-2">
                <p class="text-30 leading-40 md:text-40 md:leading-40 font-medium text-[#202020] mx-auto mb-[5px]">Time</p>
                <div class="font-medium text-[#202020] flex text-22 leading-28 md:text-28 md:leading-28">
                    <p class="flex justify-center flex-col items-center ">
                        <span class="text-22 leading-28 md:text-28 md:leading-28">5.00</span>
                        <span class="text-16 leading-18 md:text-18 md:leading-18 mt-[5px]">PM</span>
                    </p>
                    <span class="mx-[5px]">-</span>
                    <p class="flex justify-center flex-col items-center">
                        <span class="text-22 leading-28 md:text-28 md:leading-28">6.00</span>
                        <span class="text-16 leading-18 md:text-18 md:leading-18 mt-[5px]">PM</span>
                    </p>
                </div>
            </div>
            <div class="col-span-1  rounded-3xl flex flex-col items-center bg-oranje max-w-[374px] py-2">
                <p class="text-30 leading-40 md:text-40 md:leading-40 font-medium text-[#202020] mx-auto mb-[5px]">Day</p>
                <div class="font-medium text-[#202020] flex text-22 leading-28 md:text-28 md:leading-28">
                    <p class="flex justify-center flex-col items-center">
                        <span class="text-22 leading-28 md:text-28 md:leading-28">25th April</span>
                        <span class="text-16 leading-18 md:text-18 md:leading-18 mt-[5px]">2023</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="container pt-4 pb-6 md:py-9 max-w-[773px]">
            <p class="text-28 leading-38 md:text-40 md:leading-40 text-center text-[#202020] items-center">The Gapstars ethos has always been to do amazing work, create a long-lasting impact, and have fun while doing it!</p>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-2 gap-[25px] md:gap-6 pb-8">
            <div class="col-span-1">
                <img class="w-full h-full aspect-video md:aspect-square rounded-3xl object-cover" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
            </div>
            <div class="col-span-1 md:py-4 flex justify-center flex-col items-center md:items-start">
                <h2 class="text-oranje text-40 leading-40 md:text-70 md:leading-65 pt-1.5 md:pt-0 font-medium text-center md:text-start">This session</h2>
                <p class="w-full max-w-[400px] text-18 leading-26 md:text-28 md:leading-38 text-diepgrijs pt-2 text-center md:text-start">Scale-Up 2023 was filled with celebration, crazy water activities and most importantly, connecting with all our partners and community as ONE global family. We were thrilled to have Carv, Alicia Insurance, MyCademy, Certscanner, Fixico and Conxillium Group in Sri Lanka!</p>
            </div>
        </div>


        <?php
if( have_rows('icons-repeater') ):
    $count = 0;
    while( have_rows('icons-repeater') ): the_row();
        
  
        if($count % 4 == 0) {
            echo '<div class="container flex flex-wrap md:flex-nowrap justify-center gap-2 md:space-y-0 pt-2 first-of-type:pt-0">';
        }
        ?>
            <div class="w-[46%] md:w-auto md:flex-grow rounded-[20px] flex-basis max-w-[236px] bg-lightcreme rounded-40 h-10 flex items-center justify-center ">
                <img src="<?php echo the_field('icon')?>" alt="">
            </div>
        <?php
    
        if($count % 4 == 3) {
            echo '</div>';
        }
        
        $count++;
    endwhile;

    if($count % 4 != 0) {
        echo '</div>';
    }
endif;
?>

    </section>


    <section class="bg-lightcreme py-6 md:py-10">

        <div class="pb-4 md:pb-9">
            <h2 class="text-[#202020] text-40 leading-40 md:text-70 md:leading-65 font-medium mb-4 md:mb-6 text-center">Speakers</h2>
<?php
if( have_rows('icons-repeater') ):
    $count = 0;
    while( have_rows('icons-repeater') ): the_row();

        if($count % 4 == 0) {
            echo '<div class="container flex flex-wrap md:flex-nowrap justify-center gap-2 md:space-y-0 pt-3 first-of-type:pt-0">';
        }
        ?>
        <div class="flex-grow flex-basis flex items-center justify-center flex-col max-w-[316px]">
                 <img class="rounded-[20px] aspect-square object-cover" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                    <h5 class="text-28 leading-38 text-oranje text-center mt-1 font-medium">Pasindu Vithana</h5>
                    <p class="text-18 leading-26 text-[#202020] mt-1 text-center">Associate Technical Lead</p>
        </div>
        <?php
    
        if($count % 4 == 3) {
            echo '</div>';
        }
        
        $count++;
    endwhile;

    if($count % 4 != 0) {
        echo '</div>';
    }
endif;
?>

        </div>

        <div class="container flex flex-col items-center">
            <h2 class="text-[#202020] text-40 leading-40 md:text-70 md:leading-65 font-medium mb-4 md:mb-6 text-center">Register here</h2>
            <div class="bg-[#202020] w-full max-w-[773px] py-[55px] px-5 rounded-[40px]">

            </div>
        </div>
    </section>
</main>

</div>

<?php get_footer('black'); ?>
