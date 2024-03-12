<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="bg-[#202020]">
    <section>
        <div class="container pt-6 md:pt-8 pb-5 px-5 md:px-3">
            <hr class="border-t-2 border-lichtgrijs">
        </div>
        <div class="container grid grid-cols-6 w-full  mb-6 md:mb-6 px-5 md:px-3">
            <div class="col-span-2 order-11 md:order-[0]">
                <a class="logo max-w-full"href="/"><?php include('wp-content/themes/gapstars/img/icons/logo.php'); ?></a>
            </div>
            <div class="col-span-3 md:col-span-1 mb-6 md:mb-[unset]">
                <h4 class="text-oranje text-base font-bold mb-2 text-16">Menu</h4>
                <ul class="flex flex-col gap-1">
                    <?php if( have_rows('menu_1', 'option') ): ?>
                        <?php while( have_rows('menu_1', 'option') ): the_row(); ?>
                            <li>
                                <a href="<?php echo get_sub_field('url', 'option'); ?>" id="<?php echo get_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php echo get_sub_field('name', 'option'); ?></p>
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
                                <a href="<?php echo get_sub_field('url', 'option'); ?>" id="<?php echo get_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php echo get_sub_field('name', 'option'); ?></p>
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
                                <a href="<?php echo get_sub_field('url', 'option'); ?>" id="<?php echo get_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php echo get_sub_field('name', 'option'); ?></p>
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
                                <a href="<?php echo get_sub_field('url', 'option'); ?>" id="<?php echo get_sub_field('button_id', 'option'); ?>">
                                    <p class="text-white text-16"><?php echo get_sub_field('social', 'option'); ?></p>
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
                    <p class="text-creme text-14 leading-28 font-medium">© <?php echo date("Y") ?> Gapstars B.V. - <br class="md:hidden"> All Rights Reserved - <a href="<?php echo get_field('url_footer', 'option'); ?>" id="<?php echo get_field('button_id_footer', 'option'); ?>">Privacy Policy</a></p>
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