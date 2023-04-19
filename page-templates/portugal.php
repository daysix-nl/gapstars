<?php
/**
 * Template name: Portugal
 */


 get_header('portugal'); ?>


<style>
    .page-template-portugal {
        background: #202020;
    }
</style>



<!-- HEADER -->
<section class="relative md:bg-center bg-no-repeat bg-cover h-[100vh] min-h-[580px] w-full mt-[-103px] overflow-hidden">
    <div class="absolute left-0 top-0 bottom-0 right-0 overflow-hidden">
        <img src="https://gapstars.net/wp-content/uploads/2023/02/background_portugal.png" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-diepgrijs max-w-[100vw] md:max-w-[90vw] lg:max-w-[1000px] md:max-h-[110vh] aspect-square rounded-full absolute right-[-8vh] top-[-8vh] sm:right-[-15vh] md:top-[-15vh] lg:right-[-20vh] lg:top-[-20vh] overflow-hidden">
        <img src="https://gapstars.net/wp-content/uploads/2023/02/header_portugal_001-scaled.jpg" alt="" class="object-cover object-left-top h-full w-full inner-hero">
    </div>
    <div class="container h-full grid items-center absolute left-0 top-0 bottom-0 right-0">
        <div class="mt-[100px] md:mt-0">
            <h1 class="text-white text-65 leading-65 md:text-75 md:leading-75 font-medium row-center">Olá<br>Portugal</h1>
            <p class="text-white text-22 leading-30 md:text-26 md:leading-36 font-light lg:w-[80%] pr-4 mt-3">Welcome to Gapstars Portugal.</p>
            <menu class="flex pt-4 gap-2 md:gap-3 flex-wrap">
                <button class="bg-oranje text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit button-modal h-[45px]">
                    <?php the_field('text_modal', 'option'); ?>
                </button>
                <?php include get_template_directory() . '/componenten/second_buttonOption.php'; ?>
            </menu>
        </div>
    </div>
</section>


<!-- WHY PORTUGAL -->
<section class="bg-creme py-8 md:py-10 section-hero">
    <div class="container ">
        <div class="text-center md:w-[766px] mx-auto">
            <p class="text-diepgrijs text-18 leading-28 lg:text-24 lg:leading-34 font-dmsans pb-3">With our extensive <span class="text-oranje">community</span> of software engineers, we offer <span class="text-oranje">innovative solutions</span> to power fast-growing tech companies in Europe</p>
        </div>
    </div>
    <div class="container text-center pt-4 md:pt-6">
        <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-diepgrijs">Why Portugal?</h2>
        <div class="grid pt-4 md:pt-6 md:grid-cols-3">
            <div class="md:col-span-1 text-center md:border-r-2 md:border-lichtgrijs md:last-of-type:border-r-0 px-4 pt-6 md:py-0 whoweare-card">
               
                    <img class="mx-auto h-6" src="/wp-content/themes/gapstars/img/icons-acf/icon-12.svg" alt="">
                    <h3 class="text-diepgrijs text-20 leading-30 mt-3 mb-3 md:my-3">An attractive <br>nearshore destination</h3>
                    <p class="text-16 leading-24 md:text-16 md:leading-26 w-full sm:w-4/5 md:w-full mx-auto">With time zone advantages, diversity in talent and access to unique tech stacks, Portugal is a competitive nearshore option.  </p>
                    <div class="w-[200px] h-[2px] bg-diepgrijs mx-auto md:hidden md:last-of-type:hidden mt-6 line"></div>
           
            </div>
            <div class="md:col-span-1 text-center md:border-r-2 md:border-lichtgrijs md:last-of-type:border-r-0 px-4 pt-6 md:py-0 whoweare-card">
           
                    <img class="mx-auto h-6" src="/wp-content/themes/gapstars/img/icons-acf/icon-7.svg" alt="">
                    <h3 class="text-diepgrijs text-20 leading-30 mt-3 mb-3 md:my-3">Enabling access <br>to global talent</h3>
                    <p class="text-16 leading-24 md:text-16 md:leading-26 w-full sm:w-4/5 md:w-full mx-auto">Portugal will help facilitate greater resource mobility and access to new talent markets to address the growing gap in tech talent accessibility. </p>
                    <div class="w-[200px] h-[2px] bg-diepgrijs mx-auto md:hidden md:last-of-type:hidden mt-6 line"></div>
                </div>
         
            <div class="md:col-span-1 text-center md:border-r-2 md:border-lichtgrijs md:last-of-type:border-r-0 px-4 pt-6 md:py-0 whoweare-card">
            
                    <img class="mx-auto h-6" src="/wp-content/themes/gapstars/img/icons-acf/icon-1.svg" alt="">
                    <h3 class="text-diepgrijs text-20 leading-30 mt-3 mb-3 md:my-3">A thriving tech <br>ecosystem</h3>
                    <p class="text-16 leading-24 md:text-16 md:leading-26 w-full sm:w-4/5 md:w-full mx-auto">Host of Europe’s largest tech meetup - The Web Summit and home to both regional and global tech talent. </p>
                    <div class="w-[200px] h-[2px] bg-diepgrijs mx-auto md:hidden md:last-of-type:hidden mt-6 line"></div>
              
            </div>
        </div>
    </div>
