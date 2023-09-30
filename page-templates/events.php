<?php
/**
 * Template name: Events
 */


get_header(''); ?>
<div class="events-page">

<section class="h-[600px] md:h-[calc(100vh-103px)] relative flex">
    <img class="absolute w-full h-full top-0 right-0 z-0 object-cover"
        src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="hero-careers">
    <div class="hero_block absolute w-full h-full top-0 right-0 z-[1]"></div>
    <div class="container relative z-[2] my-auto">
        <h1 class="text-white text-65 leading-65 md:text-75 md:leading-75 font-medium row-center">Events</h1>
    </div>
</section>

<section class="bg-lightcreme">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-[25px] md:gap-6 py-6 md:py-10">
        <div class="col-span-1">
            <img class="w-full h-full aspect-video md:aspect-square rounded-3xl object-cover" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
        </div>
        <div class="col-span-1 md:py-4">
            <p class="font-bold text-18 leading-26 text-oranje " >Featured Event</p>
            <h2 class="text-diepgrijs text-40 leading-40 pt-1.5 font-bold">Scale-up 2023</h2>
            <p class="w-full max-w-[400px] text-18 leading-26 md:text-28 md:leading-38 text-diepgrijs pt-2">With a story that sprouted from a dream and humble beginnings in 2015, we've now grown to a company of 200+ employees, 28+ clients, and an ongoing…</p>
            <p class="font-bold text-18 leading-26 text-oranje pt-2">Mon, 24 April 2023</p>
            <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                <a href="" class="bg-oranje text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                    Read more
                </a>
                <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                    href="#">
                    Watch now
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-creme">
    <div class="container grid grid-cols-3 md:grid-cols-4 gap-2 py-6 md:py-10">
        <div class="col-span-1 relative hidden md:block">
            <div class="sticky top-[120px] p-2 pt-3 pb-[65px] bg-oranje rounded-3xl">
                <input class="w-full placeholder:text-[#505050] bg-white rounded-3xl h-5 px-2 mb-3 focus:ring-white focus:ring-1" placeholder="Location" type="text">
                <fieldset>
                    <legend class="mb-2 text-18 leading-28 text-white font-bold">Categories</legend>
                    <div class="flex items-center">
                        <input type="radio" id="Upcomingevents" name="filter" value="Upcomingevents" />
                        <label class=" text-18 leading-36 text-white ml-[10px]" for="Upcomingevents">Upcoming events</label>
                    </div>

                    <div class="flex items-center">
                        <input type="radio" id="Techevents" name="filter" value="Techevents" />
                        <label class=" text-18 leading-36 text-white ml-[10px]" for="Techevents">Tech events</label>
                    </div>

                    <div class="flex items-center">
                        <input type="radio" id="Partners" name="filter" value="Partners" />
                        <label class=" text-18 leading-36 text-white ml-[10px]" for="Partners">Partners</label>
                    </div>

                    <div class="flex items-center">
                        <input type="radio" id="Conference" name="filter" value="Conference" />
                        <label class=" text-18 leading-36 text-white ml-[10px]" for="Conference">Conference</label>
                    </div>

                    <div class="flex items-center">
                        <input  type="radio" id="Celebrations" name="filter" value="Celebrations" />
                        <label class=" text-18 leading-36 text-white ml-[10px]" for="Celebrations">Celebrations</label>
                    </div>
                </fieldset>
                <div class="h-[2px] w-full bg-white my-3"></div>
                <a class="flex space-x-1 items-center w-full" href="">
                    <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                        <defs>
                            <clipPath id="clip-path">
                            <path id="Clip_2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                            </clipPath>
                        </defs>
                        <path id="Clip_2-2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                        <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                            <path id="Fill_1" data-name="Fill 1" d="M8,16H8A8,8,0,0,1,2.345,2.342,8,8,0,1,1,13.656,13.658,7.944,7.944,0,0,1,8,16Zm-.337-4.706a1.571,1.571,0,1,0,0,3.142,1.571,1.571,0,0,0,0-3.142Zm-.03-6.222c1.025,0,1.025.632,1.025.84,0,.639-.355.9-.928,1.1-.1.036-.207.066-.31.1L7.4,7.116c-.443.13-.944.277-.944.765V9.819c0,.423.165.588.587.588H8.177c.422,0,.586-.165.586-.588V8.951c2.511-.867,2.511-2.379,2.511-3.024a3.06,3.06,0,0,0-3.3-3.161c-.783,0-3.145.417-3.145,1.176a.587.587,0,0,0,.058.288l.392,1.03a.439.439,0,0,0,.415.322,1.089,1.089,0,0,0,.386-.122A4.009,4.009,0,0,1,7.634,5.072Z" transform="translate(0 0)" fill="#fff"/>
                        </g>
                    </svg>
                    <p class="text-white text-12 leading-36">What’s new at Gapstars</p>
                </a>
                <a class="flex space-x-1 items-center w-full" href="">
                    <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                        <defs>
                            <clipPath id="clip-path">
                            <path id="Clip_2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                            </clipPath>
                        </defs>
                        <path id="Clip_2-2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                        <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                            <path id="Fill_1" data-name="Fill 1" d="M8,16A8,8,0,0,1,2.345,2.342,8,8,0,0,1,13.657,13.658,7.949,7.949,0,0,1,8,16ZM5.709,3.821v8.354l3.579-2.088L12.868,8,9.288,5.91,5.709,3.821Z" transform="translate(0 0)" fill="#fff"/>
                        </g>
                    </svg>
                    <p class="text-white text-12 leading-18">Featured videos</p>
                </a>
            </div>
        </div>
        <div class="col-span-3 flex flex-col ">
            <button class="text-white text-14 leading-24 flex md:hidden justify-center items-center h-5 rounded-3xl bg-oranje w-full mb-4 open-modal-events">Filter</button>
            <div class="space-y-4">
                 <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden ">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>

                <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>


                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>



                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>



                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>



                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>



                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>




                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>




                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>




                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>




                        <div class="overflow-hidden  grid-cols-1 md:grid-cols-3 md:gap-3 bg-lightcreme rounded-3xl box-events hidden">
                <div class="col-span-1">
                    <img class="h-full w-full object-cover aspect-video" src="https://gapstars.net/wp-content/uploads/2023/07/header_careers-2023.jpeg" alt="">
                </div>
                <div class="col-span-1 md:col-span-2 pt-2 pb-6 md:py-3 px-3 md:px-0">
                    <h3 class="pb-2 max-w-[300px] text-28 leading-38 text-diepgrijs font-bold">Gapstars Cricket Tournament 2022</h3>
                    <p class="pb-2 max-w-[340px] text-18 leading-28 text-diepgrijs">Our story runs deeper than just tech. We are committed to giving back to our community…</p>
                    <p class="text-14 leading-26 text-diepgrijs font-bold">Mon, 24 April 2023</p>
                    <div class="flex pt-2 gap-2 md:gap-3 flex-wrap">
                        <a href="" class="bg-black text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                            Read more
                        </a>
                        <a class="bg-[#FFFFFF] text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
                            href="#">
                            Watch now
                        </a>
                    </div>
                    <div class="pt-2 flex gap-1 flex-wrap">
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 1</a>
                        <a class="bg-creme px-1 h-3 rounded-3xl text-14 leading-26 flex w-fit justify-center items-center" href="">Tag 2</a>
                    </div>
                </div>
            </div>
            <div class="button-box-events">
                <button class="bg-oranje  text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit h-[45px] open-modal-apply">
                    More events
                </button>
            </div>
            </div>
        </div>
    </div>
