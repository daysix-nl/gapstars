<?php
/**
 * Template name: Scale-Up 2023
 */


 get_header(); ?>

<style>
#navbar-desktop {
    background-color: #000;
}
.hdr {
    background-color: #000 !important;
}
</style> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://momentjs.com/downloads/moment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css" type="text/css" media="all">
<main class="bg-black">
<?php include get_template_directory() . '/componenten/transport.php'; ?>
<!-- HEADER -->
<section class="h-header-scale-up relative md:bg-center bg-no-repeat bg-cover w-full">
    <div class="h-full container flex justify-center items-center pb-4">
        <img src="https://gapstars.net/wp-content/uploads/2023/01/scale-up-header-2.jpg" alt="" class="md:px-8">
    </div>
    <div class="overlay-scale-up absolute bottom-0 left-0 right-0 h-[200px]"></div>
    <a href="#intro"><button class="button-wrap-down bottom-3"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></button></a>
</section>
<section id="intro"></section>

<!-- COUNTDOWN -->
<section class="relative">
    <!-- WHAT YOU MISSED -->
    <div class="container mt-8 md:mt-10">
        <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium pb-5 text-center">Here's what you missed</h2> 
    </div>
    <div class="md:container px-0 md:px-8">
        <video autoplay="" controls loop="" muted="" playsinline class="md:rounded-3xl">
            <source src="https://gapstars.net/videos/gapstars_scale-up_2023.mp4">
        </video>
    </div>  

    <div class="container mt-8 md:mt-10 relative">
        <img src="https://gapstars.net/wp-content/uploads/2023/01/timer.png" alt="" class="scale-50 md:scale-100">
        <div class="absolute top-0 bottom-0 left-0 right-0">
            <div class="flex flex-col justify-center items-center h-full md:mt-3">
                <div class="bg-black rounded-3xl flex flex-col justify-center items-center px-4 pt-3 md:pb-2 scale-75 md:scale-100">
                    <p class="text-white text-58 leading-58 font-quintnormal pb-1">FEB 17<span class="text-14 leading-58 align-top">TH</span> <span class="text-oranje">2023</span></p>
                    <div class="">
                    <div class="clock"></div>
                    <div class="grid grid-cols-3 gap-3 pt-1">
                        <div class="col-span-1 text-white text-center font-quintnormal"><p>days</p></div>
                        <div class="col-span-1 text-white text-center font-quintnormal"><p>hours</p></div>
                        <div class="col-span-1 text-white text-center font-quintnormal"><p>minutes</p></div>
                    </div>
                    </div>
                </div>
                <div class="flex justify-center  md:pt-3">
                    <a id="button-rsvp_scale_up_party" href="#register" class="bg-oranje text-white hover:bg-white hover:text-black uppercase text-16 leading-16 md:text-16 md:leading-26 font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit">Register here</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INTRODUCTION -->
<section>
    <div class="container mt-8 md:mt-10 flex flex-col md:flex-row gap-3 items-center w-full">
        <div class="text-center md:w-[655px] mx-auto">
            <h2 class="text-oranje text-26 leading-30 md:text-30 md:leading-34 font-bold pb-3">The Gapstars ethos has always been to do amazing work, create a long-lasting impact, and have fun while doing it!</h2>
            <p class="text-white text-18 leading-28 lg:text-18 lg:leading-28 font-dmsans pb-3">With a story that sprouted from a dream and humble beginnings in 2015, we've now grown to a company of 200+ employees, 28+ clients, and an ongoing pledge to multiple charitable ventures.<br><br>The Scale-Up Party is a celebration of our Growth, the milestones we cross with our ever-growing Family, the partners who've jumped on board and our fantastic community that continues to bridge gaps in the tech sphere.</p>
            <p class="text-white text-20 leading-24 lg:text-20 lg:leading-24 font-dmsans font-bold italic">Scale-Up 2023 is a celebration of all the people who power our progress!</p>
        </div>
    </div>
</section>

<!-- VENUE -->
<section>
    <div class="container mt-10 md:mt-12 flex flex-col md:flex-row gap-3 items-center">
        <img src="https://gapstars.net/wp-content/uploads/2023/01/venue.jpg" alt="" class="md:w-[50%] aspect-[4/3] rounded-3xl">
        <div class="">
            <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium pb-2">Venue</h2> 
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">The Clubhouse</h3>
            <p class="text-white text-20 leading-20 lg:text-20 lg:leading-20 font-dmsans italic pb-[15px]">Port City Colombo</p>
            <p class="text-white text-18 leading-26 lg:text-18 lg:leading-28 font-dmsans">What better way to celebrate than at one of Sri Lankas most exclusive locations! This tropical beach club is part of Port city; a state-of-the-art city being developed on reclaimed land on the coast off Downtown Colombo.</p>
        </div>
    </div>
</section>

<!-- WHAT TO EXPECT -->
<section>
    <div class="container mt-10 md:mt-12">
        <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium pb-5 text-center">What to expect</h2> 
    </div>
    <div class="container grid grid-cols-2 md:grid-cols-3 gap-3">
        <div class="col-span-1 sm:sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/watersportsv2.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Watersports</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">Banana Boats, Boat rides, Sofa rides and Tube rides</p>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/performance.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Performances</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">Fire bar, Fire drummers and Angampora</p>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/cuisines.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Multinational cuisines</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">Food stalls</p>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/gehan_blok.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Gehan Blok</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">The Host for the evening</p>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/magic-box.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Magic Box</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">Live music & DJ</p>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/fireworks.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Fireworks<br> display</h3>
        </div>
    </div>