</section>


<!-- VALUE AND BENEFITS-->
<section class="pt-8 md:pt-10 pb-10 md:pb-12">
    <!-- VALUE -->
    <div class="container mb-8 md:mb-10">
         <div class="text-center md:w-[600px] mx-auto">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-white">We value the work we do <span class="text-oranje">and the impact we make</span></h2>
        </div>
        <div class="grid md:grid-cols-2 pt-4 md:pt-6 h-full">
            <div class="col-span-1 bg-creme rounded-b-3xl md:rounded-br-none md:rounded-l-3xl p-4 py-4 md:py-6 h-auto order-2 md:order-1">
                <h3 class="text-black text-30 leading-40">At Gapstars, it’s not your average 9-5, but a lot more! </h3>
                <ul class="list-disc list-outside ml-[15px] marker:text-oranje mt-3">
                    <li class="text-diepgrijs mb-1">Work in a global company that fosters innovation and continuous growth</li>
                    <li class="text-diepgrijs mb-1">Get your hands dirty with revolutionary tech</li>
                    <li class="text-diepgrijs mb-1">Gain exposure to the workings of some of the fastest-growing tech scaleups</li>
                    <li class="text-diepgrijs">Build a community of innovative leaders</li>
                </ul>
            </div>
            <div class="col-span-1 h-full order-1 md:order-2">
                <img src="https://gapstars.net/wp-content/uploads/2023/02/impact_portugal.jpg" alt="" class="object-cover object-top h-[300px] md:h-full w-full rounded-t-3xl md:rounded-tl-none md:rounded-r-3xl">
            </div>
        </div>
    </div>

    <!-- BENEFITS -->
      <div class="container mt-8 md:mt-10">
         <div class="text-center md:w-[600px] mx-auto">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-white">Perks & <span class="text-oranje">Benefits</span></h2>
        </div>
        <div class="text-center md:w-[724px] mx-auto pt-4">
            <p class="text-white text-18 leading-28 lg:text-24 lg:leading-34 font-dmsans">At Gapstars, you are an integral part of a familial and empathetic culture. We provide you with the means to uplift your lifestyle and empower you to pursue a progressive career and build technology that creates an impact. </p>
        </div>
        <div class="grid md:grid-cols-2 pt-4 md:pt-6 h-full">
             <div class="col-span-1 h-full">
                <img src="https://gapstars.net/wp-content/uploads/2023/02/benefits_portugal.jpg" alt="" class="object-cover h-[300px] md:h-full w-full rounded-t-3xl md:rounded-tr-none md:rounded-l-3xl">
            </div>
            <div class="col-span-1 bg-creme rounded-b-3xl md:rounded-bl-none md:rounded-r-3xl p-4 py-4 md:py-6 h-auto">
                <ul class="list-disc list-outside ml-[15px] marker:text-oranje">
                    <li class="text-diepgrijs mb-1">A state-of-the-art workspace at one of Lisbon’s most prominent co-working hubs</li>
                    <li class="text-diepgrijs mb-1">Monthly meal allowance, private health insurance and other attractive benefits, made available via Coverflex </li>
                    <li class="text-diepgrijs mb-1">A hybrid work model</li>
                    <li class="text-diepgrijs mb-1">Create your own career development plan with the Gapstars Academy</li>
                    <li class="text-diepgrijs mb-1">Opportunities to travel and take part in client visits</li>
                    <li class="text-diepgrijs">Be an active member of our community by attending community-driven events such as mixers and Friday Happy Hours</li>
                </ul>
            </div>
           
        </div>
    </div>
</section>