</section>

<div class="modal-overlay z-40 bg-black/60 fixed right-0 top-0 h-screen w-screen hidden"></div>
<div class="fixed right-0 top-0 min-h-[100dvh] bg-oranje max-w-[400px] w-[90vw] z-50 modal-events open">
    <div class="p-2 relative">
        <div class="h-8 flex">
            <button class="ml-auto my-auto close-modal-events">
                <svg id="Group" xmlns="http://www.w3.org/2000/svg" width="22.627" height="22.627" viewBox="0 0 22.627 22.627">
                    <rect id="Rectangle" width="30" height="2" transform="translate(1.414 0) rotate(45)" fill="#fff"/>
                    <rect id="Rectangle_Copy_3" data-name="Rectangle Copy 3" width="30" height="2" transform="translate(0 21.213) rotate(-45)" fill="#fff"/>
                </svg>
            </button>
        </div>
        <input class="w-full placeholder:text-[#505050] bg-white rounded-3xl h-5 px-2 mb-6 focus:ring-white focus:ring-1" placeholder="Location" type="text">
        <fieldset>
            <legend class="mb-4 text-34 leading-28 text-white">Categories</legend>
            <div class="flex items-center">
                <input type="radio" id="Upcomingevents-mobile" name="filter-mobile" value="Upcomingevents" />
                <label class=" text-22 leading-36 text-white ml-[10px]" for="Upcomingevents-mobile">Upcoming events</label>
            </div>

            <div class="flex items-center">
                <input type="radio" id="Techevents-mobile" name="filter-mobile" value="Techevents" />
                <label class=" text-22 leading-36 text-white ml-[10px]" for="Techevents-mobile">Tech events</label>
            </div>

            <div class="flex items-center">
                <input type="radio" id="Partners-mobile" name="filter-mobile" value="Partners" />
                <label class=" text-22 leading-36 text-white ml-[10px]" for="Partners-mobile">Partners</label>
            </div>

            <div class="flex items-center">
                <input type="radio" id="Conference-mobile" name="filter-mobile" value="Conference" />
                <label class=" text-22 leading-36 text-white ml-[10px]" for="Conference-mobile">Conference</label>
            </div>

            <div class="flex items-center">
                <input  type="radio" id="Celebrations-mobile" name="filter-mobile" value="Celebrations" />
                <label class=" text-22 leading-36 text-white ml-[10px]" for="Celebrations-mobile">Celebrations</label>
            </div>
        </fieldset>

        <div class="h-[2px] w-full bg-white my-3"></div>    

        <div>
            <a class="flex space-x-1 items-center w-full" href="">
                <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                    <defs>
                        <clipPath id="clip-path">
                        <path id="Clip_2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                        </clipPath>
                    </defs>
                    <path id="Clip_2-2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                    <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                        <path id="Fill_1" data-name="Fill 1" d="M8,16H8A8,8,0,0,1,2.345,2.342,8,8,0,1,1,13.656,13.658,7.944,7.944,0,0,1,8,16Zm-.337-4.706a1.571,1.571,0,1,0,0,3.142,1.571,1.571,0,0,0,0-3.142Zm-.03-6.222c1.025,0,1.025.632,1.025.84,0,.639-.355.9-.928,1.1-.1.036-.207.066-.31.1L7.4,7.116c-.443.13-.944.277-.944.765V9.819c0,.423.165.588.587.588H8.177c.422,0,.586-.165.586-.588V8.951c2.511-.867,2.511-2.379,2.511-3.024a3.06,3.06,0,0,0-3.3-3.161c-.783,0-3.145.417-3.145,1.176a.587.587,0,0,0,.058.288l.392,1.03a.439.439,0,0,0,.415.322,1.089,1.089,0,0,0,.386-.122A4.009,4.009,0,0,1,7.634,5.072Z" transform="translate(0 0)" fill="#fff"/>
                    </g>
                </svg>
                <p class="text-white text-12 leading-36">What’s new at Gapstars</p>
            </a>
            <a class="flex space-x-1 items-center w-full" href="">
                <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                    <defs>
                        <clipPath id="clip-path">
                        <path id="Clip_2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                        </clipPath>
                    </defs>
                    <path id="Clip_2-2" data-name="Clip 2" d="M0,0H16V16H0Z" fill="none"/>
                    <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                        <path id="Fill_1" data-name="Fill 1" d="M8,16A8,8,0,0,1,2.345,2.342,8,8,0,0,1,13.657,13.658,7.949,7.949,0,0,1,8,16ZM5.709,3.821v8.354l3.579-2.088L12.868,8,9.288,5.91,5.709,3.821Z" transform="translate(0 0)" fill="#fff"/>
                    </g>
                </svg>
                <p class="text-white text-12 leading-18">Featured videos</p>
            </a>
        </div>
    </div>
</div>

</div>
<?php get_footer('black'); ?>