</section>

<!-- AGENDA -->
<section>
    <div class="bg-cover bg-right bg-no-repeat  mt-10 md:mt-12 relative overlay-agenda" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/bg-party.jpg')">
        <div class="container py-10 md:py-12">
            <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium">Join us for the<br><span class="text-oranje">party of a lifetime</span></h2> 
            <div class="grid grid-cols-1 md:grid-cols-3 pt-5 ">
                <div class="col-span-1">
                    <h3 class="text-white text-32 leading-32 md:text-38 md:leading-38 pb-[5px]">Agenda</h3>
                    <p class="text-oranje text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans">4:30PM Onwards</p>
                </div>
                <div class="col-span-1 md:col-span-2 md:ml-8 md:mr-8 pt-5 md:pt-0">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Watersports</p>
                    <hr class="border-lichtgrijs my-[15px]">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Sundowner cocktails & canapés</p>
                    <hr class="border-lichtgrijs my-[15px]">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Fire drummers & angampora</p>
                    <hr class="border-lichtgrijs my-[15px]">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Main venue opens</p>
                    <hr class="border-lichtgrijs my-[15px]">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Band & DJ starts</p>
                    <hr class="border-lichtgrijs my-[15px]">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Community recognition</p>
                    <hr class="border-lichtgrijs my-[15px]">
                    <p class="text-white text-24 leading-34 lg:text-24 lg:leading-34 font-dmsans ml-[15px]">Drinks & networking</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REGISTER -->
<section id="register">
    <div class="containe mt-10 md:mt-12">
        <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium pb-5 text-center">Register here</h2> 
    </div>
    <div class="container">
       <div class="bg-diepgrijs relative rounded-3xl py-5 px-2 sm:px-4 contact-form scale-up-register w-full md:w-[600px] m-auto">
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                <script>
                hbspt.forms.create({
                    region: "na1",
                    portalId: "6637125",
                    formId: "5ad01faf-bc69-4f43-9ea6-e1fd0ea46087"
                });
                </script>
       </div>
    </div>
</section>

<!-- HOW WE PARTY -->
<section>
    <div class="container mt-10 md:mt-12">
        <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium pb-5 text-center">A glimpse of how we party</h2> 
    </div>
    <div class="container">
        <div class="relative">
            <div class="relative">
                <div class="px-0">
                    <div class="swiper mySwiper-3D">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-5.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-9.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-1.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-2.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-3.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-4.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-6.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-7.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/01/party-8.jpg" alt="Slider image">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next-3D right-3 md:right-5">
                        <?php include get_template_directory() . '/img/icons/arrow-next-white.php'; ?>
                    </div>
                    <div class="swiper-button-prev-3D left-3 md:left-5">
                        <?php include get_template_directory() . '/img/icons/arrow-prev-white.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MORE INFORMATION -->
<section>
    <div class="container mt-10 md:mt-12">
        <h2 class="text-white text-33 leading-33 md:text-40 md:leading-40 lg:text-55 lg:leading-55 font-medium pb-5 text-center">Need more info?</h2> 
    </div>
    <div class="container grid grid-cols-1 md:grid-cols-3 justify-center gap-5 md:gap-3">
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/abi-contact.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Hey, I'm Abi!</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic">Contact me for any<br> questions!</p>
            <a href="mailto:abilashini@gapstars.net"><p class="text-oranje text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic underline pt-2 hover:text-white duration-300">abilashini@gapstars.net</p></a>
            <a href="tel:+94 76 160 0699"><p class="text-oranje text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic underline hover:text-white duration-300">+94 76 160 0699</p></a>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/transport.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Transport</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">Fill out this form and we'll take care of your airport transfers and to/from the party!</p>
            <button id="button-transport-form" href="#" target="_blank" class="bg-oranje text-white hover:bg-white hover:text-black uppercase text-16 leading-16 md:text-16 md:leading-26 font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex justify-center items-center w-[220px] mt-1 button-modal-transport">Transport form</button>
        </div>
        <div class="col-span-1 sm:hover:scale-105 duration-300">
            <div class="aspect-square bg-cover bg-center bg-no-repeat rounded-3xl mb-2" style="background-image: url('https://gapstars.net/wp-content/uploads/2023/01/destination.jpg')" ></div>
            <h3 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 font-bold pb-[5px]">Destinations</h3>
            <p class="text-white text-20 leading-25 lg:text-20 lg:leading-25 font-dmsans italic pb-[15px]">Looking for accomodation or any other entertainment in Colombo?</p>
            <a id="button-destinations" href="https://www.google.com/maps/d/u/0/viewer?ll=7.512965940616437%2C80.70192809999996&z=8&mid=1hd1WIDUlLbh6Dq1pvvNbn137-Oi-lOM" target="_blank" class="bg-oranje text-white hover:bg-white hover:text-black uppercase text-16 leading-16 md:text-16 md:leading-26 font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex justify-center items-center w-[220px] mt-1">Destinations</a>
        </div>
    </div>
</section>

<!-- OUTRO -->
<section>
    <div class="container my-10 md:my-12">
        <h2 class="text-oranje text-26 leading-26 md:text-30 md:leading-30 text-center">Looking forward to celebrating<br>with you on the 17th!</h2>
    </div>
</section>


</main>
<?php get_footer("empty"); ?>