<section class="bg-creme pt-8 md:pt-10 pb-10 md:pb-12">
    <div class="container">
        <div class="text-center md:w-[618px] mx-auto">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-diepgrijs"><span class="text-oranje">We</span> invest in your career so that <span class="text-oranje">you</span> can stay ahead of the game!</h2>
        </div>
         <div class="grid md:grid-cols-2 pt-4 md:pt-6 h-full">

            <div class="col-span-1 bg-diepgrijs rounded-t-3xl md:rounded-tr-none md:rounded-l-3xl p-4 py-4 md:py-6 h-auto">
                <div class="h-[82px] flex items-center">
                    <?php include get_template_directory() . '/img/local/ga_logo.svg'; ?>
                </div>
                
                <p class="text-white mt-3 text-20 leading-30">The Gapstars Academy is our dedicated talent and career development unit, which focuses on empowering our employees to enrich both their technical skills and their soft skills.</p>
            </div>
            <div class="col-span-1 bg-lightcreme rounded-b-3xl md:rounded-bl-none md:rounded-r-3xl p-4 py-4 md:py-6 h-auto">
                <h3 class="text-oranje text-30 leading-40">Academy<br>offering</h3>
                <ul class="list-disc list-outside ml-[15px] marker:text-oranje mt-3">
                    <li class="text-diepgrijs mb-1">Moonshots - Personalised training plan</li>
                    <li class="text-diepgrijs mb-1">E-learning</li>
                    <li class="text-diepgrijs mb-1">Mentorship</li>
                    <li class="text-diepgrijs mb-1">Technical Licenses & Certifications</li>
                    <li class="text-diepgrijs">Speechcraft</li>
                </ul>
            </div>
        </div>
    </div>
     <div class="container mt-8 md:mt-10">
        <div class="text-center md:w-[618px] mx-auto">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-diepgrijs">This could be <span class="text-oranje">you</span></h2>
        </div>
     </div>
    <div class="pt-4 md:pt-6 md:container">
        <div class="relative">
            <div class="relative">
                <div class="px-0">
                    <div class="swiper mySwiper-3D">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_001.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_003.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_002.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_004.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_005.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_009.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_010.jpg" alt="Slider image">
                            </div>
                            <div class="swiper-slide">
                                <img class="md:rounded-3xl"  src="https://gapstars.net/wp-content/uploads/2023/02/dcby_006.jpg" alt="Slider image">
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


<!-- TEAM & VACANCIES-->
<section class="pt-8 md:pt-10">
    <!-- TEAM -->
    <div class="container mb-8 md:mb-10">
         <div class="text-center md:w-[600px] mx-auto">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-white">Meet the <span class="text-oranje">team</span></h2>
        </div>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-3 pt-4 md:pt-6">
            <div class="col-span-1">
                <div class="rounded-t-3xl bg-[#292929]">
                    <img src="https://gapstars.net/wp-content/uploads/2023/02/stephanie_portugal.png" alt="" class="rounded-t-3xl">
                </div>
                <div class="rounded-b-3xl bg-creme">
                    <div class="px-3 pt-2 pb-3">
                        <h3 class="text-diepgrijs text-20 leading-35">Stefanie Driever</h3>
                        <p class="text-diepgrijs text-16 leading-24">Country Lead</p>
                        <p class="text-oranje text-16 leading-24">Portugal</p>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="rounded-t-3xl bg-[#292929]">
                    <img src="https://gapstars.net/wp-content/uploads/2023/02/bhashini_portugal.png" alt="" class="rounded-t-3xl">
                </div>
                <div class="rounded-b-3xl bg-creme">
                    <div class="px-3 pt-2 pb-3">
                        <h3 class="text-diepgrijs text-20 leading-35">Bhashini Pathirana</h3>
                        <p class="text-diepgrijs text-16 leading-24">Operations and Strategy</p>
                        <p class="text-oranje text-16 leading-24">Portugal</p>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="rounded-t-3xl bg-[#292929]">
                    <img src="https://gapstars.net/wp-content/uploads/2023/02/joao_portugal.png" alt="" class="rounded-t-3xl">
                </div>
                <div class="rounded-b-3xl bg-creme">
                    <div class="px-3 pt-2 pb-3">
                        <h3 class="text-diepgrijs text-20 leading-35">João Santos</h3>
                        <p class="text-diepgrijs text-16 leading-24">Talent Acquisition Manager</p>
                        <p class="text-oranje text-16 leading-24">Portugal</p>
                    </div>
                </div>
            </div>
       </div>
    </div>

    <!-- VACANCIESS -->
      <div class="container mt-8 md:mt-10">
        <div class="text-center md:w-[600px] mx-auto">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 font-normal text-center text-white">Latest <span class="text-oranje">vacancies</span></h2>
        </div>
        <div class="hidden section-vacancies max-w-[850px] mx-auto portugal pt-4 md:pt-6">
            <div id="recruitee-careers"></div>
        </div>
        <div class="flex justify-center pt-3 md:pt-5">
            <a id="button-Allavailablepositions" href="https://gapstars.net/careers/jobs/" target="_self" class="btn-oranje text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit">All available positions</a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="mt-10 md:mt-12">
    <section>
        <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 bg-creme rounded-t-3xl md:rounded-tr-none  md:rounded-l-3xl">
                <img src="https://gapstars.net/wp-content/uploads/2023/02/footer_portugal.jpg" alt="" class="object-cover h-[300px] md:h-full w-full rounded-t-3xl md:rounded-tr-none  md:rounded-l-3xl">
            </div>
            <div class="w-full md:w-1/2  p-4 md:p-4 md:pt-6 bg-grijs rounded-b-3xl md:rounded-bl-none  md:rounded-r-3xl flex flex-col justify-between md:pr-8">
                <h3 class="text-creme text-28 leading-38 mb-4 font-medium"><?php the_field('title_block_footer_right', 'option'); ?></h3>
                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container grid grid-cols-6 w-full mt-10 mb-6 md:my-6 px-5 md:px-3">
            <div class="col-span-2 order-11 md:order-[0]">
                <a class="logo max-w-full"href="/"><?php include('wp-content/themes/gapstars/img/icons/logo.php'); ?></a>
            </div>
            <div class="col-span-3 md:col-span-1 mb-6 md:mb-[unset]">
                <h4 class="text-oranje text-base font-bold mb-2 text-16">Menu</h4>
                <ul class="flex flex-col gap-1">
                    <?php if( have_rows('menu_1', 'option') ): ?>
                        <?php while( have_rows('menu_1', 'option') ): the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('url', 'option'); ?>" id="<?php the_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php the_sub_field('name', 'option'); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-span-3 md:col-span-1 mb-6 md:mb-[unset]">
                <h4 class="text-oranje text-base font-bold mb-2 text-16">Information</h4>
                <ul class="flex flex-col gap-1">
                    <?php if( have_rows('menu_2', 'option') ): ?>
                        <?php while( have_rows('menu_2', 'option') ): the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('url', 'option'); ?>" id="<?php the_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php the_sub_field('name', 'option'); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-span-3 md:col-span-1 mb-6 md:mb-[unset]">
                <h4 class="text-oranje text-base font-bold mb-2 text-16">Locations</h4>
                <ul class="flex flex-col gap-1">
                    <?php if( have_rows('menu_3', 'option') ): ?>
                        <?php while( have_rows('menu_3', 'option') ): the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('url', 'option'); ?>" id="<?php the_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php the_sub_field('name', 'option'); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-span-3 md:col-span-1 mb-6 md:mb-[unset]">
                <h4 class="text-oranje text-base font-bold mb-2">Follow us</h4>
                <ul class="flex flex-col gap-1">
                    <?php if( have_rows('menu_4', 'option') ): ?>
                        <?php while( have_rows('menu_4', 'option') ): the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('url', 'option'); ?>" id="<?php the_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php the_sub_field('social', 'option'); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container  gap-4 px-6 md:px-3">
            <div class="grid md:grid-cols-3 border-t-2 border-lichtgrijs py-4 md:py-3">
                <div class="md:col-span-2">
                    <p class="text-creme text-14 leading-28 font-medium">© <?php echo date("Y") ?> Gapstars B.V. - <br class="md:hidden"> All Rights Reserved - <a href="<?php the_field('url_footer', 'option'); ?>" id="<?php the_field('button_id_footer', 'option'); ?>">Privacy Policy</a></p>
                </div>
                <div class="md:col-span-1 flex md:justify-end mt-4 md:mt-0">
                    <p class="text-creme font-medium  text-14 leading-28">Site by <a href="https://mistermonki.nl">Mistermonki</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>



