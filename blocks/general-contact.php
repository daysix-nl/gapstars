<section class="<?php echo the_field('inner-margin'); ?> <?php echo the_field('background-color'); ?> <?php echo the_field('inner-padding'); ?> contact-form">
    <div class="container grid md:grid-cols-5 gap-5 md:gap-10">
        <div class="md:col-span-3 grid gap-9">
            <?php if(get_field('text')): ?>
                <p class="<?php echo the_field('text-color'); ?> text-22 md:text-26 leading-30 md:leading-36"><?php echo the_field('text'); ?></p>
            <?php endif; ?>
            <?php if(get_field('form')): ?>
                <div class="md:pr-4 form-block">
                    <?php echo the_field('form'); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if(get_field('title')): ?>
            <div class="md:col-span-2">
                <div class="mb-3 rounded-3xl p-4 <?php echo the_field('background-color_inner'); ?> h-auto grid gap-3 md:pr-10 max-w-[350px]">
                    <h3 class="text-30 md:text-40 leading-30 md:leading-40 <?php echo the_field('text-color_inner'); ?> font-medium"><?php echo the_field('title'); ?></h3>
                    <div class="rounded-3xl relative overflow-hidden block scale-img">
                        <img class="w-full object-fill ease-in-out duration-500" src="<?php echo the_field('image'); ?>" alt="">
                    </div>
                    <p class="<?php echo the_field('text-color_inner'); ?> text-16 leading-26">
                        <?php echo the_field('text_card'); ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>