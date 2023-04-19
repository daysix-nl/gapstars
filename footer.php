<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="mt-10 md:mt-12">
    <section>
        <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 p-4 pt-6 bg-creme rounded-t-3xl md:rounded-tr-none  md:rounded-l-3xl">
                <h3 class="text-black text-28 leading-38 font-medium "><?php the_field('title_block_footer', 'option'); ?></h3>
                <p class="my-4 text-base pr-4 md:pr-8 text-18 leading-26 font-normal"><?php the_field('text_block_footer', 'option'); ?></p>
                <button
                    class="bg-oranje text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit button-modal h-[45px]"
                >
                    <?php the_field('text_modal', 'option'); ?>
                </button>
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
                    <div class="grid gap-2">
                    <a class="logo max-w-full" href="/"><?php include('wp-content/themes/gapstars/img/icons/logo.php'); ?></a>
                    <a class="logo max-w-full aspect-video" href="/"><?php include('wp-content/themes/gapstars/img/local/DNV_logo.svg'); ?></a>
                   </div>
        
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

<?php wp_footer(); ?>
</div>
</body>
</html>