<script>
    try {
  const inner = document.querySelector(".inner-hero");
  const section = document.querySelector(".section-hero");



  window.onscroll = function () {
    let value = window.pageYOffset / 2 / section.offsetTop + 1;
    inner.style.transform = `scale(${value})`;

  };
} catch (error) { }

</script>

<script type="text/javascript"> 
          var rtscript = document.createElement('script'); 
          rtscript.type = 'text/javascript';  
          rtscript.onload = function() { 
            var widget = new RTWidget({ 
 "companies": [
   1674
 ],
 "detailsMode": "popup",
 "language": "en",
 "departmentsFilter": [],
 "themeVars": {
   "primary": "#1999e3",
   "secondary": "#000",
   "text": "#5c6f78",
   "textDark": "#37474f",
   "fontFamily": " sans-serif;",
   "baseFontSize": "16px"
 },
 "flags": {
   "showLocation": true,
   "showCountry": true,
   "showCity": true,
   "groupByLocation": true,
   "groupByDepartment": false,
   "groupByCompany": false,
 }
 }) };
            rtscript.src = 'https://d10zminp1cyta8.cloudfront.net/widget.js';
            document.body.appendChild(rtscript);
</script>

<script>
      setTimeout(() => {
        document.querySelector('.section-vacancies').classList.remove("hidden");
        const offerItems = document.querySelectorAll('.rt-list__offer-item');

offerItems.forEach(offerItem => {
  const locationText = offerItem.querySelector('.rt-list__offer-location').textContent;

  if (!locationText.includes('Lisbon')) {
    offerItem.style.display = 'none';
  }
});
        document.querySelector('.loader').classList.add("hidden");
    }, 2000)
</script>



<?php get_footer('empty'); ?>